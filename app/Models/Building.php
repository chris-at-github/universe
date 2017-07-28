<?php namespace App\Models;

class Building extends Universe {

	/**
	 * @var string
	 */
	protected $table = 'buildings';

	/**
	 * @var array
	 */
	protected $fillable = ['name'];
}