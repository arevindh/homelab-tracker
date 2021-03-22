<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\V1\SpeedtestController;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Settings;
use App\Http\Livewire\Speedtest\Results as SpeedtestResults;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/settings', Settings::class)->name('settings');
    Route::get('/speedtest', SpeedtestResults::class)->name('speedtest.results');
    
    Route::get('/ajax/speedtest/history', [SpeedtestController::class, 'speedtestDatable'])->name('statistics.table');
    Route::get('/ajax/latest', [DashboardController::class, 'getLatest'])->name('chart.latest');
    Route::get('/ajax/speedtest/{id}', [DashboardController::class, 'getSingleResult'])->name('chart.single');
    

    Route::get('/ajax/stats', [DashboardController::class, 'getStatistics'])->name('statistics.latest');
        
});
