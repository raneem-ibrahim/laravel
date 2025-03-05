<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RaneemController;
use App\Http\Controllers\postController;

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
// task1
Route::get('/', function () {
    return view('layouts.layout');
});
Route::get('/', function () {
    return view('layouts.content');
});
// // task1
// Route::get('/', function () {
//     return "hello, world!";
// });

// task2
Route::get('/user/{name}', action: function ($name = Jone) {
    return "Hello" . $name;
});

// task3
Route::get('/welcome/{age}', function ($age) {
    return 'You are' . $age . 'years old.';
});
//  task4
Route::resource('raneem', RaneemController::class);


// task5

Route::get('/dashboard', function () {
    return 'task5';
})->name('dashboard');

// task6



// task7
Route::get('/task7/{id}', function ($id) {
    return 'user ID: ' . $id;
})->where('id', '[0-9]+');

// task8
Route::fallback(function () {
    return 'Page Not Found';
});
// task9
Route::resource('posts', postController::class);
// task10
Route::get('/{category}/{id}', function ($category, $id) {
    return "Category: $category, ID: $id";
});
// task11
Route::get('/blog/{num?}', action: function ($num = 1) {
    return "Viewing page $num ";
});
// task12
Route::redirect('/task7', '/welcome');
// task13
Route::get('/task13', function () {
    return view('welcome');
});


// Route::get('/test', [TestController::class,'firstAction']); 
// Route::get('/hello',[TestController::class , 'secondAction']);
// Route::get('user/{id?}' ,function($id=null){
//     return "Hello User $id";
// });

// Route::any('/dashboard', function () {
//     return 'Dashboard Page';
// })->name('dashboard');




// task master page
// Route::get('/', function () {
//     return view('home');
// });

?>