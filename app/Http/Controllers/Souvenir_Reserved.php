<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Reserved_Souvenir;
use App\Models\SouvenirsModel;

// use App\Models\SouvenirsModel;

class Souvenir_Reserved extends Controller
{

    public function addToReserved(Request $request)
    {
        $user_id = session('User')['user_id'];

        // Validate the request data
        $request->validate([
            'souvenir_id' => 'required|exists:souvenir,souvenir_id',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric',
        ]);

        // Retrieve the souvenir details
        $souvenir = SouvenirsModel::find($request->souvenir_id);

        if (!$souvenir) {
            return redirect()->back()->with('error', 'Souvenir not found!');
        }

        $quantity = $request->input('quantity');
        $totalPrice = $request->input('total_price');
        $souvenir_id = $request->input('souvenir_id');

        // Check if there are enough available souvenirs
        if ($souvenir->souvenir_qty < $quantity) {
            return redirect()->back()->with('error', 'Insufficient quantity of souvenirs!');
        }

        // Add the item to the souvenir_reservations table
        Reserved_Souvenir::create([
            'userid' => $user_id,
            'souvenir_id' => $souvenir_id,
            'quantity' => $quantity,
            'total_price' => $totalPrice,
            'is_archived' => false,
        ]);

        // Update the souvenir_qty field in the souvenirs table
        $souvenir->souvenir_qty -= $quantity;
        $souvenir->save();

        // Update the is_archived field in the cart_items table
        $cartItem = CartItem::where('souvenir_id', $souvenir_id)
            ->where('userid', $user_id)
            ->first();

        if ($cartItem) {
            $cartItem->is_archived = true;
            $cartItem->save();
        }

        return redirect()->back()->with('success', 'Item added to cart successfully!');
    }


}
