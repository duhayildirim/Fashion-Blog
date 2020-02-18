<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Model\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;


class newsController extends Controller
{

    public function index()
    {
        $news =News::all();
        View::share('news' , $news);
        return view('CMS.news.list');
    }

    public function create()
    {
        return view('CMS.news.create');
    }

    public function create_post(Request $request){
        $news = new News();
        $news->title=$request->input('title');
        $news->content=$request->input('content');

        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $file->move(public_path() . '/images/news', $file->getClientOriginalName());
            $news->img_url=$file->getClientOriginalName();
        }

        $news->save();

        return redirect()->route('CMS.news.create');

    }


    public function remove(Request $request)
    {
        $news=News::find($request->id);
        $news->delete();
        return redirect()->route('CMS.news.list');
    }

    public function edit(Request $request)
    {
        $news=News::find($request->id);
        View::share('news', $news);
        return view('CMS.news.edit');
    }

    public function edit_post(Request $request)
    {
        $news = News::find($request->id);
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image_path = time() . '.' . $request->image->extension();
        $news->img_url = $request->image->move(public_path('images'), $image_path);


        $news->save();

        return redirect()->route('CMS.news.list');
    }
}
