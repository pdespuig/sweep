<?php

use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\CalenderController;

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
//Calendar
Route::get('calendar-event', [CalenderController::class, 'index']);
Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);

//Service Module
Route::resource('services', ServiceController::class);
Route::post('/store',[ServiceController::class, 'store'])->name('store');
Route::get('/destroy/{id}',[ServiceController::class, 'destroy'])->name('destroy');
Route::post('/update',[ServiceController::class, 'update'])->name('update');
Route::get('/update',[ServiceController::class, 'update'])->name('update');
Route::get('/admin_services',[ServiceController::class, 'admin_services'])->name('admin_services'); 
Route::get('/customer/customer_services',[ServiceController::class, 'customer_services'])->name('customer.customer_services');

//Admin
Route::POST('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::POST('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');

//Booking Module
Route::post('/updateStatus',[BookingController::class, 'updateStatus'])->name('updateStatus');
Route::get('/customer/customer_transaction',[BookingController::class, 'customer_transaction'])->name('customer.customer_transaction');
Route::get('/customer/customer_history',[BookingController::class, 'customer_history'])->name('customer.customer_history');
Route::get('/cleaner/cleaner_job',[BookingController::class, 'cleaner_job'])->name('cleaner.cleaner_job');
Route::get('/cleaner/cleaner_history',[BookingController::class, 'cleaner_history'])->name('cleaner.cleaner_history');

//Customer
Route::post('/customer/customer_save',[MainController::class, 'customer_save'])->name('customer.customer_save');
Route::post('/customer/customer_check',[MainController::class, 'customer_check'])->name('customer.customer_check');
Route::post('customer/book',[BookingController::class, 'book'])->name('book');

//Cleaner
Route::post('/cleaner/cleaner_save',[MainController::class, 'cleaner_save'])->name('cleaner.cleaner_save');
Route::post('/cleaner/cleaner_check',[MainController::class, 'cleaner_check'])->name('cleaner.cleaner_check');
Route::post('cleaner/book',[BookingController::class, 'book'])->name('book');



Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/',[MainController::class, 'sweep_welcome'])->name('sweep_welcome');
    //Route for Admin Pages
    Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');
    Route::get('/admin_dashboard',[MainController::class, 'admin_dashboard'])->name('admin_dashboard'); 
    Route::get('/admin_transaction',[BookingController::class, 'admin_transaction'])->name('admin_transaction');
    Route::get('/admin_transaction_history',[BookingController::class, 'admin_transaction_history'])->name('admin_transaction_history');
    Route::get('/admin_services',[BookingController::class, 'admin_services'])->name('admin_services');
    Route::get('/admin_user',[BookingController::class, 'admin_user'])->name('admin_user');
    Route::get('/admin_user_customer',[BookingController::class, 'admin_user_customer'])->name('admin_user_customer');
    Route::get('/admin_user_cleaner',[BookingController::class, 'admin_user_cleaner'])->name('admin_user_cleaner');
    Route::get('/admin_payroll',[BookingController::class, 'admin_payroll'])->name('admin_payroll');
    Route::get('/admin_payroll_employee',[BookingController::class, 'admin_payroll_employee'])->name('admin_payroll_employee');
    Route::get('/admin_payroll_cleaner',[BookingController::class, 'admin_payroll_cleaner'])->name('admin_payroll_cleaner');

    //Route for Customer Pages
    Route::get('/customer/customer_login',[MainController::class, 'customer_login'])->name('customer.customer_login');
    Route::get('/customer/customer_register',[MainController::class, 'customer_register'])->name('customer.customer_register');
    Route::get('/customer/customer_dashboard',[MainController::class, 'customer_dashboard'])->name('customer.customer_dashboard');
    Route::get('/customer/customer_profile',[MainController::class, 'customer_profile'])->name('customer.customer_profile');

    //Route for Cleaner App
    Route::get('/cleaner/cleaner_login',[MainController::class, 'cleaner_login'])->name('cleaner.cleaner_login');
    Route::get('/cleaner/cleaner_register',[MainController::class, 'cleaner_register'])->name('cleaner.cleaner_register');
    Route::get('/cleaner/cleaner_dashboard',[MainController::class, 'cleaner_dashboard'])->name('cleaner.cleaner_dashboard');
    Route::get('/cleaner/cleaner_profile',[MainController::class, 'cleaner_profile'])->name('cleaner.cleaner_profile');

});


