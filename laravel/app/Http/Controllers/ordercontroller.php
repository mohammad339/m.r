<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;به جای این کد از کد پایین استفاده میکنیم
use App\order;
class ordercontroller extends Controller
{
    public function index()
    {
     $pagetitle= 'لیست فاکتورهای ما';
     //$orders = DB::table('orders')->get();به جای این هم ازکدپایینی استفاده میکنیم
     $orders = order::orderby('id','desc')->get();
     return view ('orders',compact('pagetitle','orders'));
    }

}
