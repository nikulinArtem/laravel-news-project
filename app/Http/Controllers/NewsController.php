<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::query()->orderBy('idate', 'desc')->paginate(5);
        $page = $news->currentPage();

        return view('news', [
            "news" => $news,
            "title" => 'Новости',
            "pageLinks" => $news->getUrlRange(1, $news->lastPage()),
            "currentPage" => $page
        ]);
    }

    function show()
    {
        $id = request()->get('id');
        $post = News::query()->findOrFail($id);
//        dump($post);
        return view('show', [
            "post" => $post,
            "title" => 'Новость №'.$id
        ]);
    }
}
