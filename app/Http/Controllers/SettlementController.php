<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settlement;
use App\Models\Building;

class SettlementController extends UniverseController {

	/**
	 * @param Settlement $settlement
	 * @return \Illuminate\View\View
	 */
	public function index(Settlement $settlement) {
		return view('Settlement.Index')
			->with('game', [
				'settlement' => $settlement,
				'buildings' => app(\App\Repositories\BuildingRepository::class)->findAll()
			]);
	}

	/**
	 * @param Settlement $settlement
	 * @param Request $request
	 * @return \Illuminate\Http\Response|null
	 */
	public function store(Settlement $settlement, Request $request) {
		if($settlement->store($request->all()) === true) {
			return response()->redirectToRoute('settlement.index', ['settlement' => $settlement->id]);
		}

		return null;
	}

	/**
	 * @param Settlement $settlement
	 * @param Building $building
	 * @param Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function createBuilding(Settlement $settlement, Building $building, Request $request) {
		dd($settlement);
		dd($building);
//		if($settlement->store($request->all()) === true) {
//			return response()->redirectToRoute('settlement.index', ['settlement' => $settlement->id]);
//		}
	}
}