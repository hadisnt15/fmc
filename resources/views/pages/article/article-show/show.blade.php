@extends('layouts.app')
@section('title', $article->title . ' - Fakultas Keperawatan dan Ilmu Kesehatan | UM Banjarmasin')
@section('content')

    @include('pages.article.article-show.hero', ['article' => $article])
    @include('pages.article.article-show.content', ['article' => $article])

@endsection