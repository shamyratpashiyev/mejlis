<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ElectionDistrict;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ElectionDistrictStore;

class ElectionDistrictController extends Controller
{
    public function index()
    {
        $districts_all = ElectionDistrict::orderBy('created_at','DESC')->select(DB::raw('id, name_tm, created_at, SUBSTRING(borders_tm, 1, 150) AS borders_tm'))->get();
        return view('admin.election_districts.index', ['districts_all' => $districts_all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.election_districts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ElectionDistrictStore $request)
    {
        $district = new ElectionDistrict();
        $district->name_tm = $request->name_tm;
        $district->name_ru = $request->name_ru;
        $district->name_en = $request->name_en;
        $district->borders_tm = $request->borders_tm;
        $district->borders_ru = $request->borders_ru;
        $district->borders_en = $request->borders_en;
        $district->district_number = $request->district_number;

        $district->save();

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
        $selected_district = ElectionDistrict::findOrFail($id);
        return view('admin.election_districts.edit', ['selected_district' => $selected_district]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ElectionDistrictStore $request, string $id)
    {
        $selected_district = ElectionDistrict::findOrFail($id);
        
        $selected_district->name_tm = $request->name_tm;
        $selected_district->name_ru = $request->name_ru;
        $selected_district->name_en = $request->name_en;
        $selected_district->borders_tm = $request->borders_tm;
        $selected_district->borders_ru = $request->borders_ru;
        $selected_district->borders_en = $request->borders_en;
        $selected_district->district_number = $request->district_number;

        $selected_district->save();

        return redirect(route('election_districts.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ElectionDistrict::findOrFail($id)->delete();
        
        return redirect(route('election_districts.index'));
    }
}
