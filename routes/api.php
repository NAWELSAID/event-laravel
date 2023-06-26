<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\eventController;
use App\Http\Controllers\publicController;
use App\Http\Controllers\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
     //Events
/* Route::get('dataallevent', [eventController::class, 'Allevent']);
Route::get('datalastevent', [eventController::class, 'Lastevent']);
Route::get('dataeventbycategory', [eventController::class, 'Eventbycategory']); */
/* Route::middleware('dataevent', [eventController::class, 'Event']); */
Route::get('dataslide', [publicController::class, 'slide']);
Route::get('datacoordinate', [publicController::class, 'coordinate']);
Route::get('datanew', [publicController::class, 'new']);
Route::get('datalastevent', [eventController::class, 'Lastevent']);
Route::get('datacategorievent', [eventController::class, 'categorievent']);

Route::post('datacontact', [publicController::class, 'contact']);
Route::post('datausersignup', [userController::class, 'signup']);
Route::post('datausersignin', [userController::class, 'signin']);

Route::get('datauserdetails', [UserController::class, 'userDetails']);
/* Route::error(function(){
    return response()->json([
        'message' => 'Email already in use'], 403);
});
 */
