<?php
namespace App\Http\Middleware;

class Object {

	/**
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @return mixed
	 */
	public function handle($request, \Closure $next) {
		if($request->has('object') === true) {
			if(($object = app(\App\Repositories\ObjectRepository::class)->find($request->get('object'))) instanceof \App\Models\Object) {
				$request->attributes->add(['object' => $object]);
			}

		} elseif(array_key_exists('object', $request->all()) === true) {
			$request->attributes->add(['object' => app(\App\Models\Object::class)]);
		}

		return $next($request);
	}
}