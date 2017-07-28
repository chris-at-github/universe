<form action="{{route('settlement.store')}}" method="post">
	<div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		@if(isset($settlement) === true)
			<input type="hidden" name="settlement" value="{{$settlement->id}}">
		@endif
	</div>

	<div>
		<label for="name">Name:</label>
		<input type="text" name="name" value="@if(isset($settlement) === true){{$settlement->name}}@endif">
	</div>

	<button type="submit">Speichern</button>
</form>