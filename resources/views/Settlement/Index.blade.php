@include('Partials.Header')

	{{--<div id="universe">--}}
		{{--<uv-settlement />--}}
	{{--</div>--}}

	{{--<hr>--}}
<fieldset>
	<legend>Settlement</legend>
	@include('Partials.Settlement.Form', ['settlement' => $game['settlement']])
</fieldset>

<fieldset>
	<legend>Create building</legend>
	@include('Partials.Settlement.CreateBuilding', ['settlement' => $game['settlement'], 'buildings' => $game['buildings']])
</fieldset>

@include('Partials.Footer')