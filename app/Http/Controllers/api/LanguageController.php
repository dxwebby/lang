<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Model
use App\Language;

class LanguageController extends Controller
{
    public function changeLang($id){
        // Return contents in selected language
        $lang = Language::where('lang', $id)->get();
        return response()->json([
            'lang' => $lang,
        ]);        
    }
}
