<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Http\Request;

class FrontPageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct(){
	
		
	}
//METODOS DE WEBS PUBLICAS
	public function index()
	{
		return view ('pages/index');
	}
	public function about()
	{
		return view ('pages/about');
	}
	public function services()
	{
		return view ('pages/service');
	}
	public function portfolio()
	{
		return view ('pages/portfolio');
	}
	public function contact()
	{
		return view ('pages/contact');
	}
	public function blog()
	{
		return view ('pages/blog');
	}
	
	

	


	

}
