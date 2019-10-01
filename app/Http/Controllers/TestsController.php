<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function testPage()
    {
    	$title = 'Test Page with dynamic title';

    	//to send variable use this or
    	//return view('pages.test', compact('title'));

    	//or use this
    	$data = array("title"=> $title, "message"=>"Hello dynamic");
    	return view('pages.test')->with($data);
	}
	

	public function services()
    {
		$title = "Services Page";
		$data = array(
			"title"=>$title,
			"services"=>array("Web Designing", "Reactive Programing", "SEO")
		);
    	return view('pages.service')->with($data);
	}
	
	public function about()
    {
		$title = "About Page";
		$data = array("title"=>$title, "pagetitle"=>"About Us");
    	return view('pages.about', $data);
    }


    public function variableExample()
    {
    	$title = 'Accessing Variables';
    	return view('pages.accessvar')->with('title', $title);
	}
	
	public function testFunc($name)
	{
		return "Say hello ${name}";
	}
}
