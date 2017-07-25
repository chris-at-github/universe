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

	$rep = app(\App\Repositories\SettlementRepository::class);
	dd($rep->findBy(['uuid' => '58e729ec-3ecb-4ba9-8ad5-7d1a6bfac8e1']));

	return view('Settlement.Index');
});
