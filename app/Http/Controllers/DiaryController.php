<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DiaryRequest;
use App\Diary;

class DiaryController extends Controller
{
    public function aa(){
        return view('homes/index');
    }
    
    public function index(Request $request, Diary $diary)
    {
        $num_of_days = $request->input('num_of_days');
        // dd($num_of_days);
        $diaries = $diary->getDiaries($num_of_days);
        return view('diaries/index')->with(['diaries' => $diaries]);
    }
    
    public function create(Diary $diary)
    {
        return view('diaries/create')->with(['diaries' => $diary]);
    }
    
    public function store(DiaryRequest $request, Diary $diary)
    {
        $input = $request['diary'];
        $diary->fill($input)->save();
        return redirect()->route("diaries");
    }
    
    public function delete(Diary $diary)
    {
        $diary->delete();
        return redirect('/');
    }
    
    public function math()
    {
        return view('math/index');
    }
    
}
