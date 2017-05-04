<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
      return view('content.home');
    }

    public function galeri()
    {
      return view('content.galeri');
    }

    public function blog()
    {
      return view('content.blog');
    }

    public function contact()
    {
      return view('content.contact');
    }
}
