<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompanyController;
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

/* Acara 4 */

Route::get('/', function () {
    return view('welcome');
});

// Route::get('user/{name?}', function ($name = null) {
//     return $name;
// }); 

// Route::get('user/{name?}', function ($name = 'John') {
//     return $name;
// });

// Route::get('user/{name}', function ($name) {
//     return $name;
// })->where('name', '[A-Za-z]+');

// Route::get('user/{id}', function ($id) {
//     return $id;
// })->where('id', '[0-9]+');

// Route::get('user/{id}/{name}', function ($id, $name) {
//     return "$id, $name";
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// Route::get('user/{id}', function ($id) {
//     return "$id";
// });

// Route::get('search/{search}', function ($search) {
//     return $search;
// })->where('search', '.*');

// Route::get('user/profile', function () {
//     //
// })->name('profile');

// Route::get('user/profile', 'UserProfileController@show')->name('profile');

// $url = route('profile');

// return redirect()->route('profile');

// Route::get('user/{id}/profile', function ($id) {
//     $url = route('profile', ['id' => 1, 'photos' => 'yes']);
//     return $id;
// })->name('profile');

// Route::get('user/{id}/profile', function ($id) {
//     //
// })->name('profile');

// $url = route('profile', ['id' => 1, 'photos' => 'yes']);
// // /user/1/profile?photos=yes

// Route::get('/', function () {
//     return view('hello');
// });

// 

/* copy */

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

// function getContacts()
// {
//     return [
//         1 => ['id' => 1, 'name' => 'Name 1', 'phone' => '1234567890'],
//         2 => ['id' => 2, 'name' => 'Name 2', 'phone' => '2345678901'],
//         3 => ['id' => 3, 'name' => 'Name 3', 'phone' => '3456789012'],
//     ];
// }


Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');

// Route::controller(ContactController::class)->name('contacts.')->group(function () {
//     Route::get('/contacts', 'index')->name('index');
//     Route::get('/contacts/create', 'create')->name('create');
//     Route::get('/contacts/{id}', 'show')->name('show');
// });

Route::resource('companies',CompanyController::class);

// Route::resource('\activities', ActivityController::class)->excep([
//     'index', 'show'
// ]);