<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\UomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SectionController;
use App\Http\Controllers\SiteAlbumController;
use App\Http\Controllers\SiteMenuController;

use App\Http\Controllers\SiteRouteController;
use App\Http\Controllers\SiteSectionController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\WebSectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteCustomerController;

Route::get('admin',[HomeController::class,'index']);
Route::get('home',[HomeController::class,'home'])->name('home')->middleware('checklogin');
// Route::get('home',[HouseController::class,'home']);

Route::get('/',[HomeController::class,'site'])->name('/');


Route::get('help',[HomeController::class,'help']);
Route::get('contact',[HomeController::class,'contact']);
Route::get('about',[HomeController::class,'about']);
Route::get('blog',[HomeController::class,'blog']);
Route::get('blog_details',[HomeController::class,'blog_details']);
Route::get('shop',[HomeController::class,'shop']);
Route::get('account',[HomeController::class,'account']);
Route::resource('sitecustomers',SiteCustomerController::class);
Route::get('wishlist',[HomeController::class,'wishlist']);

Route::resource('users', UserController::class);

Route::resource('products', ProductController::class);
Route::get("getproduct",[ProductController::class,'get_product_json']);
Route::resource("productcategories",ProductCategoryController::class);

Route::resource('customers', CustomerController::class);
Route::get("getcustomer",[CustomerController::class,'get_customer_json']);

Route::resource('uoms', UomController::class);
Route::resource('orders', OrderController::class);
Route::resource('sections', SectionController::class);

Route::resource("suppliers",SupplierController::class);
Route::resource("purchases",PurchaseController::class);
Route::resource("warehouses",WarehouseController::class);


Route::resource("sitesections",SiteSectionController::class);
Route::resource("sitealbums",SiteAlbumController::class);
Route::resource("sitemenus",SiteMenuController::class);

Route::resource("websections",WebSectionController::class);

Route::resource("siteroutes",SiteRouteController::class);


    // Route::get('/', [EcommerceController::class ,'home'])->name('ecommerce.home');
    // Route::get('/products', 'EcommerceController@products')->name('ecommerce.products');
    // Route::get('/products/{id}', 'EcommerceController@productDetails')->name('ecommerce.product.details');
    Route::get('login', [PageController::class ,'home']);
    Route::get('register', [PageController::class ,'register']);
    Route::get('cart', [PageController::class ,'cart']);
    Route::get('checkout', [PageController::class ,'checkout']);



    Route::post("auth",[AuthController::class,'auth'])->name('auth'); 
    Route::get("logout",[AuthController::class,'logout'])->name('logout');
    Route::get("c_logout",[AuthController::class,'c_logout'])->name('c_logout');
   
    
;


