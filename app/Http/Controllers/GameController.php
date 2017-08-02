<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 27.07.2017
 * Time: 06:27
 */

namespace App\Http\Controllers;

class GameController extends UniverseController {

	public function index() {
		return view('Game.Index')
			->with('game', [])
			->with('settlement', app(\App\Models\Settlement::class))
			->with('building', app(\App\Models\Building::class))
			->with('object', app(\App\Models\Object::class))
			->with('settlements', app(\App\Repositories\SettlementRepository::class)->findAll())
			->with('buildings', app(\App\Repositories\BuildingRepository::class)->findAll())
			->with('objects', app(\App\Repositories\ObjectRepository::class)->findAll());
	}
}