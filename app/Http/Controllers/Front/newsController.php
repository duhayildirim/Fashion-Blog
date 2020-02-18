<?php

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use App\Model\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Model\Menus;

class newsController extends Controller
{

    public function index()
    {
        $news=News::all();
        $menus=Menus::orderBy('order')->get();
        View::share('news', $news);
        View::share('menus', $menus);
        return view('Front.News.index');
    }

    public function view($id)
    {
        $menus=Menus::orderBy('order')->get();
        $news=News::find($id);
        View::share('news',$news);
        View::share('menus', $menus);
        return view('Front.News.view');
    }
}
