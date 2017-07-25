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

Route::get('/', function () {
	return view('Settlement.Index')
		->with('game', [
			'settlement' => app(\App\Repositories\SettlementRepository::class)->findBy(['uuid' => '58e729ec-3ecb-4ba9-8ad5-7d1a6bfac8e1'])->toArray()
		]);
});

Route::get('/settlement/{uuid}', function ($uuid) {
	return response()->json(
		app(\App\Repositories\SettlementRepository::class)->findBy(['uuid' => $uuid])->toArray()
	);
});