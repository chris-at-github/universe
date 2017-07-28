<?php
namespace App\Http\Middleware;

class Settlement {

	/**
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @return mixed
	 */
	public function handle($request, \Closure $next) {
		if($request->has('settlement') === true) {
			if(($settlement = app(\App\Repositories\SettlementRepository::class)->find($request->get('settlement'))) instanceof \App\Models\Settlement) {
				$request->attributes->replace(['settlement' => $settlement]);
			}

		} elseif(array_key_exists('settlement', $request->all()) === true) {
			$request->attributes->replace(['settlement' => app(\App\Models\Settlement::class)]);
		}

		return $next($request);
	}
}