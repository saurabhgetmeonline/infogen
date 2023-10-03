<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ConsultancyController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GDPR_policyController;
use App\Http\Controllers\ImexController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\InfogenController;
use App\Http\Controllers\Insight_categoryController;
use App\Http\Controllers\Insight_postController;
use App\Http\Controllers\InsightController;
use App\Http\Controllers\Privacy_policyContoller;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\Report_categoryController;
use App\Http\Controllers\Report_viewController;
use App\Http\Controllers\Term_conditionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\Why_choose_usController;
use App\Http\Controllers\Home_first_sectionController;
use App\Http\Controllers\Career_pageController;
use App\Http\Controllers\ImageController;
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

// admi authentication 

Route::get('/admin/login', [AuthController::class, 'admin_login'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'admin_login_store'])->name('admins.login');
// admin panel routes
Route::middleware(['adminauth'])->group(function () {
    Route::get('/admin/dashboard', [AuthController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AuthController::class,'admin_logout'])->name('admin.logout');
    Route::get('/admin/profile', [AuthController::class, 'admin_profile'])->name('admin.profile');
    Route::post('/admin/profile/update', [AuthController::class, 'admin_profile_update'])->name('admins.profile_update');
    Route::get('/admin/changepass', [AuthController::class,'admin_changepass'])->name('admin.changepass');
    Route::post('/admin/updatepass', [AuthController::class,'admin_updatepass'])->name('admins.updatepass');
});

Route::group(['middleware' => ['adminauth']], function () {
    Route::resource('/admin/user', AdminController::class);
    Route::resource('/banner', BannerController::class);

    Route::get('/order', function () {
        return view('admins.orders.orders');
    });

    Route::get('/order-view', function () {
        return view('admins.orders.order-view');
    });

    // Route::get('/apply-form', function () {
    //     return view('users.apply-form');
    // });

    // Route::get('/payment_failed', function () {
    //     return view('users.payment_failed');
    // });

    // Route::get('/payment_success', function () {
    //     return view('users.payment_success');
    // });

    // Route::get('/order-form', function () {
    //     return view('users.order-form');
    // });
    
    Route::resource('/progress', ProgressController::class);
    Route::resource('/industry', IndustryController::class);
    Route::resource('/consultancy', ConsultancyController::class);
    Route::resource('/career', CareerController::class);
    Route::resource('/term-condition', Term_conditionController::class);
    Route::resource('/privacy-policy', Privacy_policyContoller::class);
    Route::resource('/gdpr-policy', GDPR_policyController::class);
    Route::resource('/about', AboutController::class);
    Route::resource('/report_category', Report_categoryController::class);
    Route::resource('/report-view', Report_viewController::class);
    Route::get('/report-view/duplicate-row/{id}', [Report_viewController::class, 'duplicateRow'])->name('report-view.duplicate.row');
    Route::resource('/insight', InsightController::class);
    Route::resource('/insight-category', Insight_categoryController::class);
    Route::resource('/faq', FaqController::class);
    // Route::get('/import/upload',[ImexController::class,'import_upload']);
    Route::post('/import', [ImexController::class, 'import'])->name('import');
    Route::get('/export', [ImexController::class, 'export'])->name('export');
    Route::resource('/insight-post', Insight_postController::class);
    Route::get('/insight-post/duplicate-row/{id}', [Insight_postController::class, 'duplicateRow'])->name('insight-post.duplicate.row');
    Route::resource('/why-choose-us', Why_choose_usController::class);
    Route::resource('/first-section', Home_first_sectionController::class);
    Route::resource('/career-page', Career_pageController::class);
    Route::post('/upload-image', [ImageController::class, 'upload'])->name('upload.image');
});

// user panel routes

Route::get('/',[InfogenController::class,'homepage'])->name('users.index');
Route::get('/careers',[InfogenController::class,'career'])->name('users.careers');
Route::get('/careers/{slug}',[InfogenController::class,'jobdetail'])->name('users.jobdetail');
Route::get('/contactus',[InfogenController::class,'contact'])->name('users.contact-us');
Route::post('/contactus/send',[InfogenController::class,'send'])->name('users.mailformat');
Route::get('/aboutus',[InfogenController::class,'about'])->name('users.about-us');
Route::get('/terms',[InfogenController::class,'term'])->name('users.terms');
Route::get('/privacy',[InfogenController::class,'privacy'])->name('users.privacy');
Route::get('/gdpr',[InfogenController::class,'gdpr'])->name('users.gdpr');       
Route::get('/reports',[InfogenController::class,'report'])->name('users.reports');
Route::get('/reports/{slug}',[InfogenController::class,'reportpost'])->name('users.post');
Route::post('/reports/{id}/payment', [InfogenController::class, 'payment'])->name('users.payment');
Route::get('/reports/{id}/{slug2}',[InfogenController::class,'reportview'])->name('users.reports-view');
Route::get('/insights',[InfogenController::class,'insight'])->name('users.insights');
Route::get('/faqs',[InfogenController::class,'faqs'])->name('users.faqs');
Route::get('/insights/{slug}',[InfogenController::class,'insightpostdetail'])->name('users.insights-detail');
Route::get('/insights/category/{slug}',[InfogenController::class,'insightcategory'])->name('users.insights-category');
Route::get('/request-sample/{id}',[InfogenController::class,'requestsample'])->name('users.request-sample');
Route::post('/request-sample/{id}/send',[InfogenController::class,'requestsamplesend'])->name('users.request-sample-mail');
Route::get('/request-customization/{id}',[InfogenController::class,'requestcustomization'])->name('users.request-customization');
Route::post('/request-customization/{id}/send',[InfogenController::class,'requestcustomizationsend'])->name('users.request-customization-mail');
// route for processing payment
Route::post('paypal/payment', [PayPalController::class, 'payment'])->name('paypal.payment');

// payment success
Route::get('paypal/payment/success', [PayPalController::class, 'success'])->name('paypal_success');

// payment cancel
Route::get('paypal/payment/cancel', [PayPalController::class, 'cancel'])->name('paypal_cancel');

// payment success page
Route::get('paypal/payment/payment_success', [PayPalController::class, 'paymentSuccessPage'])->name('paypal.payment.payment_success');

// payment failed
Route::get('paypal_failed', [PayPalController::class, 'payment_failed']);
