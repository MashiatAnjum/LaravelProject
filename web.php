<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\RoomController;
use App\Models\Building;

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

Route::get('/',[homeController::class,"home"]);
Route::get('/redirects',[homeController::class,"redirects"]);

///#####################Route for Dorm Module (Building)##########################
Route::get('/building',[BuildingController::class,"indexFunction"])->name('building.indexFunction');
Route::get('/building/create',[BuildingController::class,"createbuildingFunction"])->name('building.buildingroomFunction');
Route::post('/building',[BuildingController::class,"storebuildingFunction"])->name('building.storebuildingFunction');
Route::get('/building/{building}/edit',[BuildingController::class,"editbuildingFunction"])->name('building.editbuildingFunction');
Route::put('/building/{building}/edit',[BuildingController::class,"updatebuildingFunction"])->name('building.updatbuildingFunction');
Route::delete('/building/{building}/delete',[BuildingController::class,"deletebuildingFunction"])->name('building.deletbuildingFunction');
///######################### Route for Dorm Module (floor)#########################





///######################### Route for Dorm Module (Room)#########################

Route::get('/room',[RoomController::class,"roomHomeFunction"])->name('room.roomHomeFunction');
Route::get('/room/create',[RoomController::class,"createroomFunction"])->name('room.createroomFunction');
Route::post('/room',[RoomController::class,"storeroomFunction"])->name('room.storeroomFunction');
Route::get('/room/{room}/edit',[RoomController::class,"editroomFunction"])->name('room.editroomFunctio');
Route::put('/room/{room}/edit',[RoomController::class,"updateroomFunction"])->name('room.updateroomFunctio');
Route::delete('/room/{room}/delete',[RoomController::class,"deleteroomFunction"])->name('room.deleteroomFunction');






//////////////////////////////////////////
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
