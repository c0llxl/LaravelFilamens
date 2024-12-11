<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});

// Report Routes
Route::get('/dosen/report/pdf', [ReportController::class, 'dosenPdf'])->name('dosen.report.pdf');
Route::get('/dosen/report/excel', [ReportController::class, 'dosenExcel'])->name('dosen.report.excel');
Route::get('/makul/report/pdf', [ReportController::class, 'makulPdf'])->name('makul.report.pdf');
Route::get('/makul/report/excel', [ReportController::class, 'makulExcel'])->name('makul.report.excel');
