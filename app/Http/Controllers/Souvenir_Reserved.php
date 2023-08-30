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

        // Check if there is an existing reserved souvenir for the user and souvenir
        $reservedSouvenir = Reserved_Souvenir::where('userid', $user_id)
            ->where('souvenir_id', $souvenir->souvenir_id)
            ->first();

        if ($reservedSouvenir) {
            // Update the quantity and total price of the existing reserved souvenir
            $reservedSouvenir->quantity += $request->quantity;
            $reservedSouvenir->total_price += $request->total_price;
            $reservedSouvenir->save();
        } else {
            // Create a new reserved souvenir
            Reserved_Souvenir::create([
                'userid' => $user_id,
                'souvenir_id' => $souvenir->souvenir_id,
                'quantity' => $request->quantity,
                'total_price' => $request->total_price,
                'is_archived' => false,
            ]);
        }

        // Update the quantity field in the souvenirs table
        $souvenir->souvenir_qty -= $request->quantity;
        $souvenir->save();

        // Mark the cart item as archived if it exists
        $cartItem = CartItem::where('souvenir_id', $request->souvenir_id)
            ->where('userid', $user_id)
            ->first();

        if ($cartItem) {
            $cartItem->is_archived = true;
            $cartItem->save();
        }

        return redirect()->back()->with('success', 'Item has been added to your reservation!');
    }

}
