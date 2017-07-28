{!!Form::model($building, ['route' => 'building.store'])!!}
  {!!Form::hidden('building', $building->id)!!}

	<div>
		<label for="name">Name:</label>
		{!!Form::text('name')!!}
	</div>

	<button type="submit">Save</button>
{!!Form::close()!!}