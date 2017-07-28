<?php namespace App\Models;

class GameBuilding extends Universe {

	/**
	 * @var string
	 */
	protected $table = 'game_buildings';

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function settlement() {
		return $this->belongsTo(\App\Models\Settlement::class);
	}
}