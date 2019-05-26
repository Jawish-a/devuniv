<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    protected $fillable = [
        'lessonTitle', 'lessonDuration', 'course_id', 'section_id', 'lessonType', 'lessonVideoLink',
        'lessonContent', 'lessonSummary', 'lessonAttachment', 'lessonAttachmentType'
    ];

    public function section()
    {
        return $this->belongsTo('App\Section');
    }
}
