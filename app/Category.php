<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['categoryCode', 'categoryName', 'categoryParent', 'categoryIcon', 'categoryImage'];

    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
