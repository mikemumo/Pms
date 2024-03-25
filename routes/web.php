<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\ProjectSummariesController;
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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('projects', 'ProjectsController' );
    Route::resource('students', 'StudentsController');
    Route::resource('tasks', 'TasksController' );
    Route::resource('users', 'UsersController' );
    Route::resource('schedules', 'SchedulesController');
    Route::get('/tasks/{task_id}', 'TasksController@showTask');
    Route::get('/reviews', [ReviewsController::class, 'index'])->name('reviews.index');
    Route::get('/reviews/{id}', [ReviewsController::class, 'show'])->name('reviews.show');
    Route::resource('students', 'StudentsController');
    Route::post('/tasks', 'TasksController@store')->name('tasks.store');
    Route::post('/tasks/{id}/submit-review', 'ReviewsController@submitReview')->name('tasks.submit_review');
    Route::resource('dashboards', 'DashboardsController' );
    Route::get('/schedules/{project}', 'SchedulesController@show')->name('schedules.show');
    Route::get('/projectsummaries', [ProjectSummariesController::class, 'index'])->name('projectsummaries.index');
    Route::get('/projectsummaries/{id}', [ProjectSummariesController::class, 'show'])->name('projectsummaries.show');

});




