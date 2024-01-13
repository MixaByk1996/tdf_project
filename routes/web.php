<?php
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
Route::get('/contacts', [\App\Http\Controllers\HomeController::class, 'contacts']);
Route::get('/politics', [\App\Http\Controllers\HomeController::class, 'politics']);
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about']);
Route::get('/error',
    [App\Http\Controllers\ErrorController::class,'index']
);
Route::get('/catalog',
    [App\Http\Controllers\CatalogController::class,'index']
);
Route::get('/product',
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
Route::post('/register',
    [App\Http\Controllers\UserController::class,'register']
);
Route::post('/auth',
    [App\Http\Controllers\UserController::class,'auth']
);
Route::post('/logout',
    [App\Http\Controllers\UserController::class,'logout']
);
