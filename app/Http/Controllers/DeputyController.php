<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeputyStore;
use App\Models\Deputy;
use App\Models\Velayat;
use Illuminate\Http\Request;
use App\Models\ElectionDistrict;
use Illuminate\Support\Facades\Log;

class DeputyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deputies_all = Deputy::orderBy('created_at','DESC')->select(['id','fullname_tm','position_tm','birth_year_tm'])->get();
        return view('admin.deputies.index', ['deputies_all' => $deputies_all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $velayats_all = Velayat::get();
        $districts_all = ElectionDistrict::get();
        return view('admin.deputies.create',['districts_all' => $districts_all, 'velayats_all' => $velayats_all]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DeputyStore $request)
    {
        $deputy = new Deputy();
        $deputy->fullname_tm = $request->fullname_tm;
        $deputy->fullname_ru = $request->fullname_ru;
        $deputy->fullname_en = $request->fullname_en;
        $deputy->email = $request->email;
        $deputy->position_tm = $request->position_tm;
        $deputy->position_ru = $request->position_ru;
        $deputy->position_en = $request->position_en;
        $deputy->birth_year_tm = $request->birth_year_tm;
        $deputy->birth_year_ru = $request->birth_year_ru;
        $deputy->birth_year_en = $request->birth_year_en;
        $deputy->biography_tm = $request->biography_tm;
        $deputy->biography_ru = $request->biography_ru;
        $deputy->biography_en = $request->biography_en;
        $deputy->velayat_id = $request->velayat_id;
        $deputy->election_district_id = $request->district_id;

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
        $velayats_all = Velayat::get();
        $districts_all = ElectionDistrict::get();
        
        return view('admin.deputies.edit', ['selected_deputy' => $selected_deputy,'districts_all' => $districts_all,
                                             'velayats_all' => $velayats_all]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DeputyStore $request, string $id)
    {
        $selected_deputy = Deputy::findOrFail($id);
        $selected_deputy->fullname_tm = $request->fullname_tm;
        $selected_deputy->fullname_ru = $request->fullname_ru;
        $selected_deputy->fullname_en = $request->fullname_en;
        $selected_deputy->email = $request->email;
        $selected_deputy->position_tm = $request->position_tm;
        $selected_deputy->position_ru = $request->position_ru;
        $selected_deputy->position_en = $request->position_en;
        $selected_deputy->birth_year_tm = $request->birth_year_tm;
        $selected_deputy->birth_year_ru = $request->birth_year_ru;
        $selected_deputy->birth_year_en = $request->birth_year_en;
        $selected_deputy->biography_tm = $request->biography_tm;
        $selected_deputy->biography_ru = $request->biography_ru;
        $selected_deputy->biography_en = $request->biography_en;
        $selected_deputy->velayat_id = $request->velayat_id;
        $selected_deputy->election_district_id = $request->district_id;

        $selected_deputy->save();

        return redirect()->route('deputies.index');
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
