<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
        'title', 'content', 'image', 'category_id', 'user_id'
    ];

    /*
    One to One Relationship
    Example:
        - Article1 -> CategoryA
        - Article2 -> CategoryA
        - Article3 -> CategoryA
    One Article belongs to only one Category
    */

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
