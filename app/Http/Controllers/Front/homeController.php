<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Model\Menus;
use App\Model\subMenus;

class homeController extends Controller
{

    public function index()
    {
        $news=News::all();
        $menus=Menus::orderBy('order')->get();
        View::share('menus', $menus);
        View::share('news', $news);

        return view('Front.Home.index');
    }

    public function page($id)
    {
        $menus=Menus::orderBy('order')->get();
        View::share('menus', $menus);
        $menu=Menus::find($id);
        View::share('menu',$menu);

        return view('Front.Layouts.page');
    }


    public function spage($id)
    {
        $menus=Menus::orderBy('order')->get();
        View::share('menus', $menus);
        $menu=subMenus::find($id);
        View::share('menu',$menu);

        return view('Front.Layouts.subpage');
    }
}
