<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = [
        'courseTitle', 'courseShortDescription', 'courseDescription', 'courseLanguage', 'category_id',
        'courseIsFreeCourse', 'coursePrice', 'courseHasDiscount', 'courseDiscountAmount', 'courseLevel',
        'user_id', 'courseThumbnail', 'courseStatus', 'courseHasAccesscode'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function sections()
    {
        return $this->hasMany('App\Section');
    }

    public function lessons()
    {
        return $this->hasManyThrough('App\Lesson', 'App\Section');
    }

    public function students()
    {
        return $this->belongsToMany('App\Student', 'enrollments');
    }
}
