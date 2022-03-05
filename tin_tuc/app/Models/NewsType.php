<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsType extends Model
{
    protected $table ="type_news";

    public function news(){
        return $this->hasMany('App\Models\NewsType','id_type','id');
    }
}
