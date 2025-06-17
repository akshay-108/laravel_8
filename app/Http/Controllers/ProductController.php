<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function detail($id)
    {
        $product = Product::find($id);
        return view('detail', compact('product'));
    }

    public function search(Request $request)
    {
        $products = Product::where('name', 'like', '%'.$request->input('query').'%')->get();
        return view('search', compact('products'));
    }

    public function addToCart(Request $request)
    {
        if($request->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    public function cartList()
    {
        $userId = Session::get('user')['id'];
        $cartProduct = DB::table('cart')
        ->join('products', 'cart.product_id', 'products.id')
        ->select('products.*', 'cart.id as cart_id')
        ->where('cart.user_id', $userId)
        ->get();

        return view('cartlist', compact('cartProduct'));
    }

    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    public function orderNow()
    {
        $userId = Session::get('user')['id'];
        $total = DB::table('cart')
        ->join('products', 'cart.product_id', 'products.id')
        ->select('products.*', 'cart.id as cart_id')
        ->where('cart.user_id', $userId)
        ->sum('products.price');

        return view('ordernow', compact('total'));
    }

    public function orderPlace(Request $request)
    {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->address = $request->address;
            $order->status = "pending";
            $order->payment_method = $request->payment;
            $order->payment_status = "pending";
            $order->save();
        }
        Cart::where('user_id', $userId)->delete();
        return redirect('/');
    }

    public function myOrder()
    {
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products', 'orders.product_id', 'products.id')
        ->where('orders.user_id', $userId)
        ->get();

        return view('myorder', compact('orders'));
    }
}
