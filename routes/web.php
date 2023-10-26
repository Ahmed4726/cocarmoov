<?php

use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CodriveController;
use App\Http\Controllers\ConvoyorController;
use App\Http\Controllers\TransporteurController;

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', [WelcomeController::class,'index'])->name('welcome');
Route::get('/insurance', [InsuranceController::class,'index'])->name('insurance');
Route::get('/contact', [ContactController::class,'index'])->name('contact_us');
Route::get('/faq', [FaqController::class,'index'])->name('faq');
Route::get('/blog', [BlogController::class,'index'])->name('blog');
Route::get('/co-drive',[CodriveController::class,'index'])->name('co-drive');
Route::get('/professionnel',[ProfessionalController::class,'index'])->name('professionall');
Route::get('/convoyor', [ConvoyorController::class,'index'])->name('convoyor');
Route::get('/transporteur', [TransporteurController::class,'index'])->name('transporteur');
Route::get('/news', function () {
    return view('frontend.news');
})->name('news');
Route::get('/tips-tricks', function () {
    return view('frontend.tips&tricks');
})->name('tips-tricks');
Route::get('/pros', function () {
    return view('frontend.pros');
})->name('pros');
Route::get('/professional', function () {
    return view('frontend.professional_drivers');
})->name('professional');
Route::get('/transporter', function () {
    return view('frontend.transporters');
})->name('transporter');
Route::get('/about-cocarmoov', function () {
    return view('frontend.about_cocarmoov');
})->name('about-cocarmoov');
Route::get('/about-cocarmoov-2', function () {
    return view('frontend.about_cocarmoov_2');
})->name('about-cocarmoov-2');
Route::get('/testimonials', function () {
    return view('frontend.testimonials');
})->name('testimonials');
Route::get('/privacy-policy', function () {
    return view('frontend.privacy-policy');
})->name('privacy-policy');
Route::get('/legal-notice', function () {
    return view('frontend.legal-notice');
})->name('legal-notice');
Route::get('/transporteur', function () {
    return view('frontend.transporteurs');
})->name('transporteur');
Route::get('/generate-cgv', [PDFController::class, 'generateCGVPDF'])->name('generate-cgv');
Route::get('/generate-cgy', [PDFController::class, 'generateCGUPDF'])->name('generate-cgu');
require __DIR__.'/auth.php';
