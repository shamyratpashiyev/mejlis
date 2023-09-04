<?php

namespace App\Http\Controllers;

use App\Models\TkmPopulation;
use Illuminate\Http\Request;

class TkmPopulationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $populations_all = TkmPopulation::get();

        return view('admin.tkm_population.index',['populations_all' => $populations_all]);
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
        $selected_population = TkmPopulation::firstOrFail();

        return view('admin.tkm_population.edit',['selected_population' => $selected_population]);
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

        $selected_population = TkmPopulation::findOrFail($id);
        $selected_population->title_tm = $request->title_tm;
        $selected_population->title_ru = $request->title_ru;
        $selected_population->title_en = $request->title_en;
        $selected_population->content_tm = $request->content_tm;
        $selected_population->content_ru = $request->content_ru;
        $selected_population->content_en = $request->content_en;
        $selected_population->save();

        return redirect()->route('tkm_population.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
