<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeambertypeController;
use App\Http\Controllers\EquipmentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/header', function () {
    return view('admin/header');
});
Route::get('/navbar', function () {
    return view('admin/navbar');
});
Route::get('/sidebar', function () {
    return view('admin/sidebar');
});
Route::get('/footer', function () {
    return view('admin/footer');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
// Meamber Type Route Function {
Route::get('/meamber_type', [MeambertypeController::class, 'meamber_type'])-> name('meamber_type');
Route::post('/meamber_type',[MeambertypeController::class, 'store'])-> name('store');


//}

//  Equipment Route function{

Route::get('/equipment' , [EquipmentController::class, 'equipment'])-> name('equipment');
Route::get('/equipment/create_equipment', [EquipmentController::class, 'create_equipment'])->name('admin.create_equipment');
Route::post('/equipment', [EquipmentController:: class, 'store_equipment'])->name('store_equipment');
Route::get('/equipment/{equipment}/edit_equipment', [EquipmentController:: class, 'edit'])->name('equipment.edit');
Route::put('/equipment/{equipment}/update', [EquipmentController:: class, 'update'])->name('equipment.update');
Route::get('/equipment/{equipment}/delete_equipment', [EquipmentController:: class, 'delete_equipment'])->name('delete_equipment');
Route::delete('/equipment/{equipment}/delete', [EquipmentController:: class, 'delete'])->name('equipment.delete');

// }

Route::get('meamber_detail', function (){
    return view('meamber_detail');
});

Route::get('/meamber_list', function () {
    return view('meamber_list');
});

Route::get('/guest_account', function (){
    return view('guest_account');
});

Route::get('create_meamber', function () {
    return view('admin/create_meamber');
});