<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Reserved_Souvenir;
use App\Models\Souvenir_Reserved;
use App\Models\SouvenirsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    public function displaySouvenir()
    {
        // Fetch cart items
        $user_id = session('User')['user_id'];
        $addedItem = DB::table('cart_items')->where('userid', $user_id)->where('is_archived', 0)->count();
        $cartItems = CartItem::with('souvenir')->where('userid', $user_id)->get();
        $souvenirs = SouvenirsModel::with('category')->where('souvenir_status','posted')->get();
        return view('user.pages.landingpage1.souvenirs.souvenirs1', compact('souvenirs', 'cartItems', 'addedItem'));
    }
    public function cartItems()
    {
        // Fetch cart items
        $user_id = session('User')['user_id'];
        $visit = DB::table('visits')->where('userid', $user_id)->where('visits_status', "PENDING")
        ->get();
        $addedItem = DB::table('cart_items')->where('is_archived', 0)->count();
        $cartItems = CartItem::with('souvenir')->where('userid', $user_id)->where('is_archived', 0)->get();
        $souvenirs = SouvenirsModel::with('category')->where('souvenir_status','posted')->get();
        return view('user.pages.landingpage1.souvenirs.mycart', compact('souvenirs', 'cartItems', 'addedItem', 'visit'));
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
        'souvenir_id' => 'required|exists:souvenir,souvenir_id',
        'quantity' => 'required|integer|min:1',
        'price' => 'required|numeric',
        'total_price' => 'required|numeric',
    ]);

    // Retrieve the souvenir details
    $souvenir = SouvenirsModel::find($request->souvenir_id);

    if (!$souvenir) {
        return redirect()->back()->with('error', 'Souvenir not found!');
    }

    // Check if the item already exists in the cart
    $cartItem = CartItem::where('souvenir_id', $request->souvenir_id)
        ->where('userid', $user_id)
        ->first();

    if ($cartItem) {
        // If the item is already in the cart and is archived, set is_archived to false
        if ($cartItem->is_archived) {
            $cartItem->is_archived = false;
        }

        // Update the quantity and total price of the existing cart item
        $cartItem->quantity += $request->quantity;
        $cartItem->total_price = $request->price * $cartItem->quantity;
        $cartItem->save();
    } else {
        // Create a new cart item
        $cartItem = new CartItem();
        $cartItem->userid = $user_id;
        $cartItem->souvenir_id = $request->souvenir_id;
        $cartItem->quantity = $request->quantity;
        $cartItem->price = $request->price;
        $cartItem->total_price = $request->total_price;
        $cartItem->is_archived = false;
        $cartItem->save();
    }

    if ($cartItem) {
        return redirect()->back()->with('success', 'Item added to cart successfully!');
    }

    return redirect()->back()->with('error', 'Failed to add item to cart!');
}


    public function removeFromCart(Request $request)
{
    // Validate the request data
    $request->validate([
        'cart_item_id' => 'required|exists:cart_items,cart_item_id',
    ]);

    $cartItem = CartItem::findOrFail($request->cart_item_id);
    $cartItem->is_archived = true;
    $cartItem->save();

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
                $reservation = new Reserved_Souvenir();
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
