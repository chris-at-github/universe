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
	 * @param Request $request
	 * @return void
	 */
	public function store(Settlement $settlement, Request $request) {
		if($settlement->store($request->all()) === true) {
			return response()->redirectToRoute('settlement.index', ['settlement' => $settlement->id]);
		}
	}
}