<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    //
    public function index()
   {
    $pagetitle='صفحه خوش آمدگویی';
   $posts=DB::table('posts')->get();
    return view('posts',compact('pagetitle','posts'));
   }
}
