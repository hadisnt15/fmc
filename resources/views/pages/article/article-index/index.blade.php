@extends('layouts.app')
@section('title', 'Berita dan Pengumuman - Fakultas Keperawatan dan Ilmu Kesehatan | UM Banjarmasin')
@section('content')

    @include('pages.article.article-index.hero')
    @include('pages.article.article-index.articles', ['articles' => $articles])

@endsection