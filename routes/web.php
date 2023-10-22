<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Storage;
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

Route::get('/', function () {
    return view('frontend.welcome');
})->name('welcome');
Route::get('/insurance', function () {
    return view('frontend.insurance');
})->name('insurance');
Route::get('/contact', function () {
    return view('frontend.contact_us');
})->name('contact_us');
Route::get('/faq', function () {
    return view('frontend.faq');
})->name('faq');
Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');
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
Route::get('/professionnel', function () {
    return view('frontend.professional');
})->name('professionall');
Route::get('/co-drive', function () {
    return view('frontend.co-drive');
})->name('co-drive');
Route::get('/generate-cgv', [PDFController::class, 'generateCGVPDF'])->name('generate-cgv');
Route::get('/generate-cgy', [PDFController::class, 'generateCGUPDF'])->name('generate-cgu');
// Route::get('/download/{filename}', [FileDownloadController::class, 'downloadFileByName'])->name('download-by-name');
// Route::get('/download-cgv', [FileDownloadController::class, 'downloadCGV'])->name('download-cgv');
// Route::get('/view-pdf-design', [PDFController::class,'viewPDFDesign'])->name('view-pdf-design');
