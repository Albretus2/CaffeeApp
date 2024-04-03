<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Table;
use App\Models\Gallery;
use App\Models\News;

class LandingPage extends Controller
{
    public function index(Menu $menu, Table $table, Gallery $gallery, News $news)
    {
        return view('landingPages.index', [
            'menues' =>  $menu->latest()->get(),
            'table' => $table->all(),
            'gallery' => $gallery->latest()->get(),
            'news' => $news->latest()->get()
        ]);
    }

    public function gallery(Gallery $gallery)
    {
        return view('landingPages.gallery.index', [
            'gallery' => $gallery->latest()->paginate(6)
        ]);
    }

    public function news(News $news)
    {
        return view('landingPages.news.index', [
            'news' => $news->latest()->paginate(6)
        ]);
    }

    public function post(News $news)
    {
        return view('landingPages.news.singlePost', [
            'post' => $news
        ]);
    }
}
