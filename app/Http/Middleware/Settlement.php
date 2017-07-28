<?php
namespace App\Http\Middleware;

class Settlement {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @return mixed
	 */
	public function handle($request, \Closure $next) {
		if($request->has('settlement') === true) {
			if(($settlement = app(\App\Repositories\SettlementRepository::class)->find($request->get('settlement'))) instanceof \App\Models\Settlement) {
				$request->attributes->replace(['settlement' => $settlement]);
			}
		}

		return $next($request);
	}
}