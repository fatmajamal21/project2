<?php

namespace App\Http\Controllers\EasyFolioFolder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EasyFolioController extends Controller
{
    public function home()
    {
        return view('EasyFolio.home');
    }
    public function about()
    {
        return view('EasyFolio.about');
    }
    public function services()
    {
        return view('EasyFolio.services');
    }
    public function contact()
    {
        return view('EasyFolio.forms.contact');
    }
    public function ok()
    {
        return view('EasyFolio.Forms.ok');
    }
    public function postcontact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);
        return redirect()->route('EasyFolio.Forms.ok');
    }
}
