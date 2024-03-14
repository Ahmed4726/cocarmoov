<?php

use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CodriveController;
use App\Http\Controllers\ConvoyorController;
use App\Http\Controllers\TransporteurController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\MoveVehicleController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\RolesAndPermissionController;


use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use Laratrust\Http\Controllers\RolesController;

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
Route::get('/', [WelcomeController::class,'index'])->name('welcome');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/test', function () {
//     return view('admin.admin_dashboard');
// });
Route::middleware('auth')->group(function () {
    Route::get('/main-dashboard', function () {
        return view('admin.admin_dashboard');
    })->name('dashboard');


    //Roles and Permissions
    Route::get('/roles-and-permissions', [RolesAndPermissionController::class,'index'])->name('roles.and.permissions');
    Route::get('/get-permissions/{role_id}', [RolesAndPermissionController::class,'getPermissions'])->name('get.permissions');
    Route::post('/save-permissions', [RolesAndPermissionController::class,'savePermission'])->name('save.Permission');

    //Permissions
    Route::get('/permissions', [PermissionsController::class,'index'])->name('permissions');
    Route::post('/add-new-permissions', [PermissionsController::class,'newPermission'])->name('add.new.permission');
    Route::get('/edit-permission/{id}', [PermissionsController::class,'edit'])->name('edit.Permission');
    Route::put('/update-permission/{id}', [PermissionsController::class,'update'])->name('update.Permission');
    Route::post('/delete-permission/{id}', [PermissionsController::class,'destroy'])->name('delete.permission');
    // Route::get('/permissions', [permissionsController::class,'index'])->name('permissions');

    //Roles
    Route::get('/roles', [RoleController::class,'index'])->name('roles');
    Route::post('/add-new-role', [RoleController::class,'newRole'])->name('add.new.role');
    Route::get('/edit-role/{id}', [RoleController::class,'edit'])->name('edit.role');
    Route::put('/update-role/{id}', [RoleController::class,'update'])->name('update.role');
    Route::post('/delete-role/{id}', [RoleController::class,'destroy'])->name('delete.role');

    //profile
    Route::get('/show_profile', [ProfileController::class,'index'])->name('profile.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile-update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/pending-profiles',[ProfileController::class, 'pendingProfiles'])->name('profile.pending');
    Route::get('/pending-profile-detail/{id}',[ProfileController::class, 'pendingProfilesDetails'])->name('profile.pending.details');
    Route::post('/profile-decision',[ProfileController::class, 'profileStatus'])->name('profile.status');

    //Bookings
    Route::get('/bookings', [BookingController::class,'index'])->name('bookings');

    //Calendar
    Route::get('/calendar', [CalendarController::class,'index'])->name('calendar');
    Route::get('/getevent', [CalendarController::class,'getEvent'])->name('getevent');
    Route::post('/createevent',[CalendarController::class,'createEvent'])->name('createevent');
    Route::post('/deleteevent',[CalendarController::class,'deleteEvent'])->name('deleteevent');

    Route::get('/fullcalender',[CalendarController::class,'index'])->name('admin.calender.show');
    Route::post('/fullcalenderAjax', [CalendarController::class,'ajax'])->name('ajax');

    //Account
    Route::get('/my-account', [AccountController::class,'index'])->name('account');

    //Alerts
    Route::get('/alerts', [AlertController::class,'index'])->name('alerts');
    Route::post('/add-alert',[AlertController::class,'addNew'])->name('add.new.alert');
    Route::get('/edit-alert/{id}', [AlertController::class,'edit'])->name('edit.alert');
    Route::put('/update-alert/{id}', [AlertController::class,'update'])->name('update.alert');
    Route::post('/delete-alert/{id}',[AlertController::class,'destroy'])->name('alert.delete');

    //Invoices
    Route::get('/invoices', [InvoiceController::class,'index'])->name('invoice');
    Route::get('/view-invoice/{id}',[InvoiceController::class,'view'])->name('view.invoice');
    Route::get('/download-invoice/{id}',[InvoiceController::class,'download'])->name('download.invoice');

    //Training certifications
    Route::get('/certifications', [TrainingController::class,'index'])->name('certification');

    // Route::view('my-account','admin.calendar')->name('calendar');

    // Cards
    Route::get('/cards', [CardController::class,'showCards'])->name('cards');
    Route::delete('/cards/{cardId}', [CardController::class,'deleteCard'])->name('delete-card');

    // Route::put('/password-update', [PasswordController::class,'password_update'])->name('password.update');
    //Stripe Payment
    Route::get('/payment', [PaymentController::class, 'showPaymentForm']);
    Route::post('/process-payment', [PaymentController::class, 'processPayment']);

    // Car Listing
    Route::post('/listing', [ListingController::class, 'createListing']);
    Route::get('/editListing/{id}', [ListingController::class, 'edit'])->name('editListing');
    Route::get('/deleteListing/{id}', [ListingController::class, 'delete'])->name('deleteListing');
    Route::get('/carmoovs', [ListingController::class, 'index'])->name('listings.index');

    // CarMove
    Route::get('/missions', [MissionController::class, 'index'])->name('missions');
    Route::get('/booking/{id}', [MissionController::class, 'booking'])->name('booking');
    Route::post('/book-ride', [MissionController::class, 'bookRide'])->name('book-ride');



});

Route::get('/get-csrf-token', function () {
    return response()->json(['csrf_token' => csrf_token()]);
});


Route::post('/login-step',[MoveVehicleController::class,'login'])->name('login.step');
//test route

Route::get('/test', function () {
    return view('frontend.move_vehicle');
});


Route::post('/calculate', [MoveVehicleController::class,'index'])->name('calculate');



//Website

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
