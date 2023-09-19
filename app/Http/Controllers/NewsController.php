<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewsStore;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news_all = News::orderBy('created_at','DESC')->select(DB::raw('id, title_tm, event_date, SUBSTRING(description_tm, 1, 150) AS description_tm'))->get();
        return view('admin.news.index',['news_all' => $news_all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsStore $request)
    {
        $news = new News();
        $news->title_tm = $request->title_tm;
        $news->title_ru = $request->title_ru;
        $news->title_en = $request->title_en;
        $news->description_tm = $request->description_tm;
        $news->description_ru = $request->description_ru;
        $news->description_en = $request->description_en;
        $news->event_date = $request->event_date;

        if($request->hasFile('image')){
            $news->image = $request->file('image')->store('/uploaded_files/news_img');
        }

        $news->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $selected_news = News::findOrFail($id);
        return view('admin.news.edit', ['selected_news' => $selected_news]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsStore $request, string $id)
    {
        $selected_news = News::findOrFail($id);
        
        $selected_news->title_tm = $request->title_tm;
        $selected_news->title_ru = $request->title_ru;
        $selected_news->title_en = $request->title_en;
        $selected_news->description_tm = $request->description_tm;
        $selected_news->description_ru = $request->description_ru;
        $selected_news->description_en = $request->description_en;
        $selected_news->event_date = $request->event_date;

        if($request->hasFile('image')){
            File::delete(public_path() . '/' . $selected_news->image);
            $selected_news->image = $request->file('image')->store('/uploaded_files/news_img');
        }

        $selected_news->save();
        
        return redirect(route('news.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $selected_news = News::findOrFail($id);
        File::delete(public_path() . '/' . $selected_news->image);
        $selected_news->delete();
        
        return redirect(route('news.index'));
    }
}
