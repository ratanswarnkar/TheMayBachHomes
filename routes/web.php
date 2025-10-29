<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LovinoController;
use App\Http\Controllers\AdminController;


Route::get('/', [LovinoController::class, 'index']);
Route::get('/about-us',[LovinoController::class, 'aboutUs']);
Route::get('/projects',[LovinoController::class, 'projects']);
Route::get('/sale',[LovinoController::class, 'sale']);
Route::get('/blog',[LovinoController::class, 'rent']);
Route::get('/team',[LovinoController::class, 'team']);
Route::get('/career',[LovinoController::class, 'career']);
Route::get('/contact', [LovinoController::class, 'contact']);
Route::get('/founder',[LovinoCOntroller::class, 'founder']);
Route::get('/p1details',[LovinoController::class, 'p1details']);
Route::get('/p2details',[LovinoController::class, 'p2details']);
Route::get('/p3details',[LovinoController::class, 'p3details']);
Route::get('/p4details',[LovinoController::class, 'p4details']);
Route::get('/p5details',[LovinoController::class, 'p5details']);
Route::get('/p6details',[LovinoController::class, 'p6details']);
Route::get('/p7details',[LovinoController::class, 'p7details']);
Route::get('/p8details',[LovinoController::class, 'p8details']);
Route::get('/p9details',[LovinoController::class, 'p9details']);
Route::get('/p10details',[LovinoController::class, 'p10details']);
Route::get('/p11details',[LovinoController::class, 'p11details']);
Route::get('/p12details',[LovinoController::class, 'p12details']);
Route::get('/p13details',[LovinoController::class, 'p13details']);
Route::get('/p14details',[LovinoController::class, 'p14details']);
Route::get('/p15details',[LovinoController::class, 'p15details']);
Route::get('/p16details',[LovinoController::class, 'p16details']);
Route::get('/blogs',[LovinoController::class, 'blogs']);
Route::get('/blogs1',[LovinoController::class, 'blogs1']);
Route::get('/blogs2',[LovinoController::class, 'blogs2']);
Route::get('/blogs3',[LovinoController::class, 'blogs3']);
Route::get('/blogs4',[LovinoController::class, 'blogs4']);
Route::get('/blogs5',[LovinoController::class, 'blogs5']);



// routes for commercial properties
Route::get('/commercial-properties',[LovinoController::class, 'commercial_properties']);
Route::get('/commercial1-properties',[LovinoController::class, 'commercial1']);
Route::get('/commercial2-properties',[LovinoController::class, 'commercial2']);
Route::get('/commercial3-properties',[LovinoController::class, 'commercial3']);
Route::get('/commercial4-properties',[LovinoController::class, 'commercial4']);
Route::get('/commercial5-properties',[LovinoController::class, 'commercial5']);
Route::get('/commercial6-properties',[LovinoController::class, 'commercial6']);








//routes for sale properties
Route::get('/sale-properties',[LovinoController::class, 'sale_properties']);
Route::get('/sale1-properties',[LovinoController::class, 'sale1_properties']);
Route::get('/sale2-properties',[LovinoController::class, 'sale2_properties']);
Route::get('/sale3-properties',[LovinoController::class, 'sale3_properties']);
Route::get('/sale4-properties',[LovinoController::class, 'sale4_properties']);
Route::get('/sale5-properties',[LovinoController::class, 'sale5_properties']);
Route::get('/sale6-properties',[LovinoController::class, 'sale6_properties']);


//routes for apartments properties
Route::get('/apartments-properties',[LovinoController::class, 'apartments_properties']);
Route::get('/apartments1-properties',[LovinoController::class, 'apartments1']);
Route::get('/apartments2-properties',[LovinoController::class, 'apartments2']);
Route::get('/apartments3-properties',[LovinoController::class, 'apartments3']);
Route::get('/apartments4-properties',[LovinoController::class, 'apartments4']);
Route::get('/apartments5-properties',[LovinoController::class, 'apartments5']);
Route::get('/apartments6-properties',[LovinoController::class, 'apartments6']);


//routes for rent 
Route::get('/rent-properties',[LovinoController::class, 'rent_properties']);
Route::get('/rent1-properties',[LovinoController::class, 'rent1']);
Route::get('/rent2-properties',[LovinoController::class, 'rent2']);
Route::get('/rent3-properties',[LovinoController::class, 'rent3']);
Route::get('/rent4-properties',[LovinoController::class, 'rent4']);
Route::get('/rent5-properties',[LovinoController::class, 'rent5']);
Route::get('/rent6-properties',[LovinoController::class, 'rent6']);


//routes for offplan
Route::get('/offplan-properties',[LovinoController::class, 'offplan_properties']);
Route::get('/offplan1-properties',[LovinoController::class, 'offplan1']);
Route::get('/offplan2-properties',[LovinoController::class, 'offplan2']);
Route::get('/offplan3-properties',[LovinoController::class, 'offplan3']);
Route::get('/offplan4-properties',[LovinoController::class, 'offplan4']);
Route::get('/offplan5-properties',[LovinoController::class, 'offplan5']);
Route::get('/offplan6-properties',[LovinoController::class, 'offplan6']);




//Admin Routes

Route::middleware('admin')->prefix('admin')->group(function(){
  Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
});


Route::prefix('admin')->group(function(){
  Route::get('/login', [AdminController::class, 'login'])->name('admin_login');
  Route::post('/login', [AdminController::class, 'login_submit'])->name('admin_login_submit');
  Route::get('/forget-password', [AdminController::class, 'forget_password'])->name('admin_forget_password');
  Route::post('/forget-password', [AdminController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
  Route::get('/logout', [AdminController::class, 'logout'])->name('admin_logout');
});

