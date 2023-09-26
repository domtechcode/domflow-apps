<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\LogoutController;
use App\Livewire\Authentication\LoginIndex;
use App\Livewire\Dashboard\Index\IndexDashboardSalesOverview;
use App\Livewire\Dashboard\Index\IndexDashboardPurchaseOverview;
use App\Livewire\Dashboard\Index\IndexDashboardInventoryOverview;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function () {
    Route::get('/', LoginIndex::class)->name('login');
  });

  Route::middleware(['auth', 'role:Admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard-sales', IndexDashboardSalesOverview::class)->name('dashboard-sales');
    Route::get('/dashboard-purchase', IndexDashboardPurchaseOverview::class)->name('dashboard-purchase');
    Route::get('/dashboard-inventory', IndexDashboardInventoryOverview::class)->name('dashboard-inventory');
  });

// Route::get('/', IndexDashboardSalesOverview::class);

// Route::get('/test', [TestController::class, 'test']);
