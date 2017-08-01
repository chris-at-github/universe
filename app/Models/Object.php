<?php namespace App\Models;

class Object extends Universe {

	/**
	 * @var string
	 */
	protected $table = 'objects';

	/**
	 * @var array
	 */
	protected $fillable = ['name'];
}