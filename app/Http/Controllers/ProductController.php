<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Darryldecode\Cart\CartCondition;
use Illuminate\Support\Facades\Session;
use willvincent\Rateable\Rating;

class ProductController extends Controller
{
    public function showProducts()
    {
        $products = Product::all();
        return view('Home.allProduct', compact('products'));
    }

    public function factor()
    {
        return view('Home.factor');
    }

    public function basket()
    {
        return view('Home.basket');
    }

    public function saveRating(Request $request)
    {
        request()->validate(['rate' => 'required']);
        $product = Product::find($request->id);
        $rating = new Rating;
        $rating->rating = $request->rate;
        $rating->user_id = auth()->user()->id;
        $product->ratings()->save($rating);

        return redirect()->back();
    }

    public function ProductsFilter(Request $request)
    {
        $products = Product::all();
        if (!empty($request->color))
            $products = $products->where('color', $request->color);

        if (!empty($request->price)) {
            switch ($request->price) {
                case 1:
                    $products = $products->where('price', '<', 200000);
                    break;
//                    return $products;
                case 2:
                    $products = $products->where('price', '>=', 200000)
                        ->where('price', '<', 500000);
                    break;
                case 3:
                    $products = $products->where('price', '>', 500000);
                    break;
            }
        }
        return view('Home.allProduct', compact('products'));
    }

    public function addProduct(Request $request)
    {

        if (session::has('cart')) {
            $cart = session::get('cart');
            if (array_key_exists($request->id, $cart)) {
                $cart[$request->id]++;
            } else {
                $cart[$request->id] = 1;
            }

        } else {
            $cart = array();
            $cart[$request->id] = 1;
        }

        session::put('cart', $cart);
        return redirect()->back();
    }
}
