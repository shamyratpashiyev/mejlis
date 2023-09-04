<?php

namespace App\Http\Controllers;

use App\Models\TkmConstitution;
use Illuminate\Http\Request;

class TkmConstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $constitutions_all = TkmConstitution::get();

        return view('admin.tkm_constitution.index',['constitutions_all' => $constitutions_all]);
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
        $selected_constitution = TkmConstitution::firstOrFail();

        return view('admin.tkm_constitution.edit',['selected_constitution' => $selected_constitution]);
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

        $selected_constitution = TkmConstitution::findOrFail($id);
        $selected_constitution->title_tm = $request->title_tm;
        $selected_constitution->title_ru = $request->title_ru;
        $selected_constitution->title_en = $request->title_en;
        $selected_constitution->content_tm = $request->content_tm;
        $selected_constitution->content_ru = $request->content_ru;
        $selected_constitution->content_en = $request->content_en;
        $selected_constitution->save();

        return redirect()->route('tkm_constitution.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
