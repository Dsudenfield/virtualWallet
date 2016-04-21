@extends('default')

@section('content')
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
		<hr>
		<div class="row">
			<h3>What Are Your Static Expenses?</h3>
			<a href="javascript:void(0);"><span class="fa fa-plus" style="color:green"></span></a>
			<div class="form-group col-md-3">
				{!! Form::label('inputname', 'I Pay') !!}
				{!! Form::text('inputname', null, ['class' => 'form-control', 'required' => 'required']) !!}
			</div>
			<div class="form-group col-md-2">
				{!! Form::label('inputname', 'How Often') !!}
				{!! Form::select('inputname', ['...'] + $scale, null, ['id' => 'inputname', 'class' => 'form-control', 'required' => 'required']) !!}
			</div>
			<div class="form-group col-md-1">
				{!! Form::label('inputname', 'When') !!}
				{!! Form::select('inputname', [1,2,3,4], null, ['id' => 'inputname', 'class' => 'form-control', 'required' => 'required']) !!}
			</div>
		</div>
		<hr>
		<div class="row">
			<h3>What Are Your Variable Expenses? (credit cards)</h3>
			<h3>Enter your last 3 payments</h3>
			<a href="javascript:void(0);"><span class="fa fa-plus" style="color:green"></span></a>
			<div class="form-group col-md-2">
				{!! Form::label('inputname', 'I Pay') !!}
				{!! Form::text('inputname', null, ['class' => 'form-control', 'required' => 'required']) !!}
				{!! Form::text('inputname', null, ['class' => 'form-control', 'required' => 'required']) !!}
				{!! Form::text('inputname', null, ['class' => 'form-control', 'required' => 'required']) !!}
			</div>
			<div class="form-group col-md-2">
				{!! Form::label('inputname', 'How Often') !!}
				{!! Form::select('inputname', ['...'] + $scale, null, ['id' => 'inputname', 'class' => 'form-control', 'required' => 'required']) !!}
			</div>
			<div class="form-group col-md-1">
				{!! Form::label('inputname', 'When') !!}
				{!! Form::select('inputname', [1,2,3,4], null, ['id' => 'inputname', 'class' => 'form-control', 'required' => 'required']) !!}
			</div>
		</div>
		<hr>
		<div class="row">
			<h3>misc</h3>
			<div class="form-group col-md-3">
				{!! Form::label('inputname', 'Amount') !!}
				{!! Form::text('inputname', null, ['class' => 'form-control', 'required' => 'required']) !!}
			</div>
			<div class="form-group col-md-2">
				{!! Form::label('inputname', 'plus/minus') !!}
				{!! Form::select('inputname', ['-', '+'], null, ['id' => 'inputname', 'class' => 'form-control', 'required' => 'required']) !!}
			</div>
			<div class="form-group col-md-3">
				{!! Form::label('inputname', 'Date') !!}
				{!! Form::text('inputname', null, ['class' => 'form-control', 'required' => 'required']) !!}
			</div>
		</div>
		<input type="submit" value="Submit" class="btn btn-primary">
	{!! Form::close() !!}
@endsection