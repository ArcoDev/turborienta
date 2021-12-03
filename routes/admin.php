<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

//Rutas, se añade vacia ya que en el provider se agrego el prefijo (admin)
Route::get('', [HomeController::class, 'index']);