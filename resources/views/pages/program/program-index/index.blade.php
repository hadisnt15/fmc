@extends('layouts.app')
@section('title', 'Program Studi - Fakultas Keperawatan dan Ilmu Kesehatan | UM Banjarmasin')
@section('content')

    @include('pages.program.program-index.hero')
    @include('pages.program.program-index.programs', ['programs' => $programs])

@endsection