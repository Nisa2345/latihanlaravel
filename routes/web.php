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
    return view('welcome');
});

Route::get('about', function() {
    return "<h1>Hello</h1>"
    . "<br> Selamat datang di web app saya"
    . "<br> Laravel emang keren";
});

Route::get('profile', function(){
    $nama = "Ucup";
    return "Nama Saya <b>$nama</b>";
});

Route::get('post', function() {
    return "Halaman Post 1";
});

//Route Parameter
Route::get('post/{id}', function($a){
    return "Halaman Post ke - <b>$a</ba>";

});

//buatlah route "bio" dengan parameter
//nama, umur dan alamat

Route::get('bio/{nama}/{umur}/{alamat}', function ($a, $b, $c){
    return "<h1>Biodata Saya</h1>"
    . "Nama : <b>$a</b><br>"
    . "Umur : <b>$b</b><br>"
    . "Alamat : <b>$c</b><br>";
});

//Route Optional Parameter
Route::get('hal/{halaman?}', function ($a = 1){
    return "Halaman Post ke - <b>$a</b>";
});

//buatlah route "pesan" dengan optional parameter
//makanan? minuman? cemilan?

//parameter tidak di isi -> anda tidak pesan, silahkan pulang
//makanan -> Anda Pesan <br> makan : ....
//makanan dan minuman -> makan : ... minuman ...
//

Route::get('pesan/{makanan?}/{minuman?}/{cemilan?}',function ($a = null, $b = null, $c = null){
    if($a = null && $b = null && $c = null){
        $pesan = "Anda Tidak Pesan,Silahkan Pulang";
    }
if ($a != null) {
    $pesan = "Anda Memesan"
    . "<br>Makan : <b>$a</b>";
}
if ($a != null && $b != null){
    $pesan = "Anda Memesan"
    ."<br>Makan : <b>$a</b>"
    ."<br>Minum : <b>$b</b>";
}
if ($a != null && $b != null && $c != null){
    $pesan = "Anda Memesan"
    ."<br>Makan : <b>$a</b>"
    ."<br>Minum : <b>$b</b>"
    ."<br>Cemilan : <b>$c</b>";
}
return $pesan;
});