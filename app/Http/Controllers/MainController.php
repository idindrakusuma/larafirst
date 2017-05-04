<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Contact;

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

    // fungsi untuk contact
    public function contact()
    {
      return view('content.contact');
    }

    public function store(Request $request){
      $contact = new Contact;
      $contact->pengirim = $request->nama;
      $contact->email = $request->email;
      $contact->pesan = $request->pesan;
      $contact->save();

      //flash data
      $request->session()->flash('alert-success', 'Data Anda sudah kami terima, segera mungkin kami akan menjawabnya.');
      return redirect('contact');
    }
}
