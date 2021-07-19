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

Route::get('/greeting/{name?}', function ($name = '') {



        echo 'Hello ' . $name . '!';
});
Route::get('/', function () {
    return 'Hello World';
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', function (\Illuminate\Http\Request $request) {
    $username = $request->username;
    $password = $request->password;
    if ($username == 'admin' && $password == '123') {
        return view('welcome_admin');
    }

    return view('login_error');
});


Route::get('/ProductDiscountCalculator', function () {
    return view('ProductDiscountCalculator');
});
Route::post('/abc', function (\Illuminate\Http\Request $request) {
    $productDescription = $request->productDescription;
    $price = $request->price;
    $percent = $request->percent;
    $discountAmount = $price * $percent * 0.01;
    $discountPrice = $price - $percent;
    return view('ProductDiscountCalculator', compact(['discountPrice', 'discountAmount']));
});
Route::get('/dictionary', function () {
    return view('dictionary');
});

Route::post('/dictionary', function (\Illuminate\Http\Request $request) {

    $arr = ['hello', 'bye'];
    $arr1 = ['xin chao', 'tam biet'];
    $search = $request->search;
    for ($i = 0; $i < count($arr); $i++) {
        if ($search == $arr[$i]) {
            $to = $arr1[$i];
        }
    }
    return view('dictionary', compact(['search', 'to']));
});
