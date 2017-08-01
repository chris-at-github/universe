{!!Form::model($object, ['route' => 'object.store'])!!}
	{!!Form::hidden('object', $object->id)!!}

	<div>
		<label for="name">Name:</label>
		{!!Form::text('name')!!}
	</div>

	<button type="submit">Save</button>
{!!Form::close()!!}