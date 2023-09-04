<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TkmStateSymbols;
use Illuminate\Support\Facades\File;

class TkmStateSymbolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $state_symbols_all = TkmStateSymbols::get();

        return view('admin.tkm_state_symbols.index',['state_symbols_all' => $state_symbols_all]);
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
        $selected_state_symbol = TkmStateSymbols::firstOrFail();

        return view('admin.tkm_state_symbols.edit',['selected_state_symbol' => $selected_state_symbol]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'flag_title_tm' => 'required',
            'flag_title_ru' => 'required',
            'flag_title_en' => 'required',
            'flag_text_tm' => 'required',
            'flag_text_ru' => 'required',
            'flag_text_en' => 'required',
            'emblem_title_tm' => 'required',
            'emblem_title_ru' => 'required',
            'emblem_title_en' => 'required',
            'emblem_text_tm' => 'required',
            'emblem_text_ru' => 'required',
            'emblem_text_en' => 'required',
            'anthem_description_title_tm' => 'required',
            'anthem_description_title_ru' => 'required',
            'anthem_description_title_en' => 'required',
            'anthem_description_text_tm' => 'required',
            'anthem_description_text_ru' => 'required',
            'anthem_description_text_en' => 'required',
            'anthem_title_tm' => 'required',
            'anthem_title_ru' => 'required',
            'anthem_title_en' => 'required',
            'anthem_text_tm' => 'required',
            'anthem_text_ru' => 'required',
            'anthem_text_en' => 'required',
        ]);

        $selected_state_symbol = TkmStateSymbols::findOrFail($id);
        
        $selected_state_symbol->flag_title_tm = $request->flag_title_tm;
        $selected_state_symbol->flag_title_ru = $request->flag_title_ru;
        $selected_state_symbol->flag_title_en = $request->flag_title_en;
        $selected_state_symbol->flag_text_tm = $request->flag_text_tm;
        $selected_state_symbol->flag_text_ru = $request->flag_text_ru;
        $selected_state_symbol->flag_text_en = $request->flag_text_en;
        $selected_state_symbol->emblem_title_tm = $request->emblem_title_tm;
        $selected_state_symbol->emblem_title_ru = $request->emblem_title_ru;
        $selected_state_symbol->emblem_title_en = $request->emblem_title_en;
        $selected_state_symbol->emblem_text_tm = $request->emblem_text_tm;
        $selected_state_symbol->emblem_text_ru = $request->emblem_text_ru;
        $selected_state_symbol->emblem_text_en = $request->emblem_text_en;
        $selected_state_symbol->anthem_description_title_tm = $request->anthem_description_title_tm;
        $selected_state_symbol->anthem_description_title_ru = $request->anthem_description_title_ru;
        $selected_state_symbol->anthem_description_title_en = $request->anthem_description_title_en;
        $selected_state_symbol->anthem_description_text_tm = $request->anthem_description_text_tm;
        $selected_state_symbol->anthem_description_text_ru = $request->anthem_description_text_ru;
        $selected_state_symbol->anthem_description_text_en = $request->anthem_description_text_en;
        $selected_state_symbol->anthem_title_tm = $request->anthem_title_tm;
        $selected_state_symbol->anthem_title_ru = $request->anthem_title_ru;
        $selected_state_symbol->anthem_title_en = $request->anthem_title_en;
        $selected_state_symbol->anthem_text_tm = $request->anthem_text_tm;
        $selected_state_symbol->anthem_text_ru = $request->anthem_text_ru;
        $selected_state_symbol->anthem_text_en = $request->anthem_text_en;

        if($request->hasFile('flag_img')){
            File::delete(public_path() . '/' . $selected_state_symbol->flag_img);
            $selected_state_symbol->flag_img = $request->file('flag_img')->store('/uploaded_files/tkm_state_symbols');
        }

        if($request->hasFile('emblem_img')){
            File::delete(public_path() . '/' . $selected_state_symbol->emblem_img);
            $selected_state_symbol->emblem_img = $request->file('emblem_img')->store('/uploaded_files/tkm_state_symbols');
        }
        
        $selected_state_symbol->save();

        return redirect()->route('tkm_state_symbols.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
