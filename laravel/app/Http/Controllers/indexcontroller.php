<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function index()
    {
    return view('index',['name'=>'mohammad']);
    }
    public function welcome()
    {
      //  $text='صفحه خوش آمدگویی';
   // return view('welcome')->with('pagetitle',$text);
   $pagetitle='صفحه خوش آمدگویی';
   return view('welcome',compact('pagetitle','name'));
    }
    public function article($id)
    {
       return view('article',compact('id'));

    } 
}
