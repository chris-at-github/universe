@include('Partials.Header')

<fieldset>
	<legend>Settlement</legend>

	@include('Partials.Settlement.Form', ['settlement' => $settlement])

	@if(empty($settlements) === false)
		<ul class="object-listing">
			@foreach($settlements as $settlement)
				<li>
					<header><a href="{{route('settlement.index', ['settlement' => $settlement->id])}}">{{$settlement->name}}</a></header>
				</li>
			@endforeach
		</ul>
	@endif
</fieldset>

<fieldset>
	<legend>Building</legend>

	@include('Partials.Building.Form', ['building' => $building])

	@if(empty($buildings) === false)
		<ul class="object-listing">
			@foreach($buildings as $building)
				<li>
					<header><a href="{{route('building.index', ['building' => $building->id])}}">{{$building->name}}</a>
					</header>
				</li>
			@endforeach
		</ul>
	@endif
</fieldset>

@include('Partials.Footer')