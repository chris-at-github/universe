<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Universe extends Model {

	use Traits\Uuid;

	/**
	 * Indicates if the IDs are auto-incrementing.
	 *
	 * @var bool
	 */
	public $incrementing = false;

	/**
	 * rules for validation before saving the model
	 *
	 * @var array
	 */
	protected $rules = array();

	/**
	 * errors from the validation result
	 *
	 * @var array|boolean
	 */
	protected $errors = false;

	/**
	 * properties which can not fill over mass assignment
	 *
	 * @var array $guarded
	 */
	protected $guarded = array();

	/**
	 * Create a new Eloquent model instance.
	 *
	 * @param  array $attributes
	 * @return void
	 */
	public function __construct(array $attributes = []) {
		parent::__construct($attributes);
	}

	/**
	 * store an mass assignment array to the model properties. if validator rules are defined, the
	 * properties will be checked before saving them to database
	 *
	 * @param array $properties
	 * @return boolean
	 */
	public function store($properties = []) {
//		if(empty($this->rules) === false) {
//			$validator = \Validator::make($properties, $this->rules);
//
//			if($validator->fails() === true) {
//				$this->errors = $validator->messages();
//
//				return false;
//			}
//		}

		return $this
			->fill($properties)
			->save();
	}

	/**
	 * return the validation errors
	 *
	 * @return \Illuminate\Support\MessageBag
	 */
	public function errors() {
		return $this->errors;
	}
}