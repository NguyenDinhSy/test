<?php

use App\Http\Controllers\Controller12;
use GuzzleHttp\Middleware;
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
    return view('welcome');
});
//Route::get('/get', '');
Route::get('/get', 'Controller12@index');

Route::match(['get', 'post'], '/po', function () {
    return "ddd";
});

Route::get('/ge', [
    'middleware' => 'First',
   'uses' => 'Controller12@showPath'
]);

Route::resource('products', 'ProductController');
      