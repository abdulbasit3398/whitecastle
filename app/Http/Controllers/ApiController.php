<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
	public function test()
	{
		$data = array(
			'status' => true,
			'message' => 'Hello World',
		);
		return $data;
	}
}
