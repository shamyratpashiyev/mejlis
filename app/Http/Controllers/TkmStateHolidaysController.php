<?php

namespace App\Http\Controllers;

use App\Models\TkmStateHolidays;
use Illuminate\Http\Request;

class TkmStateHolidaysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $state_holidays_all = TkmStateHolidays::get();

        return view('admin.tkm_state_holidays.index',['state_holidays_all' => $state_holidays_all]);
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
        $selected_state_holiday = TkmStateHolidays::firstOrFail();

        return view('admin.tkm_state_holidays.edit',['selected_state_holiday' => $selected_state_holiday]);
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

        $selected_state_holiday = TkmStateHolidays::findOrFail($id);
        $selected_state_holiday->title_tm = $request->title_tm;
        $selected_state_holiday->title_ru = $request->title_ru;
        $selected_state_holiday->title_en = $request->title_en;
        $selected_state_holiday->content_tm = $request->content_tm;
        $selected_state_holiday->content_ru = $request->content_ru;
        $selected_state_holiday->content_en = $request->content_en;
        $selected_state_holiday->save();

        return redirect()->route('tkm_state_holidays.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
