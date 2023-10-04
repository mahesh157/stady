<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\BlockController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\CourseController;
use App\Http\Controllers\frontend\EvaintController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;

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
Route::get('/home',[HomeController::class,'home'])->name('frontend.home');
Route::get('/about',[AboutController::class,'about'])->name('frontend.about');
Route::get('/block',[BlockController::class,'block'])->name('frontend.block');
Route::get('/contact',[ContactController::class,'contact'])->name('frontend.contact');
Route::get('/course',[CourseController::class,'course'])->name('frontend.course');
Route::get('/Evaint',[EvaintController::class,'Evaint'])->name('frontend.Evaint');

// backend apis popular Courses Api
Route::get('/Popular_Courses',[HomeController::class,'PopularCourses'])->name('backend.Popular_Courses');
Route::POST('/Course_store', [HomeController::class, 'Course_store'])->name('backend.Course_store');
Route::get('/PopularShow_course',[HomeController::class,'PopularShowCourses'])->name('backend.PopularShow_course');

Route::get('/popular/delete/{id}', [HomeController::class, 'delete'])->name('popular.delete');
Route::get('/popular/edit/{id}', [HomeController::class, 'edit'])->name('popular.edit');
Route::post('/popular/update/{id}', [HomeController::class, 'update'])->name('popular.update');

//popular News Api
Route::get('/latestnews',[HomeController::class,'latestnews'])->name('backend.latestnews');
Route::post('/news_store',[HomeController::class,'newsStore'])->name('news.store');
Route::get('/latestnews_show',[HomeController::class,'latestnewsshow'])->name('backend.latestnewsshow');

Route::get('/latestnews/delete/{id}', [HomeController::class, 'latestdelete'])->name('latestnews.delete');

Route::get('/latestnews/edit/{id}', [HomeController::class, 'latestedit'])->name('latestnews.edit');
Route::post('/latestnews/update/{id}', [HomeController::class, 'latestupdate'])->name('latestnews.update');

//upcoming Events Api
Route::get('/Event',[HomeController::class,'event'])->name('backend.upcomingevent');
Route::post('/Event_store',[HomeController::class,'EventStore'])->name('event.store');
Route::get('/upcomingevent_show',[HomeController::class,'upcomingshow'])->name('backend.upcomingeventshow');

Route::get('/upcomingevent/delete/{id}',[HomeController::class,'eventdelete'])->name('event.delete');
Route::get('/upcomingevent/edit/{id}',[HomeController::class,'eventedit'])->name('event.edit');
Route::post('/upcomingevent/update/{id}', [HomeController::class, 'eventupdate'])->name('event.update');







