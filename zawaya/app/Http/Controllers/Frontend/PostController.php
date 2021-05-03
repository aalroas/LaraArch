<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\frontend\post;

use App\Model\frontend\category;
use App\Model\frontend\post_images;


class PostController extends Controller
{



public function post(post $post)
{
  return view('frontend.blog.post-single',compact('post'));
}


    public function post_images(post_images $post_images)
    {
        $post = $post_images->post();
        return view('frontend.blog.post-single', compact('post'));
    }






    public function category(category $category)
    {
        $post = $category->post();
        return view('frontend.blog.post-single', compact('post'));
    }



}
