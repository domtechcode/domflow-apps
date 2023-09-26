<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Livewire\Authentication\LoginIndex;
use App\Livewire\Dashboard\Index\IndexDashboardSalesOverview;

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
    Route::post('/logout', [LoginIndex::class, 'logout'])->name('logout');
  });

  Route::middleware(['auth', 'role:Admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
      return 'Admin';
    })->name('admin.dashboard');
  });

// Route::get('/', IndexDashboardSalesOverview::class);

// Route::get('/test', [TestController::class, 'test']);
