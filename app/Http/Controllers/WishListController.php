<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image; 
use Surfsidemedia\Shoppingcart\Facades\Cart;
use Carbon\Carbon;

use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function index()
    {
        $items = Cart::instance('wishlist')->content();
        return view('home.wishlist',compact('items'));
    }

    public function add_to_wishlist(Request $request)
    {
        Cart::instance('wishlist')->add($request->id,$request->name,$request->quantity,$request->price)->associate('App\Models\Product');
        return redirect()->back();
    }

     public function remove_item($rowId)
    {
        Cart::instance('wishlist')->remove($rowId);
        return redirect()->back(); 
    }

    public function empty_wishlist()
    {
        Cart::instance('wishlist')->destroy();
        return redirect()->back(); 
    }

    public function move_to_cart($rowId)
    {
        $item = Cart::instance('wishlist')->get($rowId);
        Cart::instance('wishlist')->remove($rowId);
        Cart::instance('cart')->add($item->id,$item->name,$item->qty,$item->price)->associate('App\Models\Product');
        return redirect()->back();
    }
}   
