<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

Route::get('/', [ListingController::class, 'index']);

// single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//  show create form
Route::get('/listings/create', [ListingController::class, 'create']);


// Common resource routes:
//  index - Show all listings
//  show - show single listing
//  create - show form to create new listing
//  store - Store new listing
//  edit - show form to edit listing
//  update - Update listing
//  destroy - Delete listing
