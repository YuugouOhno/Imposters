<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslatorController extends Controller
{
    public function index(){
        return view('translators/index');
    }
    
    public function test(){
        return view('translators/test');
    }
}
