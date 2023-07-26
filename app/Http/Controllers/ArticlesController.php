<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleStore;
use Illuminate\Support\Facades\File;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles_all = Article::get();
        return view('admin.articles.index', ['articles_all' => $articles_all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleStore $request)
    {
        $article = new Article();
        $article->title_tm = $request->title_tm;
        $article->title_ru = $request->title_ru;
        $article->title_en = $request->title_en;
        $article->description_tm = $request->description_tm;
        $article->description_ru = $request->description_ru;
        $article->description_en = $request->description_en;
        $article->published_date = $request->published_date;

        $article->save();

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
        $selected_article = Article::findOrFail($id);
        return view('admin.articles.edit', ['selected_article' => $selected_article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $selected_article = Article::findOrFail($id);
        
        $selected_article->title_tm = $request->title_tm;
        $selected_article->title_ru = $request->title_ru;
        $selected_article->title_en = $request->title_en;
        $selected_article->description_tm = $request->description_tm;
        $selected_article->description_ru = $request->description_ru;
        $selected_article->description_en = $request->description_en;
        $selected_article->published_date = $request->published_date;

        $selected_article->save();
        
        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::findOrFail($id)->delete();
        
        return redirect(route('articles.index'));
    }
}
