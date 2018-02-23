<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    /*
        One-to-Many Relationship
        Example:
        CategoryA
            - Article1
            - Article2
            - Article3
        One Category has many articles
    */
    public function articles() {
        return $this->hasMany('App\Article');
    }
}
