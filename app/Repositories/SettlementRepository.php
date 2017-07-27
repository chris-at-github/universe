<?php

namespace App\Repositories;

class SettlementRepository extends UniverseRepository {

	/**
	 * constructor for GameRepository
	 *
	 */
	public function __construct() {
		parent::__construct(app(\App\Models\Settlement::class));
	}
}