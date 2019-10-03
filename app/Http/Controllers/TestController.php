<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getGrab($ten, $nam)
	{
		return '<b>Grab</b> là phần mềm đặt xe thông minh  <b>'  .$ten . '</b> Đã hoạt động ở huế được : <b>'.$nam.' năm.';
	}
}
