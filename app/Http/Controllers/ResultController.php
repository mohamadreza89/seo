<?php

namespace App\Http\Controllers;

use App\Services\TagAnalyzer;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {

        $heads = [];
        $lines = explode("\n",file_get_contents("tips.txt"));
        //$cat = "general";
        foreach ($lines as $line){
            $var = str_replace("\r", "", $line);
            if ($var)
                $heads[] = $var;
        }


        return view('result')->with("heads", $heads)->with("metas", TagAnalyzer::metas());
    }
}
