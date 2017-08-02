@if(empty($objects) === false)
  <ul class="object-listing">
    @foreach($objects as $object)
      <li>
				<header><a href="{{route('object.index', ['object' => $object->id])}}">{{$object->name}}</a></header>
      </li>
    @endforeach
  </ul>
@endif