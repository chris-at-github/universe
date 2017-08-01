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

@if(count($game['settlement']->buildings) !== 0)
  <fieldset>
    <legend>Buildings</legend>

    <ul class="object-listing">
      @foreach($game['settlement']->buildings as $building)
        <li>
          <header>{{$building->building->name}}</header>
        </li>
      @endforeach
    </ul>
  </fieldset>
@endif

@include('Partials.Footer')