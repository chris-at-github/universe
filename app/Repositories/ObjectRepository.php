<?php

namespace App\Repositories;

class ObjectRepository extends UniverseRepository {

	/**
	 * @return \App\Repositories\ObjectRepository
	 */
	public function __construct() {
		parent::__construct(app(\App\Models\Object::class));
	}
}