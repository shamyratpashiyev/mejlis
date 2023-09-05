<?php

namespace App\Http\Controllers;

use App\Models\TkmAvaza;
use App\Models\TkmCulture;
use App\Models\TkmEconomy;
use App\Models\TkmEducation;
use App\Models\TkmForeignPolicy;
use App\Models\TkmHistory;
use Illuminate\Http\Request;
use App\Models\TkmGeneralInformation;
use App\Models\TkmHealthcare;
use App\Models\TkmScience;
use App\Models\TkmSocialSphere;
use App\Models\TkmSport;
use App\Models\TkmTourism;
use Illuminate\Support\Facades\Route;

class TkmPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(){
        $this->current_route_name = explode('.',Route::currentRouteName())[0];
    }
    public function index()
    {
        switch($this->current_route_name){
            case 'general_information':
                $this->items_all = TkmGeneralInformation::get();
                break;
            case 'foreign_policy':
                $this->items_all = TkmForeignPolicy::get();
                break;
            case 'economy':
                $this->items_all = TkmEconomy::get();
                break;

            case 'social_sphere':
                $this->items_all = TkmSocialSphere::get();
                break;

            case 'healthcare':
                $this->items_all = TkmHealthcare::get();
                break;

            case 'education':
                $this->items_all = TkmEducation::get();
                break;

            case 'science':
                $this->items_all = TkmScience::get();
                break;

            case 'sport':
                $this->items_all = TkmSport::get();
                break;

            case 'culture':
                $this->items_all = TkmCulture::get();
                break;

            case 'tourism':
                $this->items_all = TkmTourism::get();
                break;

            case 'avaza':
                $this->items_all = TkmAvaza::get();
                break;
        }

        return view('admin.tkm_pages.index',$this->data);
    }

    

    public function edit(string $id)
    {
        switch($this->current_route_name){
            case 'general_information':
                $this->selected_item = TkmGeneralInformation::firstOrFail();
                break;
            case 'foreign_policy':
                $this->selected_item = TkmForeignPolicy::firstOrFail();
                break;
            case 'economy':
                $this->selected_item = TkmEconomy::firstOrFail();
                break;

            case 'social_sphere':
                $this->selected_item = TkmSocialSphere::firstOrFail();
                break;

            case 'healthcare':
                $this->selected_item = TkmHealthcare::firstOrFail();
                break;

            case 'education':
                $this->selected_item = TkmEducation::firstOrFail();
                break;

            case 'science':
                $this->selected_item = TkmScience::firstOrFail();
                break;

            case 'sport':
                $this->selected_item = TkmSport::firstOrFail();
                break;

            case 'culture':
                $this->selected_item = TkmCulture::firstOrFail();
                break;

            case 'tourism':
                $this->selected_item = TkmTourism::firstOrFail();
                break;

            case 'avaza':
                $this->selected_item = TkmAvaza::firstOrFail();
                break;
        }

        return view('admin.tkm_pages.edit',$this->data);
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
        
        $selected_item = '';

        switch($this->current_route_name){
            case 'general_information':
                $selected_item = TkmGeneralInformation::findOrFail($id);
                break;
            case 'foreign_policy':
                $selected_item = TkmForeignPolicy::findOrFail($id);
                break;
            case 'economy':
                $selected_item = TkmEconomy::findOrFail($id);
                break;

            case 'social_sphere':
                $selected_item = TkmSocialSphere::findOrFail($id);
                break;

            case 'healthcare':
                $selected_item = TkmHealthcare::findOrFail($id);
                break;

            case 'education':
                $selected_item = TkmEducation::findOrFail($id);
                break;

            case 'science':
                $selected_item = TkmScience::findOrFail($id);
                break;

            case 'sport':
                $selected_item = TkmSport::findOrFail($id);
                break;

            case 'culture':
                $selected_item = TkmCulture::findOrFail($id);
                break;

            case 'tourism':
                $selected_item = TkmTourism::findOrFail($id);
                break;

            case 'avaza':
                $selected_item = TkmAvaza::findOrFail($id);
                break;
        }

        
        $selected_item->title_tm = $request->title_tm;
        $selected_item->title_ru = $request->title_ru;
        $selected_item->title_en = $request->title_en;
        $selected_item->content_tm = $request->content_tm;
        $selected_item->content_ru = $request->content_ru;
        $selected_item->content_en = $request->content_en;
        $selected_item->save();

        return redirect()->route("{$this->current_route_name}.index");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
