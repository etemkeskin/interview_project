<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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

Route::get('/', 'AdminController@index')->name('admin.index');

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('users', 'UsersController@index')->name('users.index');
    Route::get('users/create', 'UsersController@create')->name('users.create');
    Route::post('users', 'UsersController@store')->name('users.store');
    Route::get('users/{user}/edit', 'UsersController@edit')->name('users.edit');
    Route::put('users/{user}', 'UsersController@update')->name('users.update');
    Route::delete('users/{user}', 'UsersController@destroy')->name('users.destroy');
    Route::resource('courses', CoursesController::class);
    Route::resource('lessons', LessonsController::class);
    Route::resource('homeworks', HomeworksController::class);
});


Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');




// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'FrontController@index')->name('index');

// Route::group(['prefix'=>'admin','middleware'=>'Admin'],function(){
//     Route::get('/','AdminGetController@get_index');
//     Route::get('/admin','AdminGetController@get_index');
//     Route::get('/admin/index','AdminGetController@get_index');
// });
