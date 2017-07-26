@include('Partials.Header')

	<div id="universe">
		<uv-settlement />
	</div>

	<hr>

	<form action="{{route('settlement.store')}}" method="get">
		<button type="submit">Speichern</button>
	</form>

@include('Partials.Footer')