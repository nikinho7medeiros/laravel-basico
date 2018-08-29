<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    
	public function categoria ($id = 1)
	{
		return "listagem dos posts da categoria: {$id}";
	}
	
	public function contato ()
	{
		return view('site.contact.index');
	}
	
 
	public function index ()
	{
		$var1 = '1234';
		$teste1 = 123;
		$teste2 = 321;
		$teste3 = 132;
		$arrayData = [];
		return view ('site.home.index', compact('teste1', 'teste2', 'teste3', 'var1', 'arrayData'));
	}

}

