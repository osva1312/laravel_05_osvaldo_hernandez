<?php
use App\Http\Controllers\MailController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');


Route::get('/post/detail/{id}', [PublicController::class, 'detail'])->name('detail-page');

Route::get('/contact_us', [MailController::class, 'contact'])->name('contac_us');
Route::post('/send-email', [MailController::class, 'send_email'])->name('send_email');