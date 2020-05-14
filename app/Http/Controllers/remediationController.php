<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class remediationController extends Controller
{
    public  function  index(){
        $ninho='ninho-destin';
	return  view('molengeek',compact('ninho'));
}
 public function edit(){

    return view('edit');

 }
 public function show(){

    return view('show');

 }
}
