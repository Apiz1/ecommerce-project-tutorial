<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishListController;

//User
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/account-orders', [HomeController::class, 'orders'])->name('user.orders');
Route::get('/account-details/{order_id}', [HomeController::class, 'order_details'])->name('user.details');
Route::put('/cancel-order', [HomeController::class, 'order_cancel'])->name('user.order.cancel');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('home.contact');
Route::post('/contact/store', [HomeController::class, 'contact_store'])->name('home.contact.store');
Route::get('/home/search', [HomeController::class, 'search'])->name('home.search');


Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/product_details/{product_slug}', [ShopController::class, 'product_details'])->name('shops.product.details');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'add_to_cart'])->name('cart.add');
Route::put('/cart/increase/{rowId}', [CartController::class, 'increase_cart_quantity'])->name('cart.qty.increase');
Route::put('/cart/decrease/{rowId}', [CartController::class, 'decrease_cart_quantity'])->name('cart.qty.decrease');
Route::delete('/cart/delete/{rowId}', [CartController::class, 'remove_item'])->name('cart.item.delete');
Route::delete('/cart/clear', [CartController::class, 'empty_cart'])->name('cart.empty');
Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::post('/place-an-order', [CartController::class, 'place_an_order'])->name('cart.place.an.order');
Route::get('/order-confirmation', [CartController::class, 'order_confirmation'])->name('cart.order.confirmation');

Route::post('/cart/apply-coupon',[CartController::class, 'apply_coupon_code'])->name('cart.coupon.apply');
Route::delete('/cart/remove_coupon',[CartController::class, 'remove_coupon_code'])->name('cart.coupon.remove');

Route::post('/wishlist/add', [WishListController::class, 'add_to_wishlist'])->name('wishlist.add');
Route::get('/wishlist', [WishListController::class, 'index'])->name('wishlist.index');
Route::delete('/wishlist/item/remove/{rowId}', [WishListController::class, 'remove_item'])->name('wishlist.item.remove');
Route::delete('/wishlist/clear', [WishListController::class, 'empty_wishlist'])->name('wishlist.item.clear');
Route::post('/wishlist/move-to-cart/{rowId}', [WishListController::class, 'move_to_cart'])->name('wishlist.move.to.cart');


//Admin
Route::get('/home', [AdminController::class, 'index']);
Route::get('/brands', [AdminController::class, 'brands'])->name('admin.brands');
Route::get('/brand_add', [AdminController::class, 'add_brand'])->name('admin.brands.add');
Route::post('brand_store', [AdminController::class, 'brand_store']);
Route::get('/brand_edit/{id}', [AdminController::class, 'brand_edit'])->name('admin.brand.edit');
Route::post('/brand_update',[AdminController::class, 'brand_update'])->name('admin.brand.update');
Route::delete('/brand_delete/{id}', [AdminController::class, 'brand_delete'])->name('admin.brand.delete');
Route::get('/categories', [AdminController::class, 'categories'])->name('admin.categories');
Route::get('/category_add', [AdminController::class, 'category_add'])->name('admin.category.add');
Route::post('category_store', [AdminController::class, 'category_store']);
Route::get('/category_edit/{id}', [AdminController::class, 'category_edit'])->name('admin.category.edit');
Route::post('/category_update',[AdminController::class, 'category_update'])->name('admin.category.update');
Route::delete('/category_delete/{id}', [AdminController::class, 'category_delete'])->name('admin.category.delete');
Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
Route::get('/product_add', [AdminController::class, 'product_add'])->name('admin.product.add');
Route::post('/product_store', [AdminController::class, 'product_store']);
Route::get('/product_edit/{id}', [AdminController::class, 'product_edit'])->name('admin.product.edit');
Route::post('/product_update',[AdminController::class, 'product_update'])->name('admin.product.update');
Route::delete('/product_delete/{id}', [AdminController::class, 'product_delete'])->name('admin.product.delete');
Route::get('/coupons',[AdminController::class, 'coupons'])->name('admin.coupons');
Route::get('/coupon_add',[AdminController::class, 'coupon_add'])->name('admin.coupons.add');
Route::post('/coupon_store',[AdminController::class, 'coupon_store'])->name('admin.coupon.store');
Route::get('/coupon_edit/{id}', [AdminController::class, 'coupon_edit'])->name('admin.coupon.edit');
Route::post('/coupon_update',[AdminController::class, 'coupon_update'])->name('admin.coupon.update');
Route::delete('/coupon_delete/{id}', [AdminController::class, 'coupon_delete'])->name('admin.coupon.delete');
Route::get('/orders', [AdminController::class, 'orders'])->name('admin.order');
Route::get('/order/{order_id}', [AdminController::class, 'order_details'])->name('admin.order.details');
Route::put('/update_order_status', [AdminController::class, 'update_order_status'])->name('admin.order.status.update');
Route::get('/slides', [AdminController::class, 'slides'])->name('admin.slides');
Route::get('/slide_add', [AdminController::class, 'slide_add'])->name('admin.slides.add');
Route::post('/slide_store', [AdminController::class, 'slide_store'])->name('admin.slides.store');
Route::get('/slide_edit/{id}', [AdminController::class, 'slide_edit'])->name('admin.slides.edit');
Route::post('/slide_update', [AdminController::class, 'slide_update'])->name('admin.slides.update');
Route::delete('/slide_delete/{id}', [AdminController::class, 'slide_delete'])->name('admin.slides.delete');
Route::get('/contact', [AdminController::class, 'contacts'])->name('admin.contacts');
Route::delete('/contact_delete/{id}', [AdminController::class, 'contact_delete'])->name('admin.contact.delete');
Route::get('/search', [AdminController::class, 'search_admin'])->name('admin.search');