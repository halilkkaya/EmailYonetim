<?php

use App\Http\Controllers\yonetimController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FirmaController;
use App\Models\Musteriler;
use App\Mail\MailGonderme;



Route::get('/', function () {
    return view('include.home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});


route::get('/index', [yonetimController::class,'index'])->name("index");
route::get('/musteri-ekle', [yonetimController::class,'musteriEkle'])->name("-emusterlike");
route::post('/musteri-ekle-post', [yonetimController::class,'MusteriEklePost'])->name("musteri-ekle-post");
route::get('/musteri-liste', [yonetimController::class,'musteriListe'])->name("musteri-liste");
route::get('/musteri-duzenle/{id}', [yonetimController::class,'musteriDuzenle'])->name("musteri-duzenle");
route::post('/musteri-duzenle-post/{id}', [yonetimController::class,'MusteriDuzenlePost'])->name("musteri-duzenle-post");
route::get('/musteri-sil/{id}', [yonetimController::class,'musteriSil'])->name("musteri-sil");
route::get('/toplu-mail-olustur', [MailController::class,'index'])->name("toplu-mail-olusturma");
route::post('/mail-olustur-post', [MailController::class,'MailOlusturPost'])->name("mail-olustur-post");
Route::get('musteriler', [UserController::class, 'index'])->name('musteriler.index');
Route::post('musteriler-send-email', [UserController::class, 'sendEmail'])->name('ajax.send.email');
Route::post('/musteriler.sil', [yonetimController::class, 'musterileritoplusil'])->name('musteriler.sil');
Route::get('/gelen-kutusu', [MailController::class, 'gelenkutusu'])->name('gelen-kutusu');
route::get('/musteri-silmek/{id}', [yonetimController::class,'musteriSilmek'])->name("musteri-silmek");
route::get('/firma-listesi', [FirmaController::class,'firmaListesi'])->name("firma-listesi");
route::get('/firma-ekle', [FirmaController::class,'firmaEkle'])->name("firma-ekle");
route::post('/firma-ekle-post', [FirmaController::class,'firmaEklePost'])->name("firma-ekle-post");
route::get('/firma-duzenle/{id}', [FirmaController::class,'firmaDuzenle'])->name("firma-duzenle");
route::post('/firma-duzenle-post/{id}', [FirmaController::class,'firmaDuzenlePost'])->name("firma-duzenle-post");
route::get('/firma-sil/{id}', [FirmaController::class,'firmaSil'])->name("firma-sil");
route::get('/firma-silmek/{id}', [FirmaController::class,'firmaSilmek'])->name("firma-silmek");
