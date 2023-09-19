<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MejlisActivity;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\MejlisActivityStore;

class MejlisActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities_all = MejlisActivity::orderBy('created_at','DESC')->select(['id', 'title_tm', 'event_date'])->get();
        return view('admin.mejlis_activities.index', ['activities_all' => $activities_all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mejlis_activities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MejlisActivityStore $request)
    {
        $mejlis_activity = new MejlisActivity();
        $mejlis_activity->title_tm = $request->title_tm;
        $mejlis_activity->title_ru = $request->title_ru;
        $mejlis_activity->title_en = $request->title_en;
        $mejlis_activity->description_tm = $request->description_tm;
        $mejlis_activity->description_ru = $request->description_ru;
        $mejlis_activity->description_en = $request->description_en;
        $mejlis_activity->event_date = $request->event_date;

        $mejlis_activity->save();

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
        $selected_mejlis_activity = MejlisActivity::findOrFail($id);
        return view('admin.mejlis_activities.edit', ['selected_mejlis_activity' => $selected_mejlis_activity]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $selected_article = MejlisActivity::findOrFail($id);
        
        $selected_article->title_tm = $request->title_tm;
        $selected_article->title_ru = $request->title_ru;
        $selected_article->title_en = $request->title_en;
        $selected_article->description_tm = $request->description_tm;
        $selected_article->description_ru = $request->description_ru;
        $selected_article->description_en = $request->description_en;
        $selected_article->event_date = $request->event_date;

        $selected_article->save();
        
        return redirect(route('mejlis_activities.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MejlisActivity::findOrFail($id)->delete();
        
        return redirect(route('mejlis_activities.index'));
    }
}
