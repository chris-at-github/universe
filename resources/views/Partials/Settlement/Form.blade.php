{!!Form::model($settlement, ['route' => 'settlement.store'])!!}
  {!!Form::hidden('settlement', $settlement->id)!!}

	<div>
		<label for="name">Name:</label>
		{!!Form::text('name')!!}
	</div>

	<button type="submit">Speichern</button>
{!!Form::close()!!}