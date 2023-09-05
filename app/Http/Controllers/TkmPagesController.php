<?php

namespace App\Http\Controllers;

use App\Models\TkmHistory;
use Illuminate\Http\Request;

class TkmPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $histories_all = TkmHistory::get();

        // return view('admin.tkm_history.index',['histories_all' => $histories_all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $selected_history = TkmHistory::firstOrFail();

        return view('admin.tkm_history.edit',['selected_history' => $selected_history]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title_tm' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
            'content_tm' => 'required',
            'content_ru' => 'required',
            'content_en' => 'required',
        ]);

        $selected_history = TkmHistory::findOrFail($id);
        $selected_history->title_tm = $request->title_tm;
        $selected_history->title_ru = $request->title_ru;
        $selected_history->title_en = $request->title_en;
        $selected_history->content_tm = $request->content_tm;
        $selected_history->content_ru = $request->content_ru;
        $selected_history->content_en = $request->content_en;
        $selected_history->save();

        return redirect()->route('tkm_history.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
