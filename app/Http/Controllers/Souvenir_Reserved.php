<?php

namespace App\Http\Controllers;

use App\Models\Admin\Visit_Model;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Reserved_Souvenir;
use App\Models\Sales;
use App\Models\SouvenirsModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
        $visit = Visit_Model::where('userid', $user_id)->where('visits_status', 'PENDING')->first();

        if (!$visit) {
            // If no pending visit is found, display an error message and exit
            return redirect()->back()->with('error', 'You do not have a pending visit to add souvenirs to.');
        }

        try {
            // Start a database transaction
            DB::beginTransaction();

            foreach ($request->input('selected_cart_items') as $cartItemId) {
                // Retrieve the cart item
                $cartItem = CartItem::find($cartItemId);

                if (!$cartItem) {
                    // Log an error and continue to the next item
                    Log::error('Cart item not found for cart_item_id: ' . $cartItemId);
                    continue;
                }

                // Create a new reserved souvenir
                $reservedSouvenir = Reserved_Souvenir::create([
                    'userid' => $user_id,
                    'souvenir_id' => $cartItem->souvenir_id,
                    'visits_id' => $visit->visits_id,
                    'quantity' => $cartItem->quantity,
                    'total_price' => $cartItem->total_price,
                    'is_archived' => false,
                    'status' => 'RESERVED',
                ]);

                // Update the quantity field in the souvenirs table
                $souvenir = SouvenirsModel::find($cartItem->souvenir_id);

                if ($souvenir) {
                    $souvenir->souvenir_qty -= $cartItem->quantity;
                    $souvenir->save();
                } else {
                    // Log an error and continue to the next item
                    Log::error('Souvenir not found for souvenir_id: ' . $cartItem->souvenir_id);
                    continue;
                }

                // Create a new sales record
                $saleDate = $reservedSouvenir->updated_at;
                $quantity = $reservedSouvenir->quantity;
                $price = $cartItem->price;
                $totalPrice = $reservedSouvenir->total_price;
                $status = 'PENDING';

                Sales::create([
                    'souvenirReservations_id' => $reservedSouvenir->souvenir_reservations_id,
                    'userid' => $user_id,
                    'sale_date' => $saleDate,
                    'quantity' => $quantity,
                    'price' => $price,
                    'total_price' => $totalPrice,
                    'status' => $status,
                ]);

                // Mark the cart item as archived
                $cartItem->is_archived = true;
                $cartItem->save();
            }

            // Commit the database transaction
            DB::commit();

            return redirect()->back()->with('success', 'Selected items have been added to your reservation!');
        } catch (\Exception $e) {
            // An error occurred, rollback the database transaction
            DB::rollback();

            // Log the exception for debugging
            Log::error('Error in addToReserved: ' . $e->getMessage());

            // Display an error message to the user
            return redirect()->back()->with('error', 'An error occurred while adding items to your reservation. Please try again later.');
        }
    }
}
