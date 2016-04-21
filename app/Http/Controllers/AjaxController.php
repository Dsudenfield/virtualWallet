<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Scale;

class AjaxController extends Controller
{
	public function getScaleValues(Request $request) {
		dd($request);
		//Scale::getScaleValue()
	}
}
