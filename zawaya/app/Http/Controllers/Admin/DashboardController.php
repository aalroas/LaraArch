<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\team;
use App\Model\admin\testimonial;
use App\Model\admin\portfolio;
use App\Model\frontend\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth:admin');
  }
  public function index( )
 {


        $teams = team::count();
        $testimonials = testimonial::count();
        $portfolios = portfolio::count();
        $posts = post::count();
     return view('admin.dashboard',compact('teams', 'testimonials', 'portfolios', 'posts'));
 }
}
