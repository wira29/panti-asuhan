<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard\AdminGalleryController;
use App\Http\Controllers\Dashboard\ChildController;
use App\Http\Controllers\Dashboard\DonationController as DonationDashboardController;
use App\Http\Controllers\Dashboard\HomeController as HomeDashboardController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {

    Route::get('/', [HomeDashboardController::class, 'index'])->name('index');
    Route::get('/donation/barang', [DonationDashboardController::class, 'viewBarang'])->name('donation.barang.index');
    Route::get('/donation/barang/create', [DonationDashboardController::class, 'create'])->name('donation.barang.create');
    Route::get('/donation/barang/edit/{id}', [DonationDashboardController::class, 'edit'])->name('donation.barang.edit');
    Route::put('/donation/barang/update/{id}', [DonationDashboardController::class, 'update'])->name('donation.barang.update');
    Route::delete('/donation/barang/destroy/{id}', [DonationDashboardController::class, 'destroy'])->name('donation.barang.destroy');
    Route::post('/donation/store', [DonationDashboardController::class, 'store'])->name('donation.barang.store');
    Route::get('/donation/uang', [DonationDashboardController::class, 'viewUang'])->name('donation.uang');
    Route::get('/donation/printMoneyDonation', [DonationDashboardController::class, 'printMoneyDonation'])->name('printMoneyDonation');
    Route::resources([
        'events' => \App\Http\Controllers\Dashboard\EventController::class,
        'galeries' => AdminGalleryController::class,
        'profile' => ProfileController::class,
        'child' => ChildController::class,
        'feedback' => \App\Http\Controllers\Dashboard\FeedbackController::class,
        'contact' => ContactController::class,
    ]);

});

//Route::resource('galeries', AdminGalleryController::class);

//Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/donation-form', [HomeController::class, 'donation'])->name('donation');
    Route::get('/event-donation/{event}', [HomeController::class, 'eventDonation'])->name('event-donation');
    Route::post('/donate-action', [HomeController::class, 'donate'])->name('donate-action');
});
Route::get('/event-donation/{event}/detail', [EventController::class, 'show'])->name('event-detail');

Route::post('/payment-notification-handling', [HomeController::class, 'handleAfterPayment'])->name('paymentHandling');
// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/donate', [DonationController::class, 'index'])->name('donate');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-detail', [BlogDetailController::class, 'index'])->name('blog-detail');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
