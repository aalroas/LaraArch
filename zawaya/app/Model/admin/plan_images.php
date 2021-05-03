<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class plan_images extends Model
{

    protected $fillable = ['portfolio_id', 'plan_image_path'];
    public function portfolio()
    {
        return $this->belongsTo('App\Model\admin\portfolio');
    }
}
