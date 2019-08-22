<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'content'
    ];

    public static function valid(){
        return array(
            'comments' => 'required'
        );
    }
    
    public function comments(){
        return $this->hasMany('App\Comment', 'article_id');
    }

}
