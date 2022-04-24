<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuncellemeController;
use App\Models\urunler;
use App\Models\sepetim;
use Illuminate\Support\Facades\DB;
use App\Models\user;

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
    return view('giris');
});

Route::get('/musteriKayit', [UserController::class, 'createUser']);

Route::post('/musteriKayit', [UserController::class, 'saveUser'])->name('createuser');

Route::get('/giris', [UserController::class, 'musteriGiris']);

Route::post('product', [UserController::class, 'login']);

Route::post('adminpost', [UserController::class, 'adminlogin'])->name("adminpost");

Route::get('/anasayfa', [UserController::class, 'anasayfa']);

Route::get('/sifreUnuttum', [UserController::class, 'yenile']);

Route::get('/musteri/{id}', [UserController::class, 'musteri']);
Route::get('/musteri/musteriSil/{id}', [GuncellemeController::class, 'musteriSil']);

Route::get('/home', [UserController::class, 'home']);

Route::get('/product', [UserController::class, 'product']);

Route::get('/adminGiris', [UserController::class, 'adminGiris']);

Route::get('/adminpanel', [UserController::class, 'adminpanel']);

Route::get('/urun', [UserController::class, 'urun']);

// Route::get('/cart/{id}', [UserController::class, 'cart']);

Route::get('/checkout', [UserController::class, 'checkout']);

Route::get('/urundegis', [UserController::class, 'urundegis']);

// ürün işlemleri
Route::get('/urunEkle', [GuncellemeController::class, 'urunEkle']);

Route::post('/urunEkle', [GuncellemeController::class, 'urunSave'])->name('urunEkleSave');

Route::get('/urunSil', [GuncellemeController::class, 'urunSilSayfa']);

Route::get('/urunSil/{id}', [GuncellemeController::class, 'urunSil']);

Route::get('/urunGuncelle', [GuncellemeController::class, 'urunGuncelle']);

Route::get('/edit/{id}', [GuncellemeController::class, 'edit_function']);

Route::post('/update/{id}', [GuncellemeController::class, 'update_function']);
// admin

Route::get('/adminekle', [GuncellemeController::class, 'adminekle']);

Route::post('/adminekle', [GuncellemeController::class, 'saveAdmin'])->name('saveAdmin');

Route::get('/adminSil', [GuncellemeController::class, 'adminSilSayfa']);

Route::get('/adminSil/{id}', [GuncellemeController::class, 'adminSil']);

Route::get('/adminGuncelle', [GuncellemeController::class, 'adminGuncelle']);

Route::get('/aedit/{id}', [GuncellemeController::class, 'aedit_function']);

Route::post('/aupdate/{id}', [GuncellemeController::class, 'aupdate_function']);

Route::get('/urunbes/{id}', [GuncellemeController::class, 'urunbes']);

// admin panelinde user işlemleri

Route::get('/userEkle', [GuncellemeController::class, 'userEkle']);

Route::post('/userEkle', [GuncellemeController::class, 'userSave'])->name('userEkleSave');

// Route::get('/cart/{id}', function ($id) {
//     $urunlers = DB::select('select * from urunlers where urunId = ?', [$id]);
//     return view('cart', array('urunlers' => $urunlers));
// });

Route::get('cart/{id}', [UserController::class, 'cart'])->name('cart');


Route::get('/ayrintilar', [GuncellemeController::class, 'ayrintilar']);

Route::get('/uedit/{id}', [UserController::class, 'uedit_function']);

Route::post('/uupdate/{id}', [UserController::class, 'uupdate_function']);


Route::get('/userSil', [GuncellemeController::class, 'userSilSayfa']);

Route::get('/userSil/{id}', [GuncellemeController::class, 'userSil']);

Route::get('/userGuncelle', [GuncellemeController::class, 'userGuncelle']);

Route::get('/useredit/{id}', [GuncellemeController::class, 'useredit_function']);

Route::post('/userupdate/{id}', [GuncellemeController::class, 'userupdate_function']);

// sepet ekleme


Route::get('/sepet', [GuncellemeController::class, 'sepet']);
