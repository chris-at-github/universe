@include('Partials.Header')

	<form action="{{route('settlement.store')}}" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<button type="submit">Create</button>
	</form>

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