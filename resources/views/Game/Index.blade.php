@include('Partials.Header')

	@include('Partials.Settlement.Form')

	@if(empty($settlements) === false)
		<ul class="object-listing">
			@foreach($settlements as $settlement)
				<li>
					<header><a href="{{route('settlement.index', ['settlement' => $settlement->id])}}">{{$settlement->name}}</a></header>
				</li>
			@endforeach
		</ul>
	@endif

@include('Partials.Footer')