<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::all();
        $sumPrice =0;
        foreach($carts as $cart){
            $sumPrice += $cart->price * $cart->quantity;
        }
        return response()->json([
            'status' => 200,
            'carts' => $carts,
            'sumPrice' => $sumPrice
        ]);
    }

    public function updatequantity($status, $id)
    {
        $cart = Cart::where('id', $id)->first();
        $product = Product::where('id', $cart->product->id)->first();
        if ($status == "min") {
            if ($cart->quantity > 1) {
                $cart->quantity -= 1;
            } else {
                $product->status = 0;
                $product->update();
                $cart->delete();
                return response()->json([
                    'status' => 200,
                ]);
            }
        } else if ($status == "plus") {
            $cart->quantity += 1;
        }
        $cart->update();
        return response()->json([
            'status' => 200,
        ]);
    }
    public function delete($id)
    {
        $cart = Cart::where('id', $id)->first();
        $product = Product::where('id', $cart->product->id)->first();
        if ($cart) {
            $product->status = 0;
            $product->update();
            $cart->delete();
        }
        return response()->json([
            'status' => 200,
        ]);
    }
}
