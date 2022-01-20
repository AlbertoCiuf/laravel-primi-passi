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

Route::get('/', function () {
    $data = [
      'links'=>[
        'home',
        'about',
        'contacts'
      ]
    ];
    return view('home', $data);
})->name('home');

Route::get('about', function () {
  $data = [
    'fullname' => 'Alberto Ciufici',
    'description' => 'Studente della classe 44 di Boolean, Fullstack Web Developer wannabe.'
  ];
  return view('about', $data);
})->name('about');

Route::get('contacts', function () {
  return view('contacts');
})->name('contacts');