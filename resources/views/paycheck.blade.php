{!! Form::open(['action' => 'PageController@create', 'method' => 'post', 'class' => 'form-horizontal']) !!}
	<div class="row">
		<h3>How much do you make?</h3>
		<div class="form-group col-md-3">
			{!! Form::label('amount', 'I Make') !!}
			{!! Form::text('amount', null, ['class' => 'form-control', 'required' => 'required']) !!}
		</div>
		<div class="form-group col-md-2">
			{!! Form::label('scale_id', 'How Often') !!}
			{!! Form::select('scale_id', ['...'] + $scale, null, ['id' => 'inputname', 'class' => 'form-control', 'required' => 'required', 'onchange' => 'getScaleValues(this.options[this.selectedIndex].value);']) !!}
		</div>
			<input type="hidden" name="name" value="Salary">
	</div>
{!! Form::close() !!}