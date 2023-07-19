<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\Deputy;
use Illuminate\Http\Request;

class CommitteesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $committees_all = Committee::get();
        return view('admin.committees.index', ['committees_all' => $committees_all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $deputies_all = Deputy::get();
        return view('admin.committees.create', ['deputies_all' => $deputies_all]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $committee = new Committee();
        $committee->name_tm = $request->name_tm;
        $committee->name_ru = $request->name_ru;
        $committee->name_en = $request->name_en;
        $committee->committee_head_id = $request->committee_head_id;

        $committee->save();

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
        //
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
        Committee::findOrFail($id)->delete();
        
        return redirect(route('committees.index'));
    }
}
