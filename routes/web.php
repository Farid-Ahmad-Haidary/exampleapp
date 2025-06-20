<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\testController as ControllersTestController;

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
    return view('index');
});


Route::get('/test' , function(Request $request) {
        $name = $request->query('name', 'Guest');
        $lastName = $request->query('lastName', 'User');
        $message = "Hello, $name $lastName!";
    return $message;
});


Route::get('/home' , [TestController::class, 'index']);
Route::get('/about', [TestController::class, 'about']);
Route::get('/contact' , [TestController::class, 'contact']);
Route::get('/project' , [TestController::class, 'project']);

Route::get('/allcategories', [CategoryController::class, 'index']);