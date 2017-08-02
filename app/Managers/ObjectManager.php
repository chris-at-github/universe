<?php

namespace App\Managers;

class ObjectManager {

	/**
	 * @return array
	 */
	public function getTypes() {
		return collect(config('universe.object.types'));
	}
}