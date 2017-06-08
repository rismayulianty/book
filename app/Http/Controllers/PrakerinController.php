<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrakerinController extends Controller
{
    //
    public function percobaan()
    {
    	$a = "Rismayp";
    	$b = "jajang Nurjaman";
    	$c = "asep";
    	$d = "sherin";
    	$e = "nidaan";
    	return view('Index',compact('a', 'b', 'c', 'd', 'e'));
    }


      public function praktek()
    {
    	$a = "Rismayp";
    	$b = "jajang Nurjaman";
    	$c = "asep";
    	$d = "sherin";
    	$e = "nidaan";
    	return view('praktek',compact('a', 'b', 'c', 'd', 'e'));
    }


     public function ujikom()
    {
    	$a = "Rismayp";
    	$b = "jajang Nurjaman";
    	$c = "asep";
    	$d = "sherin";
    	$e = "nidaan";
    	return view('ujikom',compact('a', 'b', 'c', 'd', 'e'));
    }


     public function prakerin()
    {
    	$a = "Rismayp";
    	$b = "jajang Nurjaman";
    	$c = "asep";
    	$d = "sherin";
    	$e = "nidaan";
    	return view('prakerin',compact('a', 'b', 'c', 'd', 'e'));
    }

    public function kerkom()
    {
    	$a = "Rismayp";
    	$b = "jajang Nurjaman";
    	$c = "asep";
    	$d = "sherin";
    	$e = "nidaan";
    	return view('kerkom',compact('a', 'b', 'c', 'd', 'e'));
    }
    public function param($id)
    {
    	return view('welcome');
    }

}

    

