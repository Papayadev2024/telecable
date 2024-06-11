<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\LandingSettingController;
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
        Route::get('/templates/{id}', [TemplateController::class, 'get'])->name('templates.get');
        Route::get('/templates', [TemplateController::class, 'list'])->name('templates.list');
        Route::post('/templates', [TemplateController::class, 'save'])->name('templates.save');
        Route::put('/templates', [TemplateController::class, 'upload'])->name('templates.upload');
        Route::patch('/templates', [TemplateController::class, 'visible'])->name('templates.visible');
        Route::patch('/templates/data_type', [TemplateController::class, 'regulate'])->name('templates.regulate');
        Route::delete('/templates/{id}', [TemplateController::class, 'delete'])->name('templates.delete');

        // Template routes
        Route::get('/landings/{id}', [LandingController::class, 'get'])->name('landings.get');
        Route::get('/landings', [LandingController::class, 'list'])->name('landings.list');
        Route::post('/landings', [LandingController::class, 'save'])->name('landings.save');
        Route::put('/landings', [LandingController::class, 'upload'])->name('landings.upload');
        Route::patch('/landings', [LandingController::class, 'visible'])->name('landings.visible');
        Route::delete('/landings/{id}', [LandingController::class, 'delete'])->name('landings.delete');

        Route::post('/landing-settings/massive', [LandingSettingController::class, 'massive'])->name('landingSettings.massive');
        Route::patch('/landing-settings/{id}', [LandingSettingController::class, 'regulate'])->name('landingSettings.regulate');
        Route::patch('/landing-settings', [LandingSettingController::class, 'update'])->name('landingSettings.update');
        Route::post('/landing-settings', [LandingSettingController::class, 'file'])->name('landingSettings.file');
    });
});

Route::get('/landing-settings/file/download', [LandingSettingController::class, 'getFile'])->name('landingSettings.getFile');
