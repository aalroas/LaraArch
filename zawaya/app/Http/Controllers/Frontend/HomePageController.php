<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\slider;



class HomePageController extends Controller
{
   public function index( )
  {
        $sliders = slider::where('type',1)->where('status', 1)->get();
        return view('frontend.index', compact('sliders'));
  }

    public function index2()
    {
        $sliders = slider::where('type', 2)->where('status', 1)->get();
        return view('frontend.index2', compact('sliders'));
    }


    public function index3()
    {
        $sliders = slider::where('type', 3)->where('status', 1)->get();
        return view('frontend.index3', compact('sliders'));
    }



}
