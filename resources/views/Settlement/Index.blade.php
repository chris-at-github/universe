@include('Partials.Header')

	{{--<div id="universe">--}}
		{{--<uv-settlement />--}}
	{{--</div>--}}

	{{--<hr>--}}

	@include('Partials.Settlement.Form', ['settlement' => $game['settlement']])

@include('Partials.Footer')