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
				'settlement' => $settlement->toArray()
			]);
	}

	/**
	 * @param Request $request
	 * @return void
	 */
	public function store(Request $request) {

		/* @var \App\Models\Settlement $settlement */
		$settlement = app(\App\Models\Settlement::class);
		$settlement->name = 'S-' . time();

		$settlement->save();
	}
}