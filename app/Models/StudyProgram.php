<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyProgram extends Model
{
    protected $fillable = [
        'name','slug','accreditation','certificate_image'
    ];

    public function sections()
    {
        return $this->hasMany(ProgramSection::class);
    }
}
