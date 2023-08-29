<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'status' => 200,
            'products' => $products
        ]);
    }
    public function addToCart($id)
    {

        $product = Product::where('id', $id)->first();
        if ($product) {
            if ($product->status != 1) {
                $product->status = 1;
                $cart = new Cart();
                $cart->product_id = $product->id;
                $cart->quantity = 1;
                $cart->price = $product->price;
                $cart->save();
            }
            $product->update();
            return response()->json([
                'status' => 200,
            ]);
        }
    }
}
