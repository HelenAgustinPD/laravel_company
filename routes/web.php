<?php

use Illuminate\Support\Facades\Route;
use App\Models\Contact;

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
    return view('welcome',[
        "img" => "pvcorp.png"
    ]);
});

Route::get('/contact', function () {
    return view('contact.contact');
});

Route::get('/login', function () {
    return view('v_login');
});

Route::get('/register', function () {
    return view('v_register');
});

Route::post('/contact', function () {
    /*Contact::create([
        'nama' -> request('nama'),
        'departemen' -> request('departemen'),
        'keluhan' -> request('keluhan')
    ]);*/
    
    $contact = new Contact();
    $contact->nama = request('nama');
    $contact->departemen = request('departemen');
    $contact->keluhan = request('keluhan');
    $contact->save();
    return redirect ('/contact')->with('sukses','Data Berhasil Diinput');
});

Route::get('/pegawai', [App\Http\Controllers\PegawaiController::class, 'index'])->name('pegawai');

Route::post('/pegawai/create', [App\Http\Controllers\PegawaiController::class, 'create']);

Route::get('/pegawai/{id}/edit', [App\Http\Controllers\PegawaiController::class, 'edit']);

Route::post('/pegawai/{id}/update', [App\Http\Controllers\PegawaiController::class, 'update']);

Route::get('/pegawai/{id}/delete', [App\Http\Controllers\PegawaiController::class, 'delete']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function (){
    \Auth::logout();
    return redirect('/home');
});