<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

// main response
Route::get('/', function () {
        return view('home');
        //return "HUY DANG NE cac bạn ơi ";
});

Route::get('task1', [
        CategoryController::class,
        'index'
]);

Route::get('task2', [
        CategoryController::class,
        'index2'
]);


Route::get('task2/create', [
        CategoryController::class,
        'create'
]);

Route::post('task2/create', [
        CategoryController::class,
        'store'
]);

Route::get('task2/{id}/edit', [
        CategoryController::class,
        'edit'
]);
Route::put('task2/{id}/edit', [
        CategoryController::class,
        'update'
]);
Route::get('task2/{id}/delete', [
        CategoryController::class,
        'destroy'
]);

/*
Route::get('task1', [
        ProductController::class,
        'index'
]);

Route::get('task2', [
        ProductController::class,
        'index2'
]);

Route::resource('task2', [
        ProductController::class
]);


|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




/*
// main response
Route::get('/', function () {
        return view('home');
        //return "HUY DANG NE cac bạn ơi ";
});


// main response
Route::get('/', function () {
	return view('welcome');
	//return "HUY DANG NE cac bạn ơi ";
});



// string response
Route::get('/task1', function() {
	return "Done task 1";
});

// array response
Route::get('/task2', function () {
	return ["huydang", 'Done task 2', 23];
});

// an object respose

Route::get('/aboutMe', function () {
	return response()->json([
		'name' => 'Dang Quang Huy',
		'email' => 'letfo@gmail.com'
	]);
}); 

//response  another request = redirect
Route::get('/redirect', function () {
	return redirect('/'); //redirect to welcome
});

*/
