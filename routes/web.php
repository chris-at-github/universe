<?php

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
Route::get('/', array(
	'as' => 'game.index',
	'uses' => 'GameController@index'
));

// Settlement
Route::get('/settlement/{settlement}', array(
	'as' => 'settlement.index',
	'uses' => 'SettlementController@index'
));

Route::post('/settlement/store', function(\Illuminate\Http\Request $request) {
	return app(\App\Http\Controllers\SettlementController::class)->store($request->get('settlement'), $request);
})
	->name('settlement.store')
	->middleware('settlement');

// Building
Route::get('/building/{building}', array(
	'as' => 'building.index',
	'uses' => 'BuildingController@index'
));

Route::post('/building/store', function(\Illuminate\Http\Request $request) {
	return app(\App\Http\Controllers\BuildingController::class)->store($request->get('building'), $request);
})
	->name('building.store')
	->middleware('building');