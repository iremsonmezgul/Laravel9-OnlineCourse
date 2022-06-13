<?php

use App\Http\Controllers\AdminPanel\AdminCourseController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|  Test Comment
*/
// 1- Do something in route
Route::get('/hello', function () {
    return 'Hello World';
});

// 2- Call view in route
Route::get('/welcome', function () {
    return view('welcome');
});

// ********************** HOME PAGE ROUTES ***********************
Route::get("/",[HomeController::class,"index"])->name("home");
Route::get("/course/{id}",[HomeController::class,"course"])->name("course");
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/courses',[HomeController::class,'courses'])->name('courses');
Route::get('/references',[HomeController::class,'references'])->name('references');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post("/storemessage",[HomeController::class,"storemessage"])->name("storemessage");
Route::get("/faq",[HomeController::class,"faq"])->name("faq");
Route::post("/storecomment",[HomeController::class,"storecomment"])->name("storecomment");
Route::view("/loginuser",'home.login')->name("loginuser");
Route::view("/registeruser",'home.register')->name("registeruser");
Route::get("/logoutuser",[HomeController::class,"logout"])->name("logoutuser");
Route::view("/loginadmin",'admin.login')->name('loginadmin');
Route::post("/loginadmincheck",[HomeController::class,"loginadmincheck"])->name("loginadmincheck");



// 4- Route-> Controller->View
Route::get("/test",[HomeController::class,"test"])->name("test");

// 5- Route with parameters
Route::get('/param/{id}/{number}',[HomeController::class,"param"])->name("param");
// 6- Route with post
Route::post('/save',[HomeController::class,'save'])->name('save');

Route::get('/course/{id}',[HomeController::class,'course'])->name('course');
Route::get('/categorycourses/{id}/{slug}',[HomeController::class,'categorycourses'])->name('categorycourses');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ****************** USER AUTH CONTROL *********************
Route::middleware(['auth'])->group(function(){

    // ****************** USER ROUTES *********************
    Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function (){
        Route::get("/", "index")->name("index");

    });

// ****************** ADMIN PANEL ROUTES *********************
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function (){
    Route::get("/", [AdminHomeController::class, "index"])->name("index");
    // ****************** General Routes ROUTES *********************
    Route::get("/settings", [AdminHomeController::class, "settings"])->name("settings");
    Route::post("/settings", [AdminHomeController::class, "settingsUpdate"])->name("settings.update");

    // ****************** ADMIN CATEGORY ROUTES *********************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get("/", "index")->name("index");
        Route::get("/create", "create")->name("create");
        Route::post("/store", "store")->name("store");
        Route::get("/edit/{id}", "edit")->name("edit");
        Route::post("/update/{id}", "update")->name("update");
        Route::get("/destroy/{id}", "destroy")->name("destroy");
        Route::get("/show/{id}", "show")->name("show");
    });

    // ****************** ADMIN COURSE ROUTES *********************
    Route::prefix('/course')->name('course.')->controller(AdminCourseController::class)->group(function () {
        Route::get("/", "index")->name("index");
        Route::get("/create", "create")->name("create");
        Route::post("/store", "store")->name("store");
        Route::get("/edit/{id}", "edit")->name("edit");
        Route::post("/update/{id}", "update")->name("update");
        Route::get("/destroy/{id}", "destroy")->name("destroy");
        Route::get("/show/{id}", "show")->name("show");
    });

    // ****************** ADMIN COURSE IMAGE GALLERY ROUTES *********************
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get("/{cid}", "index")->name("index");
        Route::post("/store/{cid}", "store")->name("store");
        Route::post("/update/{cid}/{id}", "update")->name("update");
        Route::get("/destroy/{cid}/{id}", "destroy")->name("destroy");
    });
});
    // ****************** ADMIN MESSAGE ROUTES *********************
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get("/", "index")->name("index");
        Route::get("/show/{id}", "show")->name("show");
        Route::post("/update/{id}", "update")->name("update");
        Route::get("/destroy/{id}", "destroy")->name("destroy");
    });
    // ****************** ADMIN FAQ COURSE ROUTES *********************
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get("/", 'index')->name('index');
        Route::get('/create',  'create')->name('create');
        Route::post('/store',  'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');

    });

});
