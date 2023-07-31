<?php

namespace App\Http\Controllers;

use App\Http\Requests\LawsStore;
use App\Models\Law;
use Illuminate\Http\Request;

class LawsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laws_all = Law::orderBy('created_at','DESC')->get();
        return view('admin.laws.index', ['laws_all' => $laws_all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.laws.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LawsStore $request)
    {
        $law = new Law();
        $law->title_tm = $request->title_tm;
        $law->title_ru = $request->title_ru;
        $law->title_en = $request->title_en;
        $law->description_tm = $request->description_tm;
        $law->description_ru = $request->description_ru;
        $law->description_en = $request->description_en;
        $law->published_date = $request->published_date;

        $law->save();

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
        $selected_law = Law::findOrFail($id);

        return view('admin.laws.edit',['selected_law' => $selected_law]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LawsStore $request, string $id)
    {
        $law = Law::findOrFail($id);
        $law->title_tm = $request->title_tm;
        $law->title_ru = $request->title_ru;
        $law->title_en = $request->title_en;
        $law->description_tm = $request->description_tm;
        $law->description_ru = $request->description_ru;
        $law->description_en = $request->description_en;
        $law->published_date = $request->published_date;

        $law->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Law::findOrFail($id)->delete();
        return redirect(route('laws.index'));
    }
}
