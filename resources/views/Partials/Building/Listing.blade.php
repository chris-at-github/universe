@if(empty($buildings) === false)
  <ul class="object-listing">
    @foreach($buildings as $building)
      <li>
        <header>{{$building->name}}</header>
      </li>
    @endforeach
  </ul>
@endif