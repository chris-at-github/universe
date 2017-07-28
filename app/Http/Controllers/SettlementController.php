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

//		dd(app(\App\Models\GameBuilding::class)->find('f553965e-08b0-43ef-a7f8-e07a421bcd88')->settlement());
		foreach($settlement->buildings as $building) {
			dd($building);
		}

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

//		dd(\request());

//		/* @var \App\Models\Settlement $settlement */
//		$settlement = app(\App\Models\Settlement::class);
//		$settlement->name = 'S-' . time();

//		$settlement->save();
	}
}