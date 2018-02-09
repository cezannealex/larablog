<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
        'title', 'content', 'image', 'category_id'
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
