<?php

namespace App\Http\Controllers;

use App\Models\Convocation;
use Illuminate\Http\Request;

class ConvocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $convocations_all = Convocation::get();
        return view('admin.convocations.index', ['convocations_all' => $convocations_all]);
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
        $selected_convocation = Convocation::findOrFail($id);
        return view('admin.convocations.edit', ['selected_convocation'=> $selected_convocation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_tm' => 'required',
            'name_ru' => 'required',
            'name_en' => 'required',
            'convocation_number' => 'required|numeric',
        ]);

        $convocation = Convocation::findOrFail($id);
        $convocation->name_tm = $request->name_tm;
        $convocation->name_ru = $request->name_ru;
        $convocation->name_en = $request->name_en;
        $convocation->convocation_number = $request->convocation_number;

        $convocation->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       //
    }
}
