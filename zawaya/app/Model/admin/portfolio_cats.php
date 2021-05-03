<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class portfolio_cats extends Model
{
    public function portfolio()
    {
      return  $this->belongsToMany('App\Model\admin\portfolio', 'portfolio_cat')->paginate(5);
      }
      public function getRouteKeyName()
      {
        return 'slug';
      }
    }
