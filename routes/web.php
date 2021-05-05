<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use GuzzleHttp\Client;

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
//     return view('welcome');
// });

Route::get('/', function (GuzzleHttp\Client $client) {
    $response = $client->request('GET', "weather?q=Quito&appid=77ef483f0f45ba596532978bf9e1028f");
    $data = json_decode($response->getBody());
    dd($data);
    //return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');