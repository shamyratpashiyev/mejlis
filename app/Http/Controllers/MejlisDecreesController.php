<?php

namespace App\Http\Controllers;

use App\Http\Requests\MejlisDecreesStore;
use App\Models\MejlisDecree;
use Illuminate\Http\Request;

class MejlisDecreesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $decrees_all = MejlisDecree::get();
        return view('admin.mejlis_decrees.index', ['decrees_all' => $decrees_all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mejlis_decrees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MejlisDecreesStore $request)
    {
        $decree = new MejlisDecree();
        $decree->title_tm = $request->title_tm;
        $decree->title_ru = $request->title_ru;
        $decree->title_en = $request->title_en;
        $decree->description_tm = $request->description_tm;
        $decree->description_ru = $request->description_ru;
        $decree->description_en = $request->description_en;
        $decree->published_date = $request->published_date;

        $decree->save();

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
        $selected_decree = MejlisDecree::findOrFail($id);

        return view('admin.mejlis_decrees.edit',['selected_decree' => $selected_decree]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MejlisDecreesStore $request, string $id)
    {
        $decree = MejlisDecree::findOrFail($id);
        $decree->title_tm = $request->title_tm;
        $decree->title_ru = $request->title_ru;
        $decree->title_en = $request->title_en;
        $decree->description_tm = $request->description_tm;
        $decree->description_ru = $request->description_ru;
        $decree->description_en = $request->description_en;
        $decree->published_date = $request->published_date;

        $decree->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MejlisDecree::findOrFail($id)->delete();
        return redirect(route('mejlis_decrees.index'));
    }
}
