<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\User_profileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AgenController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Travel_informationController;
use App\Http\Controllers\Add_ticketgroupController;
use App\Http\Controllers\Auth_userController;
use App\Http\Controllers\Auth_agenController;
use App\Http\Controllers\Add_paketController;
use App\Http\Controllers\Data_agenController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PacketController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\MoneyController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function() {
    return 'Ini halaman login';
})->name('login');


// include antoher route
include __DIR__.'/frontend.php';

//tampilan pengguna
// Route::get('/product/{id}', [ProductController::class, 'index'])->name('product');
Route::post('/product/proses_save_buy_packet', [ProductController::class, 'proses_save_buy_packet'])->name('product/proses_save_buy_packet');
Route::post('/product/proses_save_order_packet', [ProductController::class, 'proses_save_order_packet'])->name('product/proses_save_order_packet');
Route::get('/form_order', [ProductController::class, 'form_order'])->name('form_order');
Route::get('/send_email', [ProductController::class, 'sendMail'])->name('send_email');
Route::get('/user_profile', [User_profileController::class, 'index'])->name('user_profile');
Route::get('/user_profile/order', [OrderController::class, 'index'])->name('user_profile/order');

//login & register user
Route::get('/auth_user/login', [Auth_userController::class, 'index'])->name('user/login');
Route::post('/auth_user/login', [Auth_userController::class, 'loginaksi'])->name('login.aksi_user');
Route::get('/auth_user/register', [Auth_userController::class, 'register'])->name('user/register');
Route::post('/auth_user/register', [Auth_userController::class, 'save_registrasi'])->name('register_customer.simpan');
Route::get('/auth_user/logout', [Auth_userController::class, 'logout']);
Route::get('/email/verify', function() {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request){
    $request->fulfill();

    return redirect('/profile');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/profile', function (){
    return 'ini halaman profile. penanda bahwa user sudah login';
})->middleware(['auth', 'signed']);

//login agen
Route::get('/login_agen', [Auth_agenController::class, 'index'])->name('login_agen');
Route::post('/login_agen', [Auth_agenController::class, 'loginaksi'])->name('login.aksi');
Route::get('/logout_agen', [Auth_agenController::class, 'logout'])->name('logout_agen')->middleware('auth_agen');
Route::get('/regis_agen', [Auth_agenController::class, 'registrasi'])->name('regis_agen');
Route::post('/regis_agen', [Auth_agenController::class, 'save_registrasi'])->name('register.simpan');

