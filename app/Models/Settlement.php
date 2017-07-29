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

	/**
	 * Get the comments for the blog post.
	 */
	public function buildings() {
		return $this->hasMany(\App\Models\GameBuilding::class, 'foreign');
	}
}