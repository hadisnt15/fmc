<?php

namespace App\Http\Controllers;

use App\Models\ProgramSection;
use App\Models\StudyProgram;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = StudyProgram::orderBy('name')->get();
        // dd($programs);

        return view('pages.program.program-index.index', compact('programs'));
    }

    public function show($slug)
    {
        $program = StudyProgram::where('slug', $slug)->firstOrFail();
        $sections = ProgramSection::where('study_program_id', $program->id)
            ->orderBy('order')
            ->get();

        return view('pages.program.program-show.show', compact('program','sections'));
    }
}
