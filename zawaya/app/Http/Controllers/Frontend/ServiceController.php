<?php

namespace App\Http\Controllers\Frontend;

use App\Model\admin\service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
           $services = service::all();
           return view('frontend.services.index',compact('services'));
    }

}


