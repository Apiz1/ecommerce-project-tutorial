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
use Carbon\Carbon;

use Illuminate\Http\Request;

class ShopController extends Controller
{
  public function index(Request $request)
{
    $size = $request->query('size', 12);
    $size = in_array($size, [12, 24, 48, 102]) ? $size : 12;

    $order = $request->query('order', -1);
    $order = in_array($order, [-1, 1, 2, 3, 4]) ? (int)$order : -1;

    // === FILTERS ===
    $selectedBrands     = $request->query('brands', []);
    $selectedCategories = $request->query('categories', []);

    // Price range from slider
    $minPrice = $request->query('min_price');
    $maxPrice = $request->query('max_price');

    if (!is_array($selectedBrands))     $selectedBrands = $selectedBrands ? [$selectedBrands] : [];
    if (!is_array($selectedCategories)) $selectedCategories = $selectedCategories ? [$selectedCategories] : [];

    // === SORTING ===
    $o_column = 'id'; 
    $o_order  = 'DESC';
    switch($order) {
        case 1: $o_column = 'created_at'; $o_order = 'DESC'; break;
        case 2: $o_column = 'created_at'; $o_order = 'ASC'; break;
        case 3: $o_column = 'regular_price'; $o_order = 'ASC'; break;
        case 4: $o_column = 'regular_price'; $o_order = 'DESC'; break;
    }

    // === DATA FOR SIDEBAR ===
    $brands     = Brand::orderBy('name', 'ASC')->get();
    $categories = Category::withCount('products')->orderBy('name', 'ASC')->get();

    // === MAIN QUERY ===
    $products = Product::query();

    // Brand filter
    if (!empty($selectedBrands)) {
        $products->whereIn('brand_id', $selectedBrands);
    }

    // Category filter
    if (!empty($selectedCategories)) {
        $products->whereIn('category_id', $selectedCategories);
    }

    // PRICE FILTER (THIS IS THE NEW PART!)
    if ($minPrice !== null && is_numeric($minPrice)) {
        $products->where('regular_price', '>=', $minPrice);
    }
    if ($maxPrice !== null && is_numeric($maxPrice)) {
        $products->where('regular_price', '<=', $maxPrice);
    }

    // Apply sorting & pagination
    $products = $products->orderBy($o_column, $o_order)->paginate($size);

    // Keep ALL filters in pagination links
    $products->appends($request->query());

    // FIX THE ERROR — ADD THESE TWO LINES BEFORE return view()
    $min_price = $minPrice ?? 10;     // fallback value
    $max_price = $maxPrice ?? 1000;   // fallback value

    return view('home.shop', compact(
    'products', 'size', 'order', 'brands', 'categories',
    'selectedBrands', 'selectedCategories',
    'minPrice', 'maxPrice',
    'min_price', 'max_price'   // ← THESE TWO FIX THE ERROR
    ));
}
    public function product_details($product_slug)
    {
        $product = Product::where('slug',$product_slug)->first();
        return view('home.product_details',compact('product'));
    }
}
