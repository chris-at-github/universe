<?php namespace App\Models;

class Settlement extends Universe {

	/**
	 * @var string
	 */
	protected $table = 'settlements';

	/**
	 * @var array
	 */
	protected $fillable = ['name'];
}