Route::middleware('auth_agen')->group(function(){ 

    //get infromation maskapai
    Route::get('/agen/select_maskapai/', [DataController::class, 'index'])->name('select_maskapai.index');

    //get infromation provider
    Route::get('/agen/select_provider/', [DataController::class, 'provider'])->name('select_provider.index');
    
    //get infromation provider
    Route::get('/agen/select_airport/', [DataController::class, 'airport'])->name('select_airport.index');

    //tampilan agen
    Route::get('/agen/dashboard', [AgenController::class, 'index'])->name('agen/dashboard');
    Route::get('/agen/dashboard_validasi', [AgenController::class, 'validasi'])->name('agen/dashboard_validasi');
    Route::get('/agen/add_group_ticket', [Umroh_ticketController::class, 'index'])->name('agen/add_group_ticket');
    
    //informasi travel
    Route::get('/agen/travel_information/{id}', [Travel_informationController::class, 'index'])->name('agen/travel_information');
    Route::get('/agen/getRegencies/', [Travel_informationController::class, 'getRegencies'])->name('agen/getRegencies');
    Route::post('/agen/proses_save_travel/{id}', [Travel_informationController::class, 'proses_save_travel'])->name('agen/proses_save_travel');
    Route::post('/agen/proses_update_travel/{id}', [Travel_informationController::class, 'proses_update_travel'])->name('agen/proses_update_travel');
    
    //penanggung jawab
    Route::get('/agen/person_responsible/{id}', [Travel_informationController::class, 'person_responsible'])->name('agen/person_responsible');
    Route::post('/agen/proses_save_resposibles/{id}', [Travel_informationController::class, 'proses_save_resposibles'])->name('agen/proses_save_resposibles');
    Route::post('/agen/proses_update_resposibles/{id}', [Travel_informationController::class, 'proses_update_responsibles'])->name('agen/proses_update_resposibles');
    
    //data komisi
    Route::get('/agen/money/{id}', [Travel_informationController::class, 'money'])->name('agen/money');
    Route::post('/agen/proses_save_money/{id}', [Travel_informationController::class, 'proses_save_money'])->name('agen/proses_save_money');
    Route::post('/agen/proses_update_money/{id}', [Travel_informationController::class, 'proses_update_money'])->name('agen/proses_update_money');
    Route::post('/agen/proses_edit_money/{id}', [Travel_informationController::class, 'proses_edit_money'])->name('agen/proses_edit_money');
    
    //data verifikasi
    Route::get('/agen/verifikasi', [Travel_informationController::class, 'verifikasi'])->name('agen/verifikasi');
    
    //tiket group
    Route::get('/agen/add_ticket_group', [Add_ticketgroupController::class, 'index'])->name('agen/add_ticket_group');
    Route::post('/agen/saveTicket', [Add_ticketgroupController::class, 'proses_save_ticket'])->name('/agen/saveTicket');
    Route::get('/agen/data_ticket_group', [Add_ticketgroupController::class, 'data_ticket'])->name('agen/data_ticket_group');
    Route::get('/agen/edit_ticket_group/{id}', [Add_ticketgroupController::class, 'edit_ticket'])->name('agen/edit_ticket_group');
    Route::post('/agen/proccess_update_ticket/{id}', [Add_ticketgroupController::class, 'proccess_update_ticket'])->name('agen/proccess_update_ticket');
    Route::delete('/agen/delete_ticket_group/{id}', [Add_ticketgroupController::class, 'delete_ticket'])->name('agen/delete_ticket_group');
    Route::get('/agen/search_ticket', [Add_ticketgroupController::class, 'search_ticket'])->name('agen/search_ticket');
    Route::get('/agen/data_bursa_ticket', [Add_ticketgroupController::class, 'bursa_ticket'])->name('agen/data_bursa_ticket');
    
    //paket
    Route::get('/agen/add_packet', [Add_paketController::class, 'index'])->name('agen/add_packet');
    Route::post('/agen/proses_save_packet', [Add_paketController::class, 'proses_save_packet'])->name('agen/proses_save_packet');
    Route::get('/agen/add_hotel', [Add_paketController::class, 'add_hotel'])->name('agen/add_hotel');
    Route::post('/agen/proses_save_hotel', [Add_paketController::class, 'proses_save_hotel'])->name('agen/proses_save_hotel');
    Route::get('/agen/add_money', [Add_paketController::class, 'add_money'])->name('agen/add_money');
    Route::post('/agen/proses_save_money_packet', [Add_paketController::class, 'proses_save_money_packet'])->name('agen/proses_save_money_packet');
    Route::get('/agen/add_facilitas', [Add_paketController::class, 'add_facilitas'])->name('agen/add_facilitas');
    Route::post('/agen/proses_save_facilitas', [Add_paketController::class, 'proses_save_facilitas'])->name('agen/proses_save_facilitas');
    Route::get('/agen/add_condition', [Add_paketController::class, 'add_condition'])->name('agen/add_condition');
    Route::post('/agen/proses_save_condition', [Add_paketController::class, 'proses_save_condition'])->name('agen/proses_save_condition');
    Route::get('/agen/add_foto_video', [Add_paketController::class, 'add_foto_video'])->name('agen/add_foto_video');
    Route::post('/agen/proses_save_foto', [Add_paketController::class, 'proses_save_foto'])->name('agen/proses_save_foto');
    Route::get('/agen/data_packet', [Add_paketController::class, 'data_packet'])->name('agen/data_packet');
    Route::get('/agen/edit_paket/{id}', [Add_paketController::class, 'edit_paket'])->name('agen/edit_paket');
    Route::post('/agen/proccess_update_packet/{id}', [Add_paketController::class, 'proccess_update_packet'])->name('agen/proccess_update_packet');
    Route::get('/agen/edit_hotel/{id}', [Add_paketController::class, 'edit_hotel'])->name('agen/edit_hotel');
    Route::post('/agen/proccess_update_hotel/{id}', [Add_paketController::class, 'proccess_update_hotel'])->name('agen/proccess_update_hotel');
    Route::get('/agen/edit_money/{id}', [Add_paketController::class, 'edit_money'])->name('agen/edit_money');
    Route::post('/agen/proccess_update_money/{id}', [Add_paketController::class, 'proccess_update_money'])->name('agen/proccess_update_money');
    Route::get('/agen/edit_fasilitas/{id}', [Add_paketController::class, 'edit_fasilitas'])->name('agen/edit_fasilitas');
    Route::post('/agen/proccess_update_facilitas/{id}', [Add_paketController::class, 'proccess_update_facilitas'])->name('agen/proccess_update_facilitas');
    Route::get('/agen/edit_condition/{id}', [Add_paketController::class, 'edit_condition'])->name('agen/edit_condition');
    Route::post('/agen/proses_edit_condition/{id}', [Add_paketController::class, 'proses_edit_condition'])->name('agen/proses_edit_condition');
    Route::get('/agen/edit_photo/{id}', [Add_paketController::class, 'edit_photo'])->name('agen/edit_photo');
    Route::post('/agen/proses_edit_foto/{id}', [Add_paketController::class, 'proses_edit_foto'])->name('agen/proses_edit_foto');
    Route::get('/agen/add_itinerary', [Add_paketController::class, 'add_itinerary'])->name('agen/add_itinerary');
    Route::post('/agen/proses_save_itinerary', [Add_paketController::class, 'proses_save_itinerary'])->name('agen/proses_save_itinerary');
    Route::get('/agen/get_itinerary', [Add_paketController::class, 'get_itinerary'])->name('agen/get_itinerary');
    Route::get('/agen/edit_itinery/{id}', [Add_paketController::class, 'edit_itinery'])->name('agen/edit_itinery');
    Route::post('/agen/procces_update_itinerary/{id}', [Add_paketController::class, 'procces_update_itinerary'])->name('agen/procces_update_itinerary');
    Route::delete('/agen/delete_itinery/{id}', [Add_paketController::class, 'delete_itinery'])->name('agen/delete_itinery');
    
    //agen
    Route::get('/agen/add_agen', [Data_agenController::class, 'add_agen'])->name('agen/add_agen');
    Route::post('/agen/saveAgen', [Data_agenController::class, 'saveAgen'])->name('agen/saveAgen');
    Route::get('/agen/get_agen', [Data_agenController::class, 'index'])->name('agen/get_agen');
    Route::get('/agen/add_partner_branch', [Data_agenController::class, 'add_partner_branch'])->name('agen/add_partner_branch');
    Route::post('/agen/savePartner_branch', [Data_agenController::class, 'savePartner_branch'])->name('agen/savePartner_branch');
    Route::get('/agen/edit_agen/{id}', [Data_agenController::class, 'edit_agen'])->name('agen/edit_agen');
    Route::post('/agen/proses_edit_agen/{id}', [Data_agenController::class, 'proses_edit_agen'])->name('agen/proses_edit_agen');
    Route::delete('/agen/delete_agen/{id}', [Data_agenController::class, 'delete_agen'])->name('agen/delete_agen');
    Route::get('/agen/get_partner_branch', [Data_agenController::class, 'get_partner_branch'])->name('agen/get_partner_branch');
    Route::get('/agen/edit_partner/{id}', [Data_agenController::class, 'edit_partner'])->name('agen/edit_partner');
    Route::post('/agen/proses_edit_partner/{id}', [Data_agenController::class, 'proses_edit_partner'])->name('agen/proses_edit_partner');
    Route::delete('/agen/delete_partner/{id}', [Data_agenController::class, 'delete_partner'])->name('agen/delete_partner');
    
    //profile
    Route::get('/agen/profile/{id}', [User_profileController::class, 'profile_agen'])->name('agen/profile');
    Route::post('/agen/proses_update_profile/{id}', [User_profileController::class, 'proses_edit_profile'])->name('agen/proses_update_profile');
    
    //keuangan
    Route::get('/agen/get_sale', [MoneyController::class, 'index'])->name('agen/get_sale');
    Route::post('/agen/update_status_money/{id}', [MoneyController::class, 'proses_edit_money'])->name('agen/update_status_money');
    Route::post('/agen/update_status_pending_money/{id}', [MoneyController::class, 'proses_edit_pending_money'])->name('agen/update_status_pending_money');
    Route::get('/agen/get_commision', [MoneyController::class, 'get_commision'])->name('agen/get_commision');
    Route::post('/agen/save_commision', [MoneyController::class, 'save_commision'])->name('agen/save_commision');
    
    //---------------------------------------- Superadmin--------------------------------------------------------------------------
    //tampilan superadmin
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin/dashboard');

    //ticket
    Route::get('/admin/provider', [TicketController::class, 'index'])->name('admin/provider');
    Route::post('/admin/proses_save_provider/', [TicketController::class, 'proses_save_provider'])->name('admin/proses_save_provider');
    Route::post('/admin/proses_update_provider/{id}', [TicketController::class, 'proses_update_provider'])->name('admin/proses_update_provider');
    Route::delete('/admin/delete_provider/{id}', [TicketController::class, 'delete_provider'])->name('admin/delete_provider');
    Route::get('/admin/bursa_ticket', [TicketController::class, 'bursa_ticket'])->name('admin/bursa_ticket');
    Route::get('/admin/add_bursa_ticket', [TicketController::class, 'add_bursa_ticket'])->name('admin/add_bursa_ticket');
    Route::post('/admin/save_bursaTicket', [TicketController::class, 'save_bursaTicket'])->name('admin/save_bursaTicket');
    Route::get('/admin/edit_ticket_bursa/{id}', [TicketController::class, 'edit_ticket_bursa'])->name('agen/edit_ticket_bursa');
    Route::post('/admin/proccess_update_ticket_bursa/{id}', [TicketController::class, 'proccess_update_ticket_bursa'])->name('agen/proccess_update_ticket_bursa');
    Route::delete('/admin/delete_ticket_bursa/{id}', [TicketController::class, 'delete_ticket_bursa'])->name('agen/delete_ticket_bursa');
    Route::get('/admin/ticket_group', [TicketController::class, 'ticket_group'])->name('admin/ticket_group');

    //Umroh
    Route::get('/admin/data_packet_umroh', [PacketController::class, 'index'])->name('admin/data_packet_umroh');
    Route::post('/admin/update_verify_umroh/{id}', [PacketController::class, 'update_verify_umroh'])->name('admin/update_verify_umroh');
    Route::post('/admin/update_notverify_umroh/{id}', [PacketController::class, 'update_notverify_umroh'])->name('admin/update_notverify_umroh');
    Route::get('/admin/jeddah_hotel', [PacketController::class, 'jeddah_hotel'])->name('admin/jeddah_hotel');
    Route::post('/admin/proses_save_hotel_jeddah/', [PacketController::class, 'proses_save_hotel_jeddah'])->name('admin/proses_save_hotel_jeddah');
    Route::post('/admin/proses_update_hotel_jeddah/{id}', [PacketController::class, 'proses_update_hotel_jeddah'])->name('admin/proses_update_hotel_jeddah');
    Route::delete('/admin/delete_hotel_jeddah/{id}', [PacketController::class, 'delete_hotel_jeddah'])->name('admin/delete_hotel_jeddah');
    Route::get('/admin/madinah_hotel', [PacketController::class, 'madinah_hotel'])->name('admin/madinah_hotel');
    Route::post('/admin/proses_save_hotel_madinah/', [PacketController::class, 'proses_save_hotel_madinah'])->name('admin/proses_save_hotel_madinah');
    Route::post('/admin/proses_update_hotel_madinah/{id}', [PacketController::class, 'proses_update_hotel_madinah'])->name('admin/proses_update_hotel_madinah');
    Route::delete('/admin/delete_hotel_madinah/{id}', [PacketController::class, 'delete_hotel_madinah'])->name('admin/delete_hotel_madinah');
    Route::get('/admin/category_umroh', [PacketController::class, 'category_umroh'])->name('admin/category_umroh');
    Route::post('/admin/proses_save_category/', [PacketController::class, 'proses_save_category'])->name('admin/proses_save_category');
    Route::post('/admin/proses_update_category/{id}', [PacketController::class, 'proses_update_category'])->name('admin/proses_update_category');
    Route::delete('/admin/delete_category/{id}', [PacketController::class, 'delete_category'])->name('admin/delete_category');

    //customer
    Route::get('/admin/data_customer', [CustomerController::class, 'data_customer'])->name('admin/data_customer');
    Route::get('/admin/travel_information', [CustomerController::class, 'index'])->name('admin/travel_information');
    Route::get('/admin/data_customer_travel', [CustomerController::class, 'data_customer_travel'])->name('agen/data_customer_travel');
    Route::post('/admin/active_travel/{id}', [CustomerController::class, 'active_travel'])->name('admin/active_travel');
    Route::post('/admin/not_active_travel/{id}', [CustomerController::class, 'not_active_travel'])->name('admin/not_active_travel/');
    Route::get('/admin/export_travel/{id}', [CustomerController::class, 'export_travel'])->name('admin/export_travel/');
    Route::get('/admin/export_all_travel/', [CustomerController::class, 'export_all_travel'])->name('admin/export_all_travel/');
    Route::get('/admin/information_branch', [CustomerController::class, 'information_branch'])->name('admin/information_branch');
    
    //cms
    Route::get('/admin/bg_color/{id}', [CmsController::class, 'index'])->name('/admin/bg_color');
    Route::post('/admin/proses_update_bg/{id}', [CmsController::class, 'proses_update_bg'])->name('agen/proses_update_bg');
    Route::get('/admin/information/{id}', [CmsController::class, 'information'])->name('/admin/information');
    Route::post('/admin/proses_update_information/{id}', [CmsController::class, 'proses_update_information'])->name('admin/proses_update_information/');
    Route::get('/admin/sosmed/', [CmsController::class, 'sosmed'])->name('/admin/sosmed');
    Route::post('/admin/proses_update_sosmed/{id}', [CmsController::class, 'proses_update_sosmed'])->name('admin/proses_update_sosmed/');
    Route::post('/admin/status_active_sosmed/{id}', [CmsController::class, 'status_active_sosmed'])->name('admin/status_active_sosmed/');
    Route::post('/admin/status_noactive_sosmed/{id}', [CmsController::class, 'status_noactive_sosmed'])->name('admin/status_noactive_sosmed/');
    //-----------------------------------------------------------------------------------------------------------------------------
    
});