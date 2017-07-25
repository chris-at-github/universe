<?php

namespace App\Repositories;

class SettlementRepository extends UniverseRepository {

	/**
	 * constructor for GameRepository
	 *
	 */
	public function __construct() {
		parent::__construct(app(\App\Models\Settlement::class));

		$settlement = app(\App\Models\Settlement::class);
		$settlement->fill([
			'uuid' => '58e729ec-3ecb-4ba9-8ad5-7d1a6bfac8e1',
			'name' => 'Settlement S1',
		]);
		$this->fixtures->put('58e729ec-3ecb-4ba9-8ad5-7d1a6bfac8e1', $settlement);
	}
}