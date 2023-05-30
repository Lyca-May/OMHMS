<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Souvenir_Reserved;
use App\Models\SouvenirsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    public function displaySouvenir()
    {
        // Fetch cart items
        $addedItem = DB::table('cart_items')->where('is_archived', 0)->count();
        $cartItems = CartItem::with('souvenir')->get();
        $souvenirs = SouvenirsModel::with('category')->where('souvenir_status','posted')->get();
        return view('user.pages.landingpage1.souvenirs.souvenirs1', compact('souvenirs', 'cartItems', 'addedItem'));
    }
    public function displaySouvenir1()
    {
        // Fetch cart items
        $addedItem = DB::table('cart_items')->where('is_archived', 0)->count();
        $cartItems = CartItem::with('souvenir')->get();
        $souvenirs = SouvenirsModel::with('category')->where('souvenir_status','posted')->get();
        return view('user.pages.landingpage.souvenirs.souvenirs', compact('souvenirs', 'cartItems', 'addedItem'));
    }

    public function addToCart(Request $request)
    {
        $user_id = session('User')['user_id'];

        // Validate the request data
        $request->validate([
            'souvenir_id' => 'required|exists:souvenirs,souvenir_id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Retrieve the souvenir details
        $souvenir = SouvenirsModel::find($request->souvenir_id);

        if (!$souvenir) {
            return redirect()->back()->with('failed', 'Souvenir not found!');
        }

        // Calculate the total price
        $total_price = $souvenir->souvenir_price * $request->quantity;

        // Check if the item already exists in the cart
        $cartItem = CartItem::where('userid', $user_id)
            ->where('souvenir_id', $request->souvenir_id)
            ->first();

        if ($cartItem) {
            // Update the quantity and total price of the existing cart item
            $cartItem->quantity += $request->quantity;
            $cartItem->total_price = $souvenir->souvenir_price * $cartItem->quantity;
            $cartItem->save();
        } else {
            // Create a new cart item
            $cartItem = new CartItem();
            $cartItem->userid = $user_id;
            $cartItem->souvenir_id = $request->souvenir_id;
            $cartItem->quantity = $request->quantity;
            $cartItem->price = $request->price;
            $cartItem->total_price = $total_price;
            $cartItem->is_archived = false;
            $cartItem->save();
        }

        if ($cartItem) {
            return redirect()->back()->with('success', 'Item added to cart successfully!');
        }

        return redirect()->back()->with('failed', 'Failed to add item to cart!');
    }


    public function removeFromCart(Request $request)
    {
        // Validate the request data
        $request->validate([
            'cart_item_id' => 'required|exists:cart_items,id',
        ]);

        $cartItem = CartItem::findOrFail($request->cart_item_id);
        $cartItem->delete();

        return redirect()->back()->with('success', 'Item removed from cart successfully!');
    }

    public function reserve(Request $request)
    {
        // Fetch cart items
        $cartItems = CartItem::all();

        // Reserve each cart item
        foreach ($cartItems as $cartItem) {
            // Check if the item is available in the required quantity
            $souvenir = SouvenirsModel::findOrFail($cartItem->souvenir_id);

            if ($souvenir->quantity >= $cartItem->quantity) {
                // Create a new reservation
                $reservation = new Souvenir_Reserved();
                $reservation->souvenir_id = $souvenir->id;
                $reservation->quantity = $cartItem->quantity;
                $reservation->save();

                // Update the souvenir quantity
                $souvenir->quantity -= $cartItem->quantity;
                $souvenir->save();

                // Delete the cart item
                $cartItem->delete();
            }
        }

        return redirect()->route('reservations.index')->with('success', 'Items reserved successfully!');
    }
}
