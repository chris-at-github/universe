<?php

namespace App\Repositories;

class BuildingRepository extends UniverseRepository {
	public function __construct() {
		parent::__construct(app(\App\Models\Building::class));
	}
}