<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('/calculator/index');
    }
    
    public function calc1()
    {
        return view('/calculator/calc1');
    }
    
    public function calc2()
    {
        return view('/calculator/calc2');
    }
    
    public function calc3()
    {
        return view('/calculator/calc3');
    }
    
    public function calc4()
    {
        return view('/calculator/calc4');
    }
    
    public function calc5()
    {
        return view('/calculator/calc5');
    }
    
    public function calc6()
    {
        return view('/calculator/calc6');
    }
}
