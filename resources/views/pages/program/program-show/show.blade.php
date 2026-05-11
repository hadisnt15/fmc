@extends('layouts.app')
@section('title', 'Program Studi '. $program->name .' - Fakultas Keperawatan dan Ilmu Kesehatan | UM Banjarmasin')
@section('content')

    @include('pages.program.program-show.hero', ['program' => $program])
    @include('pages.program.program-show.accreditation', ['program' => $program])
    @include('pages.program.program-show.sections', ['sections' => $sections])
    @include('pages.program.program-show.contents', ['contents' => $sections])

@endsection