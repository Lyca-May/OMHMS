<?php

namespace App\Http\Controllers;

use App\Models\Admin\Visit_Model;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Reserved_Souvenir;
use App\Models\SouvenirsModel;

// use App\Models\SouvenirsModel;

class Souvenir_Reserved extends Controller
{

    public function addToReserved(Request $request)
{
    // Get the user ID from the session
    $user_id = session('User')['user_id'];

    // Validate the request data
    $request->validate([
        'selected_cart_items' => 'required|array',
        'selected_cart_items.*' => 'exists:cart_items,cart_item_id',
    ]);

    // Check the status of the visit
    $visits_id = null; // Initialize with null
    $visit = Visit_Model::where('userid', $user_id)->where('visits_status', 'PENDING')->first();

    if ($visit) {
        // If a pending visit is found, get its ID
        $visits_id = $visit->visits_id;
    } else {
        // If no pending visit is found, display an error message
        return redirect()->back()->with('error', 'You do not have a pending visit to add souvenirs to.');
    }

    // Loop through the selected cart items and insert them into the souvenirs_reserved table
    foreach ($request->input('selected_cart_items') as $cartItemId) {
        // Retrieve the cart item
        $cartItem = CartItem::find($cartItemId);

        // Ensure that the cartItem exists
        if ($cartItem) {
            // Create a new reserved souvenir with the retrieved visits_id
            Reserved_Souvenir::create([
                'userid' => $user_id,
                'souvenir_id' => $cartItem->souvenir_id,
                'visits_id' => $visits_id,
                'quantity' => $cartItem->quantity,
                'total_price' => $cartItem->total_price,
                'is_archived' => false,
                'status' => 'RESERVED',
            ]);

            // Update the quantity field in the souvenirs table
            $souvenir = SouvenirsModel::find($cartItem->souvenir_id);
            $souvenir->souvenir_qty -= $cartItem->quantity;
            $souvenir->save();

            // Mark the cart item as archived
            $cartItem->is_archived = true;
            $cartItem->save();
        }
    }

    return redirect()->back()->with('success', 'Selected items have been added to your reservation!');
}



}
