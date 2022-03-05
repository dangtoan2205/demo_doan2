<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table ="news";

    public function news_type(){
        return $this->belongsTo('App\Models\NewsType','id_type','id');
    }
}
