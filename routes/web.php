<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectAdminController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('base');
})->name('homepage');

require __DIR__ . '/auth.php';

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.project');
Route::get('/projects/add', [ProjectController::class, 'add'])->name('project.add');
Route::get('project/{project}', [ProjectController::class, 'show'])->name('project.show');
// Route::get('project/{project}', [ProjectController::class, 'create'])->name('project.create');

Route::prefix('/dashboard')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::get(
            '/',
            [ProjectAdminController::class, 'index'] // load the index function of the ProjectAdminController, we have access to the projects
        )->name('dashboard');
        Route::get(
            'create',
            [ProjectAdminController::class, 'create'] 
        )->name('dashboard/create');
        Route::post(
            'store',
            [ProjectAdminController::class, 'store'] 
        )->name('dashboard/store');

        Route::resources(
            [
                'project' => ProjectAdminController::class,
            ]
        );

        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });
    });
