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
            'number' => 'required',
        ]);

        $convocation = Convocation::findOrFail($id);
        $convocation->number = $request->number;

        $convocation->save();

        return redirect()->back();
    }

}
