<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsStore;
use App\Http\Requests\NewsUpdate;
use App\Models\NewsInternational;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NewsInternationalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news_all = NewsInternational::orderBy('created_at','DESC')->select(['id', 'title_tm', 'event_date'])->get();

        return view('admin.news_inter.index', ['news_all' => $news_all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news_inter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsStore $request)
    {
        $news = new NewsInternational();
        $news->title_tm = $request->title_tm;
        $news->title_ru = $request->title_ru;
        $news->title_en = $request->title_en;
        $news->description_tm = $request->description_tm;
        $news->description_ru = $request->description_ru;
        $news->description_en = $request->description_en;
        $news->event_date = $request->event_date;

        if($request->hasFile('image_1')){
            $news->image_1 = $request->file('image_1')->store('/uploaded_files/news_inter_img');
        }

        if($request->hasFile('image_2')){
            $news->image_2 = $request->file('image_2')->store('/uploaded_files/news_inter_img');
        }
        
        if($request->hasFile('image_3')){
            $news->image_3 = $request->file('image_3')->store('/uploaded_files/news_inter_img');
        }
        
        if($request->hasFile('image_4')){
            $news->image_4 = $request->file('image_4')->store('/uploaded_files/news_inter_img');
        }

        if($request->hasFile('image_5')){
            $news->image_5 = $request->file('image_5')->store('/uploaded_files/news_inter_img');
        }

        if($request->hasFile('image_6')){
            $news->image_6 = $request->file('image_6')->store('/uploaded_files/news_inter_img');
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
        $selected_news = NewsInternational::findOrFail($id);
        return view('admin.news_inter.edit', ['selected_news' => $selected_news]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsUpdate $request, string $id)
    {
        $selected_news = NewsInternational::findOrFail($id);
        
        $selected_news->title_tm = $request->title_tm;
        $selected_news->title_ru = $request->title_ru;
        $selected_news->title_en = $request->title_en;
        $selected_news->description_tm = $request->description_tm;
        $selected_news->description_ru = $request->description_ru;
        $selected_news->description_en = $request->description_en;
        $selected_news->event_date = $request->event_date;

        if($request->hasFile('image_1')){
            File::delete(public_path() . '/' . $selected_news->image_1);
            $selected_news->image_1 = $request->file('image_1')->store('/uploaded_files/news_inter_img');
        }

        if($request->hasFile('image_2')){
            File::delete(public_path() . '/' . $selected_news->image_2);
            $selected_news->image_2 = $request->file('image_2')->store('/uploaded_files/news_inter_img');
        }
        
        if($request->hasFile('image_3')){
            File::delete(public_path() . '/' . $selected_news->image_3);
            $selected_news->image_3 = $request->file('image_3')->store('/uploaded_files/news_inter_img');

        }
        
        if($request->hasFile('image_4')){
            File::delete(public_path() . '/' . $selected_news->image_4);
            $selected_news->image_4 = $request->file('image_4')->store('/uploaded_files/news_inter_img');
        }

        if($request->hasFile('image_5')){
            File::delete(public_path() . '/' . $selected_news->image_5);
            $selected_news->image_5 = $request->file('image_5')->store('/uploaded_files/news_inter_img');
        }

        if($request->hasFile('image_6')){
            File::delete(public_path() . '/' . $selected_news->image_6);
            $selected_news->image_6 = $request->file('image_6')->store('/uploaded_files/news_inter_img');
        }

        $selected_news->save();
        
        return redirect(route('news_inter.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $selected_news = NewsInternational::findOrFail($id);
        File::delete(public_path() . '/' . $selected_news->image_1);
        File::delete(public_path() . '/' . $selected_news->image_2);
        File::delete(public_path() . '/' . $selected_news->image_3);
        File::delete(public_path() . '/' . $selected_news->image_4);
        File::delete(public_path() . '/' . $selected_news->image_5);
        File::delete(public_path() . '/' . $selected_news->image_6);
        $selected_news->delete();
        
        return redirect(route('news_inter.index'));
    }
}
