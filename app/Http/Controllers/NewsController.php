<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class NewsController extends Controller
{
    public function index()
    {
        $posts = News::all();
        return view('list');
    }
}
