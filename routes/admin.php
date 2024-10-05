<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\BrandmodelController as AdminBrandmodelController;
use Illuminate\Support\Facades\Route;


Route::get('',[AdminController::class,'index']);
Route::resource('brands',BrandController::class)->names('admin.brands');

Route::resource('models',AdminBrandmodelController::class)->names('admin.models');
?>