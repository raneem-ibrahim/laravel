<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RaneemController;
// use App\Http\Controllers\postController;
use App\Http\Controllers\StudentController;
// use App\Http\Controllers\TestController;
 use App\Http\Controllers\ProfileController;
 use App\Http\Controllers\NewuserController;
 use App\Http\Controllers\coacheController;

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


// ...........................................task Route....................................
// task1
// Route::get('/', function () {
//     return view('layouts.layout');
// });
// Route::get('/', function () {
//     return view('layouts.content');
// });
// // // task1
// // Route::get('/', function () {
// //     return "hello, world!";
// // });

// // task2
// Route::get('/user/{name}', action: function ($name = Jone) {
//     return "Hello" . $name;
// });

// // task3
// Route::get('/welcome/{age}', function ($age) {
//     return 'You are' . $age . 'years old.';
// });


// //  task4
// Route::resource('raneem', RaneemController::class);


// // task5

// Route::get('/dashboard', function () {
//     return 'task5';
// })->name('dashboard');

// task6



// task7
// Route::get('/task7/{id}', function ($id) {
//     return 'user ID: ' . $id;
// })->where('id', '[0-9]+');

// // task8
// Route::fallback(function () {
//     return 'Page Not Found';
// });
// // task9
// Route::resource('posts', postController::class);
// // task10
// Route::get('/{category}/{id}', function ($category, $id) {
//     return "Category: $category, ID: $id";
// });
// // task11
// Route::get('/blog/{num?}', action: function ($num = 1) {
//     return "Viewing page $num ";
// });
// // task12
// Route::redirect('/task7', '/welcome');
// // task13
// Route::get('/task13', function () {
//     return view('welcome');
// });


// Route::get('/test', [TestController::class,'test']); 
// Route::get('/hello',[TestController::class , 'secondAction']);
// Route::get('user/{id?}' ,function($id=null){
//     return "Hello User $id";
// });

// Route::any('/dashboard', function () {
//     return 'Dashboard Page';
// })->name('dashboard');




//........................................ task master page..........................................


// Route::get('/', function () {
//     return view('home');
// });

// .........................................crud...............................................##


Route::resource('students' , StudentController::class);


// .........................................................project...................................

// Route::get('/', function () {
//          return view('index');
//     });

// ........................................ORM Relation .....................................................
  Route::resource('/profile' ,ProfileController::class);
  
  // .........................................task1-1 ORM..........................................

  Route::resource('/task1' , NewuserController::class);
  // .........................................task1-m ORM..........................................

  Route::resource('coaches', coacheController::class);

  // ........................................middleware..........................................
  Route::get('/login' ,function(){
    return view('middle.login');
  });

?>