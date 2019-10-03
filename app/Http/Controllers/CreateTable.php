<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class CreateTable extends Controller
{
	public function CreateTable()
	{
			Schema::create('person', function($table)
		{
			$table -> increments('id');
			$table -> string('name',' 50');
			$table -> timestamps();
		});
	}
}
?>