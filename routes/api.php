<?php

use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum', 'verified', 'can:Admin'])->group(function () {
    Route::prefix('admin')->group(function () {

        // Template routes
        Route::get('/templates', [TemplateController::class, 'list'])->name('templates.list');
        Route::post('/templates', [TemplateController::class, 'save'])->name('templates.save');
        Route::put('/templates', [TemplateController::class, 'upload'])->name('templates.upload');
        Route::patch('/templates', [TemplateController::class, 'visible'])->name('templates.visible');
        Route::delete('/templates/{id}', [TemplateController::class, 'delete'])->name('templates.delete');
    });
});
