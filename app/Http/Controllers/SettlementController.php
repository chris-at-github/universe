<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettlementController extends UniverseController {

	/**
	 * @param string $id
	 * @return \Illuminate\View\View
	 */
	public function index($id) {
		dd($id);
//		return view('Settlement.Index')
//			->with('game', [
////				'settlement' => app(\App\Repositories\SettlementRepository::class)->findBy(['uuid' => '58e729ec-3ecb-4ba9-8ad5-7d1a6bfac8e1'])->toArray()
//			]);
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