@extends('layouts.base')

@section('title', $title)

@section('content')
    <?php /** @var App\Models\News $post  */?>

    <div class="line-bottom pt-3">
        <h4>{!! $post->title !!}</h4>
    </div>

    <div class="mt-2 mb-1 line-bottom">{!! $post->content !!}</div>

    <div class="mt-1 mb-4">
        <a href="{{route('list')}}">Все новости >></a>
    </div>


@endsection
