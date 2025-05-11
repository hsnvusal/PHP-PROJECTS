<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $items = Cart::with('product')->where('user_id',Auth::id())->get();

        return view('cart.index',compact('items'));
    }

    public  function add(Product $product)
    {
        $mehsul = Cart::where('user_id', Auth::id())
            ->where('product_id', $product->id)
            ->first();

        if ($mehsul) {
            $mehsul->increment('quantity');
        }
        else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $product->id,
                'quantity' => 1,
            ]);
        }

        return redirect()->back()->with('success','Məhsul səbətə əlavə edildi');
    }

    public function remove(Cart $cart)
    {
        if ($cart->user_id == Auth::id())
        {
            $cart->delete();
        }

        return redirect()->back()->with('success','Mehsul Silindi');

    }
    public  function increase($id)
    {
        $cart = Cart::where('id',$id)->where('user_id',Auth::id())->first();
        if ($cart) {
            $cart->increment('quantity');
        }
        return redirect()->back();
    }

    public function decrease($id)
    {
        $cart = Cart::where('id', $id)->where('user_id', Auth::id())->first();
        if ($cart && $cart->quantity > 1) {
            $cart->decrement('quantity');
        }

        return redirect()->back();
    }
}
