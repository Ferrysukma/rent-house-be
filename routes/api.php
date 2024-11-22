<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return response()->json([
        'success'   => true,
        'message'   => 'Data User',
        'data'      => $request->user() 
    ]);
});

Route::resource('listing', ListingController::class)->only(['index', 'show']);

require __DIR__.'/auth.php';
