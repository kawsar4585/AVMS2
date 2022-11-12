<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MtncoController;
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



Route::get("/",[HomeController::class,"index"]);
Route::get("/redirects",[HomeController::class,"redirects"]);

Route::get("/users",[AdminController::class,"user"]);
Route::get("/adminjeeplist",[AdminController::class,"adminjeeplist"]);
Route::get("/adminjeep1",[AdminController::class,"adminjeep1"]);


Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);


//
Route::get("/adminrequest",[AdminController::class,"adminrequest"]);
Route::post("/adminlist",[MtncoController::class,"uploadrequest"]);
Route::get("/adminrequest",[AdminController::class,"getrequest"]);
Route::post("/editrequest",[AdminController::class,"uploadrequest"]);
Route::get("/adminrequest",[AdminController::class,"show"]);
Route::get("/editrequest/{id}",[AdminController::class,"editrequest"]);
Route::post("/edit/{id}",[AdminController::class,"edit"]);
//



Route::get("/jeeplist",[MtncoController::class,"jeeplist"]);
Route::get("/ton",[MtncoController::class,"ton"]);
Route::get("/pickuplist",[MtncoController::class,"pickuplist"]);
Route::get("/jeep1",[MtncoController::class,"jeep1"]);
Route::get("/addjeep",[MtncoController::class,"addjeep"]);
Route::get("/add3ton",[MtncoController::class,"add3ton"]);
Route::get("/addpickup",[MtncoController::class,"addpickup"]);
Route::get("/addvehicle",[MtncoController::class,"addvehicle"]);


//requestlist
Route::get("/requestlist",[MtncoController::class,"requestlist"]);
Route::post("/requestlist",[MtncoController::class,"upload"]);
Route::get("/addrequest",[MtncoController::class,"getrequest"]);
Route::post("/addrequest",[MtncoController::class,"upload"]);
Route::get("/requestlist",[MtncoController::class,"show"]);
//

//driver
Route::get("/drivers",[MtncoController::class,"drivers"]);
Route::post("/drivers",[MtncoController::class,"uploaddriver"]);
Route::get("/adddriver",[MtncoController::class,"getdriver"]);
Route::post("/adddriver",[MtncoController::class,"uploaddriver"]);
Route::get("/drivers",[MtncoController::class,"showdriver"]);
//

//jeeplist
Route::get("/jeeplist",[MtncoController::class,"jeeplist"]);
Route::post("/jeeplist",[MtncoController::class,"uploadjeep"]);
Route::get("/addjeep",[MtncoController::class,"getjeep"]);
Route::post("/addjeep",[MtncoController::class,"uploadjeep"]);
Route::get("/jeeplist",[MtncoController::class,"showjeep"]);
//

//infolist
Route::get("/infolist",[MtncoController::class,"infolist"]);
Route::post("/infolist",[MtncoController::class,"uploadinfo"]);
Route::get("/addinfo",[MtncoController::class,"getinfo"]);
Route::post("/addinfo",[MtncoController::class,"uploadinfo"]);
Route::get("/jeep1",[MtncoController::class,"showinfo"]);
//

//tonlist
Route::get("/tonlist",[MtncoController::class,"tonlist"]);
Route::post("/tonlist",[MtncoController::class,"uploadton"]);
Route::get("/add3ton",[MtncoController::class,"getton"]);
Route::post("/add3ton",[MtncoController::class,"uploadton"]);
Route::get("/tonlist",[MtncoController::class,"showton"]);
//

//pikuplist
Route::get("/pickuplist",[MtncoController::class,"pickuplist"]);
Route::post("/pickuplist",[MtncoController::class,"uploadpickup"]);
Route::get("/addpickup",[MtncoController::class,"getpickup"]);
Route::post("/addpickup",[MtncoController::class,"uploadpickup"]);
Route::get("/pickuplist",[MtncoController::class,"showpickup"]);
//

Route::get("/addinfo",[MtncoController::class,"addinfo"]);

Route::get("/downloadvdra",[MtncoController::class,"downloadvdra"]);


Route::get("/search",[MtncoController::class,"search"]);

//editinfo
Route::get("/editinfo/{id}",[MtncoController::class,"editinfo"]);
Route::post("/edit/{id}",[MtncoController::class,"edit"]);
//


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});