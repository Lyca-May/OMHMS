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
            'selected_cart_items' => 'required|array',
            'selected_cart_items.*' => 'exists:cart_items,cart_item_id',
        ]);

        // Loop through the selected cart items and insert them into the souvenirs_reserved table
        foreach ($request->input('selected_cart_items') as $cartItemId) {
            // Retrieve the cart item
            $cartItem = CartItem::find($cartItemId);

            // Create a new reserved souvenir
            Reserved_Souvenir::create([
                'userid' => $user_id,
                'souvenir_id' => $cartItem->souvenir_id,
                'quantity' => $cartItem->quantity,
                'total_price' => $cartItem->total_price,
                'is_archived' => false,
            ]);

            // Update the quantity field in the souvenirs table
            $souvenir = SouvenirsModel::find($cartItem->souvenir_id);
            $souvenir->souvenir_qty -= $cartItem->quantity;
            $souvenir->save();

            // Mark the cart item as archived
            $cartItem->is_archived = true;
            $cartItem->save();
        }

        return redirect()->back()->with('success', 'Selected items have been added to your reservation!');
    }


}
