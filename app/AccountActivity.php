<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountActivity extends Model
{
	protected $table = 'account_activity';

	protected $guarded = ['id', 'created_at', 'updated_at'];

	protected $dates = ['created_at', 'updated_at'];
}
