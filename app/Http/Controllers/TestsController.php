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


    public function variableExample()
    {
    	$title = 'Accessing Variables';
    	return view('pages.accessvar')->with('title', $title);
    }
}
