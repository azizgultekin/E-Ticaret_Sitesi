<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home.index');
// });
/*
Route::get('/', function () {
    return view(view:"home.index");
});*/

// Route::get('/index.html', function () {
//     return view("home.index");
// });

// Route::get('/product-detail.html', function () {
//     return view("home.product-detail");
// });

// Route::get('/product-listing.html', function () {
//     return view("home.product-listing");
// });

// Route::get('/cart.html', function () {
//     return view("home.cart");
// });

// Route::get('/checkout.html', function () {
//     return view("home.checkout");
// });

// Route::get('/contact-us.html', function () {
//     return view("home.contact-us");
// });

// Route::get('/compare.html', function () {
//     return view("home.compare");
// });

// Route::get('/whishlist.html', function () {
//     return view("home.whishlist");
// });

// Route::get('/404.html', function () {
//     return view("home.404");
// });

// Route::get('/about.html', function () {
//     return view("home.about");
// });
Route::get('/', [HomeController::class, 'index'])->name('home_index');
Route::get('/index', [HomeController::class, 'index'])->name('home_index');
Route::get('/product-detail', [HomeController::class, 'productdetail'])->name('home_product-detail');
Route::get('/product-listing/{id}/{slug}', [HomeController::class, 'productlisting'])->name('productlisting');
Route::get('/cart', [HomeController::class, 'cart'])->name('home_cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('home_checkout');
Route::get('/contact-us', [HomeController::class, 'contactus'])->name('home_contact-us');
Route::get('/compare', [HomeController::class, 'compare'])->name('home_compare');
Route::get('/whishlist', [HomeController::class, 'whishlist'])->name('home_whishlist');
Route::get('/404', [HomeController::class, 'error404'])->name('home_404');
Route::get('/about', [HomeController::class, 'about'])->name('home_about');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/product/{id}/{slug}', [HomeController::class, 'product'])->name('product');
Route::get('/imagelisting/{id}', [HomeController::class, 'imagelisting'])->name('imagelisting');
Route::post('/getproduct', [HomeController::class, 'getproduct'])->name('getproduct');
Route::get('/productlist/{search}', [HomeController::class, 'productlist'])->name('productlist');


//admin

Route::middleware('auth')->prefix('admin')->group(function ()
{
    Route::middleware('admin')->group(function ()
    {
        
        Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

        Route::get('category',[App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
        Route::get('category/add',[App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
        Route::post('category/create',[App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
        Route::get('category/edit/{id}',[App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
        Route::post('category/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
        Route::get('category/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
        Route::get('category/show',[App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');
        #Product
        Route::prefix('product')->group(function () {
            // Route assigned name "admin.users"...
            Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin_products');
            Route::get('create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin_product_add');
            Route::post('store', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin_product_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin_product_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin_product_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin_product_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ProductController::class, 'show'])->name('admin_product_show');
        });

        #Message
        Route::prefix('message')->group(function () {
            // Route assigned name "admin.users"...
            Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');
        });
        ///


        #Product ImageGallery
        Route::prefix('image')->group(function () {
        Route::get('create/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
        });


        #Setting
        Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update',[App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');

        #Review
        Route::prefix('review')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
        Route::get('show/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');
        });

        #Order
        Route::prefix('order')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\OrderController::class, 'index'])->name('admin_orders');
        Route::get('/list/{status}', [\App\Http\Controllers\Admin\OrderController::class, 'list'])->name('admin_order_list');
        Route::post('/create', [\App\Http\Controllers\Admin\OrderController::class, 'create'])->name('admin_order_add');
        Route::post('/store', [\App\Http\Controllers\Admin\OrderController::class, 'store'])->name('admin_order_store');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'edit'])->name('admin_order_edit');
        Route::post('/update/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'update'])->name('admin_order_update');
        Route::post('/itemupdate/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'itemupdate'])->name('admin_order_item_update');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'delete'])->name('admin_order_delete');
        Route::get('/show/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'show'])->name('admin_order_show');
        });

        #User
        Route::prefix('user')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::post('/create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('/store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('/edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('/update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('/delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('/show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('/userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('/userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles_store'])->name('admin_user_role_add');
            Route::get('/userroledelete/{userid}{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles_delete'])->name('admin_user_role_delete');
            
            });

    });#admin

///
///
});//#auth

#User
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function ()
{
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews', [UserController::class, 'myreviews'])->name('myreviews');
    Route::get('destroymyreview/{id}', [UserController::class, 'destroymyreview'])->name('user_review_delete');
});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function ()
{
    Route::get('/profile', [UserController::class, 'index'])->name('userprofile');

    #Shopcart
    Route::prefix('shopcart')->group(function () {
        Route::get('/', [\App\Http\Controllers\ShopcartController::class, 'index'])->name('user_shopcart');
        Route::post('/store/{id}', [\App\Http\Controllers\ShopcartController::class, 'store'])->name('user_shopcart_add');
        Route::post('/update/{id}', [\App\Http\Controllers\ShopcartController::class, 'update'])->name('user_shopcart_update');
        Route::get('/delete/{id}', [\App\Http\Controllers\ShopcartController::class, 'destroy'])->name('user_shopcart_delete');
    });

    #Order
    Route::prefix('order')->group(function () {
        Route::get('/', [\App\Http\Controllers\OrderController::class, 'index'])->name('user_orders');
        Route::post('/create', [\App\Http\Controllers\OrderController::class, 'create'])->name('user_order_add');
        Route::post('/store', [\App\Http\Controllers\OrderController::class, 'store'])->name('user_order_store');
        Route::get('/edit/{id}', [\App\Http\Controllers\OrderController::class, 'edit'])->name('user_order_edit');
        Route::post('/update/{id}', [\App\Http\Controllers\OrderController::class, 'update'])->name('user_order_update');
        Route::get('/delete/{id}', [\App\Http\Controllers\OrderController::class, 'delete'])->name('user_order_delete');
        Route::get('/show/{id}', [\App\Http\Controllers\OrderController::class, 'show'])->name('user_order_show');
    });
});

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
//

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
