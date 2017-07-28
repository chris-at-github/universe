<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;

class BuildingController extends UniverseController {

	/**
	 * @param Building $building
	 * @return \Illuminate\View\View
	 */
	public function index(Building $building) {
		return view('Building.Index')
			->with('game', [
				'building' => $building
			]);
	}

	/**
	 * @param Building $building
	 * @param Request $request
	 * @return void
	 */
	public function store(Building $building, Request $request) {
		if($building->store($request->all()) === true) {
			return response()->redirectToRoute('building.index', ['building' => $building->id]);
		}
	}
}