@include('Partials.Header')

<fieldset>
	<legend>Settlement</legend>

	@include('Partials.Settlement.Form', ['settlement' => $settlement])

	@if(empty($settlements) === false)
		<ul class="object-listing">
			@foreach($settlements as $settlement)
				<li>
					<header><a href="{{route('settlement.index', ['settlement' => $settlement->id])}}">{{$settlement->name}}</a>
					</header>
				</li>
			@endforeach
		</ul>
	@endif
</fieldset>

@include('Partials.Footer')