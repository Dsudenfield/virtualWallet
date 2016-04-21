<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balances extends Model
{
	protected $table = 'balances';

	protected $guarded = ['id', 'created_at', 'updated_at'];

	protected $dates = ['created_at', 'updated_at'];
}
