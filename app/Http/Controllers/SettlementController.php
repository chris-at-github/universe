<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settlement;

class SettlementController extends UniverseController {

	/**
	 * @param Settlement $settlement
	 * @return \Illuminate\View\View
	 */
	public function index(Settlement $settlement) {
		return view('Settlement.Index')
			->with('game', [
				'settlement' => $settlement
			]);
	}

	/**
	 * @param Settlement $settlement
	 * @return void
	 */
	public function store(Settlement $settlement) {
		dd($settlement);

//		dd(\request());

//		/* @var \App\Models\Settlement $settlement */
//		$settlement = app(\App\Models\Settlement::class);
//		$settlement->name = 'S-' . time();

//		$settlement->save();
	}
}