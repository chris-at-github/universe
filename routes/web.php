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

Route::get('/settlement/{settlement}', array(
	'as' => 'settlement.index',
	'uses' => 'SettlementController@index'
));

Route::post('/settlement/store{settlement?}', array(
	'as' => 'settlement.store',
	'uses' => 'SettlementController@store'
))->middleware('settlement');

//Route::get('/settlement/{uuid}', function ($uuid) {
//	return response()->json(
//		app(\App\Repositories\SettlementRepository::class)->findBy(['uuid' => $uuid])->toArray()
//	);
//});

//Route::post('/settlement/store', function(\Illuminate\Http\Request $request) {
//	dd($request->input('name'));
//});