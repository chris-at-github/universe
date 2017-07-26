<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettlementController extends UniverseController {

	/**
	 * @return \Illuminate\View\View
	 */
	public function index() {
		return view('Settlement.Index')
			->with('game', [
//				'settlement' => app(\App\Repositories\SettlementRepository::class)->findBy(['uuid' => '58e729ec-3ecb-4ba9-8ad5-7d1a6bfac8e1'])->toArray()
			]);
	}

	/**
	 * @param Request $request
	 * @return void
	 */
	public function store(Request $request) {
		$name = 'S-' . time();

		dd($name);
	}
}