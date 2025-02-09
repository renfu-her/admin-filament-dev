<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CourseImage extends Model
{
    protected $fillable = [
        'course_id',
        'image',
        'sort'
    ];

    protected $casts = [
        'sort' => 'integer'
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
