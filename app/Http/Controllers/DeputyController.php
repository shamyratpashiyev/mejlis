<?php

namespace App\Http\Controllers;

use App\Models\Deputy;
use Illuminate\Http\Request;

class DeputyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deputies_all = Deputy::get();
        return view('admin.deputies.index', ['deputies_all' => $deputies_all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.deputies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $deputy = new Deputy();
        $deputy->full_name = $request->full_name;
        $deputy->email = $request->email;
        $deputy->position_tm = $request->position_tm;
        $deputy->position_ru = $request->position_ru;
        $deputy->position_en = $request->position_en;
        $deputy->biography_tm = $request->biography_tm;
        $deputy->biography_ru = $request->biography_ru;
        $deputy->biography_en = $request->biography_en;

        $deputy->save();

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
        $selected_deputy = Deputy::findOrFail($id);
        return view('admin.deputies.edit', ['selected_deputy' => $selected_deputy]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Deputy::findOrFail($id)->delete();
        
        return redirect(route('deputies.index'));
    }
}
