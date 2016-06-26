@extends('default')

@section('content')
	{!! Form::open(['action' => 'PageController@create', 'method' => 'post', 'class' => 'form-horizontal']) !!}
		<div id="salary" class="row">
			<h3>How much do you make?</h3>
			<div class="form-group col-md-3">
				{!! Form::label('amount', 'I Make') !!}
				{!! Form::text('amount', null, ['class' => 'form-control', 'required' => 'required']) !!}
			</div>
			<div class="form-group col-md-2">
				{!! Form::label('scale_id', 'How Often') !!}
				{!! Form::select('scale_id', ['...'] + $scale, null, ['id' => 'salary_frequency', 'class' => 'form-control', 'required' => 'required', 'onchange' => 'getScaleValues(this.options[this.selectedIndex].value, "salary");']) !!}
			</div>
			<input type="hidden" name="name_1" value="Salary">
		</div>
		<hr>
		<div id="static_wrapper" class="row">
			<h3>What Are Your Static Expenses?</h3>
			<button type="button" class="btn btn-primary add_new">Add New</button>
			<div class="row">
				<div class="form-group col-md-3">
					{!! Form::label('amount', 'I Pay') !!}
					{!! Form::text('amount[]', null, ['class' => 'form-control', 'required' => 'required']) !!}
				</div>
				<div class="form-group col-md-2">
					{!! Form::label('scale_id', 'How Often') !!}
					{!! Form::select('scale_id[]', ['...'] + $scale, null, ['id' => 'static_expense_frequency', 'class' => 'form-control', 'required' => 'required', 'onchange' => 'getScaleValues(this.options[this.selectedIndex].value, "static_expenses");']) !!}
				</div>
			</div>
		</div>
		<hr>
		<div id="variable_wrapper" class="row">
			<h3>What Are Your Variable Expenses? (credit cards)</h3>
			<h3>Enter your last 3 payments</h3>
			<div class="form-group col-md-2">
				{!! Form::label('amount', 'I Pay') !!}
				{!! Form::text('amount[]', null, ['class' => 'form-control', 'required' => 'required']) !!}
				{!! Form::text('amount[]', null, ['class' => 'form-control', 'required' => 'required']) !!}
				{!! Form::text('amount[]', null, ['class' => 'form-control', 'required' => 'required']) !!}
			</div>
			<div class="form-group col-md-2">
				{!! Form::label('scale_id', 'How Often') !!}
				{!! Form::select('scale_id', ['...'] + $scale, null, ['id' => 'variable_expense_frequency', 'class' => 'form-control', 'required' => 'required', 'onchange' => 'getScaleValues(this.options[this.selectedIndex].value, "variable_expenses");']) !!}
			</div>
		</div>
		<hr>
		<div id="misc_wrapper" class="row">
			<h3>misc</h3>
			<div>
				<button type="button" class="btn btn-primary add_new">Add New</button>
			</div>
			<div class="row">
				<div class="form-group col-md-3">
					{!! Form::label('amount', 'Amount') !!}
					{!! Form::text('amount[]', null, ['class' => 'form-control', 'required' => 'required']) !!}
				</div>
				<div class="form-group col-md-2">
					{!! Form::label('withdrawl', 'plus/minus') !!}
					{!! Form::select('withdrawl[]', ['-', '+'], null, ['id' => 'inputname', 'class' => 'form-control', 'required' => 'required']) !!}
				</div>
				<div class="form-group col-md-3">
					{!! Form::label('date', 'Date') !!}
					{!! Form::text('date[]', null, ['class' => 'form-control', 'required' => 'required']) !!}
				</div>
			</div>
		</div>
		<input type="submit" value="Submit" class="btn btn-primary">
	{!! Form::close() !!}
@endsection