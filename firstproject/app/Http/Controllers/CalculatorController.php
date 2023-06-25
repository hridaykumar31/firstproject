<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Calculator;
class CalculatorController extends Controller
{
public function index()
{
    return view('calculator');
}
public function c2alculate(Request $request)
{
    $expression = $request->input('expression');
    $result = eval("return $expression;");
    calculator::create([
    'expression'=>$expression,
    'result'=>$result
    ]);
    return view('calculator', compact('result'));
}
 
}
