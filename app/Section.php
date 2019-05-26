<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    //
    protected $fillable = ['sectionTitle'];

    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }
}
