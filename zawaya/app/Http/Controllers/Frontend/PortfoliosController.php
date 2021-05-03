<?php

namespace App\Http\Controllers\Frontend;

use App\Model\admin\portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\portfolio_images;
use App\Model\admin\plan_images;
class PortfoliosController extends Controller
{

    public function index()
    {


        $portfolios = portfolio::orderBy('created_at', 'DESC')->paginate(1);


        return view('frontend.portfolios.index', compact('portfolios'));
    }



    public function portfolio_images(portfolio_images $portfolio_images)
    {
        $portfolios = $portfolio_images->portfolios();
        return view('frontend.portfolios.index', compact('portfolios'));
    }






    public function category(category $category)
    {
        $portfolios = $category->portfolios();
        return view('frontend.portfolios.index', compact('portfolios'));
    }


    public function portfolio($id)
    {
        $portfolio_images =  portfolio_images::where("portfolio_id", $id)->get();
        $plan_images =  plan_images::where("portfolio_id", $id)->get();
        $portfolio = portfolio::where("id",$id)->first();
        return view('frontend.portfolios.portfolio-single', compact('portfolio', 'portfolio_images', 'plan_images'));
    }








}

