<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;

class TranslatorController extends Controller
{
    public function index(){
        return view('translators/index');
    }
    
    public function random(Language $language){
        
        return view('translators/random')->with(['language' => $language->get()]);
    }
}
