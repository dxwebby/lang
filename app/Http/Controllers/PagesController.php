<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Model
use App\Language;

class PagesController extends Controller
{
    public function index(){                
        $default_lang = "english";
        $lang = Language::where('lang', $default_lang)->get();
        
        #echo $lang[0]->main_title;        
        return view('pages.index')->with('lang', $lang);
    }
}
