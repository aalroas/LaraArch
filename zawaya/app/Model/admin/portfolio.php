<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{

    public function portfolio_images()
    {
        return $this->hasMany('App\Model\admin\portfolio_images');
    }

    public function plan_images()
    {
        return $this->hasMany('App\Model\admin\plan_images');
    }

    public function categories()
    {
        return  $this->belongsToMany('App\Model\admin\portfolio_cats', 'portfolio_cat')->withTimestamps();
    }



}
