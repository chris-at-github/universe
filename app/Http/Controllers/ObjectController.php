<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjectController extends UniverseController {

	/**
	 * @param \App\Models\Object $object
	 * @return \Illuminate\View\View
	 */
	public function index(\App\Models\Object $object) {
		return view('Object.Index')
			->with('game', [])
			->with('object', $object)
			->with('types', app(\App\Managers\ObjectManager::class)->getTypes());
	}

	/**
	 * @param \App\Models\Object $object
	 * @param Request $request
	 * @return void
	 */
	public function store(\App\Models\Object $object, Request $request) {
		if($object->store($request->all()) === true) {
			return response()->redirectToRoute('object.index', ['object' => $object->id]);
		}
	}
}