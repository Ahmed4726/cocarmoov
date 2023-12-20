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
use Illuminate\Support\Facades\Auth;

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
// Route::get('/test', function () {
//     return view('admin.admin_dashboard');
// });
Route::get('/main-dashboard', function () {
    // dd("oka");
    if (!Auth::check()) {
        // dd("ok");
        // User is not logged in, show SweetAlert or redirect to login page
        return view('welcome')->with('showSweetAlert', true);
    }
    return view('admin.admin_dashboard');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
Route::get('/', [WelcomeController::class,'index'])->name('welcome');
Route::get('/assurance', [InsuranceController::class,'index'])->name('insurance');
Route::get('/contact', [ContactController::class,'index'])->name('contact_us');
Route::get('/faq', [FaqController::class,'index'])->name('faq');
Route::get('/blog', [BlogController::class,'index'])->name('blog');
Route::get('/co-convoyer',[CodriveController::class,'index'])->name('co-drive');
Route::get('/professionnel',[ProfessionalController::class,'index'])->name('professionall');
Route::get('/convoyeur', [ConvoyorController::class,'index'])->name('convoyor');
Route::get('/transporteur', [TransporteurController::class,'index'])->name('transporteur');
Route::get('/actualité', function () {
    return view('frontend.news');
})->name('news');
Route::get('/conseils-et-astuces', function () {
    return view('frontend.tips_tricks');
})->name('tips-tricks');
Route::get('/Professionnels', function () {
    return view('frontend.pros');
})->name('pros');
Route::get('/convoyeurs', function () {
    return view('frontend.professional_drivers');
})->name('professional');
Route::get('/transporteurs', function () {
    return view('frontend.transporters');
})->name('transporter');
Route::get('/propos-de-cocarmoov', function () {
    return view('frontend.about_cocarmoov');
})->name('about-cocarmoov');
Route::get('/propos-de-cocarmoov-2', function () {
    return view('frontend.about_cocarmoov_2');
})->name('about-cocarmoov-2');
Route::get('/testimonials', function () {
    return view('frontend.testimonials');
})->name('testimonials');
Route::get('/politique-de-confidentialite', function () {
    return view('frontend.privacy_policy');
})->name('privacy_policy');
Route::get('/mentions-legales', function () {
    return view('frontend.legal_notice');
})->name('legal_notice');
Route::get('/transporteur', function () {
    return view('frontend.transporteurs');
})->name('transporteur');

Route::get('/generate-cgv', [PDFController::class, 'generateCGVPDF'])->name('generate-cgv');
Route::get('/generate-cgu', [PDFController::class, 'generateCGUPDF'])->name('generate-cgu');
require __DIR__.'/auth.php';
