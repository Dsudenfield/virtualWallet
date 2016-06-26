<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Scale;

class AjaxController extends Controller
{
	public function getScaleValues(Request $request) {
		$request->get('scale_id');
		$scale_value = Scale::getScaleValue($request->get('scale_id'));
		return $scale_value;
	}
}
