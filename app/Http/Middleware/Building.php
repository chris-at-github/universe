<?php
namespace App\Http\Middleware;

class Building {

	/**
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @return mixed
	 */
	public function handle($request, \Closure $next) {
		if($request->has('building') === true) {
			if(($building = app(\App\Repositories\BuildingRepository::class)->find($request->get('building'))) instanceof \App\Models\Building) {
				$request->attributes->replace(['building' => $building]);
			}

		} elseif(array_key_exists('building', $request->all()) === true) {
			$request->attributes->replace(['building' => app(\App\Models\Building::class)]);
		}

		return $next($request);
	}
}