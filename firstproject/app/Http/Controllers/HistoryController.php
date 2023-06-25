<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Calculator;
class HistoryController extends Controller
{
public function History()
{
   $all_history=Calculator::all();

    //dd($all_history->toArray());
     return view('history',compact('all_history'));
     //return "ok";
}
    
}
