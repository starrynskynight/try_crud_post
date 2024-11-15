<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;

use Illuminate\Http\Request;

class ControllerPage extends Controller
{
    public function home () {
        return view('home');
    }
    public function about () {
        return view('about');
    }
    public function life () {
        return view('life');
    }
    public function  showContactForm() {
        return view('contact');
    }
    
    public function contact(PostRequest $request)
    {
    $data = $request->validated();
    return redirect()->route('result')->with('data', $data);
    }

    public function showResult()
    {
    $data = session('data'); // Mengambil data dari session jika ada
    return view('result', compact('data'));
    }

}