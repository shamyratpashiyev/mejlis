<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Http\Request;
use App\Http\Requests\CodesStore;

class CodesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $codes_all = Code::orderBy('created_at','DESC')->get();
        return view('admin.codes.index', ['codes_all' => $codes_all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.codes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CodesStore $request)
    {
        $code = new Code();
        $code->title_tm = $request->title_tm;
        $code->title_ru = $request->title_ru;
        $code->title_en = $request->title_en;
        $code->description_tm = $request->description_tm;
        $code->description_ru = $request->description_ru;
        $code->description_en = $request->description_en;
        $code->published_date = $request->published_date;

        $code->save();

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
        $selected_code = Code::findOrFail($id);

        return view('admin.codes.edit',['selected_code' => $selected_code]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CodesStore $request, string $id)
    {
        $code = Code::findOrFail($id);
        $code->title_tm = $request->title_tm;
        $code->title_ru = $request->title_ru;
        $code->title_en = $request->title_en;
        $code->description_tm = $request->description_tm;
        $code->description_ru = $request->description_ru;
        $code->description_en = $request->description_en;
        $code->published_date = $request->published_date;

        $code->save();

        return redirect()->route('codes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Code::findOrFail($id)->delete();
        return redirect(route('codes.index'));
    }
}
