@extends('layouts/base')

@section('title', $title)

@section('content')
    <div class="mt-3">
        <h3 class="line-bottom pb-2">{{$title}}</h3>

        @foreach($news as $item)
            <?php /** @var App\Models\News $item  */?>
            <div class="mt-3">
                <div class="d-flex">
                    <p class="purple text-white ps-1 pe-1 ">{{date('d.m.Y', $item->idate)}}</p>
                    <p class="ms-2">
                        <a href="{{ route('view', ['id' => $item->id]) }}">{!! $item->title !!}</a>
                    </p>
                </div>
                <p>{!! $item->announce !!}</p>
            </div>
        @endforeach
    </div>

    <div class="line-top pt-2">
        <h5>Страницы:</h5>
        <ul class="pagination pagination-sm justify-content-center flex-wrap">
            @foreach($pageLinks as $index => $link)
                <li class="page-item m-1 {{$currentPage === $index ? 'active' : ''}}">
                    <a class="page-link {{$currentPage === $index ? 'text-white' : 'text-dark'}}" href="{{$link}}">{{$index}}</a>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
