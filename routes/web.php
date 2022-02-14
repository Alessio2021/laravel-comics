<?php

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

Route::get('/', function () {

    $data = [
        'cards' => config('comics'), 
        'nomePagina' => 'DC - Comics'
    ];

    return view('guest.comics', $data);
})->name('comics');

Route::get('products/{id}',function ($id) {

    $collection = collect(config('comics'));
    $product = $collection->where('id', $id);
    $singleProduct = '';

    if ($product->count() === 0) {
        abort(404);
    }

    foreach ($product as $value) {
        $singleProduct = $value;
    }
    // dd($singleProduct);

    return view('guest.product', [
        'product' => $singleProduct,
        'nomePagina' => $singleProduct['title']
    ]);

})->name('product');


Route::get('/characters', function () {

    $data = [
        'nomePagina' => 'DC - Characters'
    ];

 
    return view('guest.characters', $data);
})->name('characters');

Route::get('/movies', function () {

    $data = [
        'nomePagina' => 'DC - Movies'
    ];

    return view('guest.movies', $data);
})->name('movies');

Route::get('/tv', function () {

    $data = [
        'nomePagina' => 'DC - Tv'
    ];

    return view('guest.tv', $data);
})->name('tv');

Route::get('/games', function () {

    $data = [
        'nomePagina' => 'DC - Games'
    ];
 
    return view('guest.games', $data);
})->name('games');

Route::get('/collectibles', function () {

    $data = [
        'nomePagina' => 'DC - Collectibles'
    ];
 
    return view('guest.collectibles', $data);
})->name('collectibles');

Route::get('/videos', function () {

    $data = [
        'nomePagina' => 'DC - Videos'
    ];
 
    return view('guest.videos', $data);
})->name('videos');

Route::get('/fans', function () {

    $data = [
        'nomePagina' => 'DC - Fans'
    ];
 
    return view('guest.fans', $data);
})->name('fans');

Route::get('/news', function () {

    $data = [
        'nomePagina' => 'DC - News'
    ];
 
    return view('guest.news', $data);
})->name('news');

Route::get('/shop', function () {

    $data = [
        'nomePagina' => 'DC - Shop'
    ];
 
    return view('guest.shop', $data);
})->name('shop');

