<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramSection extends Model
{
    protected $fillable = [
        'study_program_id','type','title','header','content','content2','image','images','running_images','order'
    ];

    protected $casts = [
        'images' => 'array',
        'content' => 'array',
        'content2' => 'array',
    ];

    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }
}
