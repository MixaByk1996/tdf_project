<?php

use App\Http\Controllers\ProductsAPIController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
 *
 *  Все страницы (базовые)
 *
*/

Route::get('/',
    [App\Http\Controllers\HomeController::class,'index']
);
Route::get('/home',
    [App\Http\Controllers\HomeController::class,'index']
);

Route::get('/filter', [\App\Http\Controllers\Controller::class, 'filters'])->name('filter-name');
Route::post('/send-questions', [\App\Http\Controllers\Controller::class, 'sendQuestions'])->name('send-questions');
Route::post('/send-notification', [\App\Http\Controllers\Controller::class, 'sendNotification'])->name('send-notification');
Route::get('/contacts', [\App\Http\Controllers\HomeController::class, 'contacts']);
Route::get('/politics', [\App\Http\Controllers\HomeController::class, 'politics']);
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about']);
Route::get('/error',
    [App\Http\Controllers\ErrorController::class,'index']
);
Route::get('/catalog',
    [App\Http\Controllers\CatalogController::class,'index']
)->name('catalog');

Route::get('/catalog/{id}',
    [App\Http\Controllers\CatalogController::class,'withCategories']
)->name('with-system');

Route::get('/product/{id}',
    [App\Http\Controllers\ProductController::class,'index']
);
Route::get('/cart',
    [App\Http\Controllers\CartController::class,'index']
);
Route::get('/favorite',
    [App\Http\Controllers\FavoriteController::class,'index']
);
Route::get('/cabinet',
    [App\Http\Controllers\CabinetController::class,'index']
);
Route::get('/payment',
    [App\Http\Controllers\PaymentController::class,'index']
);

/*
 *
 * Регистрация, авторизация, выход
 *
*/
Route::post('/update-user', [UserController::class, 'updateUser'])->name('update-user');
Route::post('/update-password', [UserController::class, 'updatePassword'])->name('update-password');
Route::get('/add-to-favorite/{product_id}', [\App\Http\Controllers\ProductController::class,'addFavorite'])->name('add-favorite');
Route::get('/add-to-cart/{product_id}', [\App\Http\Controllers\CatalogController::class, 'addToCard'])->name('add-to-card');
Route::get('/remove-from-card/{product_id}', [\App\Http\Controllers\CatalogController::class, 'removeFromCard'])->name('remove-card');



Route::get('/remove-from-modal/{product_id}', [\App\Http\Controllers\CatalogController::class, 'removeFromModal'])->name('remove-modal');

Route::post('/register',
    [App\Http\Controllers\UserController::class,'register']
);
Route::post('/auth',
    [App\Http\Controllers\UserController::class,'auth']
);
Route::post('/logout',
    [App\Http\Controllers\UserController::class,'logout']
);

Route::get('/search',[\App\Http\Controllers\CatalogController::class,'search'])->name('search');

/*
 * Админка
 */

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'admin']);
Route::post('/admin-index', [\App\Http\Controllers\AdminController::class,'index'])->name('admin-index');
Route::get('/admin-system', [\App\Http\Controllers\SystemAPIController::class,'index'])->name('admin-system');
Route::delete('/system-delete/{id}', [\App\Http\Controllers\SystemAPIController::class, 'destroy'])->name('system-delete');
Route::get('/add-system', [\App\Http\Controllers\SystemAPIController::class, 'create'])->name('add-system');
Route::post('/add-system', [\App\Http\Controllers\SystemAPIController::class,'store'])->name('addd-system');


Route::resource('categories', \App\Http\Controllers\CategoriesAPIController::class);
Route::resource('producer', \App\Http\Controllers\ProducerAPIController::class);
Route::resource('angle', \App\Http\Controllers\AngleAPIController::class);
Route::resource('admin-products', ProductsAPIController::class);
Route::post('products-search', [ProductsAPIController::class, 'productsSearch'])->name('products-search');
Route::resource('series', \App\Http\Controllers\SeriesAPIController::class);

Route::get('to-pay', [\App\Http\Controllers\Controller::class, 'toPlay'])->name('to-pay');
Route::post('upload-file', [\App\Http\Controllers\Controller::class, 'uploadProducts'])->name('upload-file-excel');
