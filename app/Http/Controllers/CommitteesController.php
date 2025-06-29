<?php

namespace App\Http\Controllers;

use App\Models\Deputy;
use App\Models\Committee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\CommitteesStore;

class CommitteesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $committees_all = Committee::with(['committee_head:id,fullname_tm'])->select(['id','name_tm','created_at','committee_head_id'])->orderBy('created_at','DESC')->get();
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
    public function store(CommitteesStore $request)
    {
        $committee = new Committee();
        $committee->name_tm = $request->name_tm;
        $committee->name_ru = $request->name_ru;
        $committee->name_en = $request->name_en;
        $committee->committee_head_id = $request->committee_head_id;
        $committee->save();

        $committee->deputies()->sync($request->committee_members_id);

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
        $deputies_all = Deputy::get();
        $selected_committee = Committee::findOrFail($id);
        return view('admin.committees.edit', ['selected_committee' => $selected_committee,'deputies_all' => $deputies_all]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommitteesStore $request, string $id)
    {
        $selected_committee = Committee::findOrFail($id);
        $selected_committee->name_tm = $request->name_tm;
        $selected_committee->name_ru = $request->name_ru;
        $selected_committee->name_en = $request->name_en;
        $selected_committee->committee_head_id = $request->committee_head_id;

        $selected_committee->save();
        $selected_committee->deputies()->sync($request->committee_members_id);

        return redirect()->route('committees.index');
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
