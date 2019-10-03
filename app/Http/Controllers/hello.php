<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hello extends Controller
{
public function getchao($user)
{
	return view('hello-user',['user' => $user]);
}
}
?>