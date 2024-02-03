<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/json/{name}', function ($name) {
    return response('{"name": "' . $name . '"}', 200)
        ->header('Content-Type', 'text/json')
        ->header('foo', 'bar');
});

Route::get('/name', function () {
    return response()->json([
        'posts' => [
            [
                'title' => 'Post One'
            ]
        ]
    ]);
});

Route::get('/project', function () {
    return view('project', [
        'listings' => Listing::all()
    ]);
});

Route::get('/project/{id}', function ($id) {
    return view('project', [
        'listings' => Listing::find($id)
    ]);
});
