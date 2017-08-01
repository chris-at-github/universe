@include('Partials.Header')

	<fieldset>
		<legend>Object</legend>
		@include('Partials.Object.Form', ['object' => $object])
	</fieldset>

@include('Partials.Footer')