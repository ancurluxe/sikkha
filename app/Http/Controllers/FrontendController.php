<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Node\CrapIndex;

class FrontendController extends Controller
{
    public function  index(){
        return view('frontend.index');
    }

}