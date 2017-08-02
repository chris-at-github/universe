{!!Form::model($object, ['route' => 'object.store'])!!}
	{!!Form::hidden('object', $object->id)!!}

	<div>
		<label for="name">Name:</label>
		{!!Form::text('name')!!}
	</div>

	<div>
		<label for="type">Type:</label>
		{!!Form::select('type', $types->mapWithKeys(function($type) {
			return [$type => $type];
		}), null, ['placeholder' => ''])!!}
	</div>

	<button type="submit">Save</button>
{!!Form::close()!!}