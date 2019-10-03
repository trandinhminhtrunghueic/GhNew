<?php
Namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MyControllers extends Controller
{
	public function getxinchao($ten, $nam)
	{
		return 'Xin chào con Đũy<b>'  .$ten . '<br>Đã làm Đũy được :'.$nam;
	}
}