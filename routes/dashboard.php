<?php

use App\Http\Controllers\frontend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth','verified']], function () {
    Route::get('/all/invoices', [DashboardController::class, 'allInvoice'])->name('all.invoice');
});
Route::delete('/delete/invoices/{id}', [DashboardController::class, 'destroy'])->name('delete.invoice');
