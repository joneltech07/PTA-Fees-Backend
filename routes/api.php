<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolYearController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\SYFeeController;
use App\Http\Controllers\SYDiscountController;
use App\Http\Controllers\PayedStudentController;
use App\Http\Controllers\PaymentRecordController;
use App\Http\Controllers\StudentController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/school_year', SchoolYearController::class);
Route::apiResource('/fees', FeeController::class);
Route::apiResource('/discount', DiscountController::class);
Route::apiResource('/sy_fee', SYFeeController::class);
Route::apiResource('/sy_discount', SYDiscountController::class);
Route::apiResource('/payed', PayedStudentController::class);
Route::apiResource('/payment-record', PaymentRecordController::class);
Route::apiResource('/student', StudentController::class);