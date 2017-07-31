{!!Form::open(['route' => 'settlement.createBuilding'])!!}
	{!!Form::hidden('settlement', $settlement->id)!!}

	<div>
		<label for="building">Building</label>
		{!!Form::select('building', $buildings->mapWithKeys(function($building) {
			return [$building->id => $building->name];
		}), null, ['placeholder' => ''])!!}
	</div>

	<button type="submit">Create</button>
{!!Form::close()!!}