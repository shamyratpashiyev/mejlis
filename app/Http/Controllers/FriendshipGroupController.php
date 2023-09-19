<?php

namespace App\Http\Controllers;

use App\Models\Deputy;
use Illuminate\Http\Request;
use App\Models\FriendshipGroup;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Http\Requests\FriendshipGroupsStore;

class FriendshipGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups_all = FriendshipGroup::orderBy('created_at','DESC')->select(DB::raw('id, title_tm, published_date, SUBSTRING(description_tm, 1, 150) AS description_tm'))->get();
        return view('admin.friendship_groups.index', ['groups_all' => $groups_all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $deputies_all = Deputy::get();
        return view('admin.friendship_groups.create',['deputies_all' => $deputies_all]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FriendshipGroupsStore $request)
    {
        $group = new FriendshipGroup();
        $group->title_tm = $request->title_tm;
        $group->title_ru = $request->title_ru;
        $group->title_en = $request->title_en;
        $group->description_tm = $request->description_tm;
        $group->description_ru = $request->description_ru;
        $group->description_en = $request->description_en;
        $group->country_1_tm = $request->country_1_tm;
        $group->country_1_ru = $request->country_1_ru;
        $group->country_1_en = $request->country_1_en;
        $group->country_2_tm = $request->country_2_tm;
        $group->country_2_ru = $request->country_2_ru;
        $group->country_2_en = $request->country_2_en;
        $group->published_date = $request->published_date;

        if($request->hasFile('flag_1')){
            $group->flag_1 = $request->file('flag_1')->store('/uploaded_files/friendship_group');
        }
        if($request->hasFile('flag_2')){
            $group->flag_2 = $request->file('flag_2')->store('/uploaded_files/friendship_group');
        }

        $group->save();
        $group->members()->sync($request->group_members_id);

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
        $selected_group = FriendshipGroup::findOrFail($id);

        return view('admin.friendship_groups.edit',['selected_group' => $selected_group, 'deputies_all' => $deputies_all]);
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
            'description_tm' => 'required',
            'description_ru' => 'required',
            'description_en' => 'required',
            'country_1_tm' => 'required',
            'country_1_ru' => 'required',
            'country_1_en' => 'required',
            'country_2_tm' => 'required',
            'country_2_ru' => 'required',
            'country_2_en' => 'required',
            'published_date' => 'required|date'
        ]);

        $group = FriendshipGroup::findOrFail($id);
        $group->title_tm = $request->title_tm;
        $group->title_ru = $request->title_ru;
        $group->title_en = $request->title_en;
        $group->description_tm = $request->description_tm;
        $group->description_ru = $request->description_ru;
        $group->description_en = $request->description_en;
        $group->country_1_tm = $request->country_1_tm;
        $group->country_1_ru = $request->country_1_ru;
        $group->country_1_en = $request->country_1_en;
        $group->country_2_tm = $request->country_2_tm;
        $group->country_2_ru = $request->country_2_ru;
        $group->country_2_en = $request->country_2_en;
        $group->published_date = $request->published_date;

        if($request->hasFile('flag_1')){
            File::delete(public_path() . '/' . $group->flag_1);
            $group->flag_1 = $request->file('flag_1')->store('/uploaded_files/friendship_group');
        }

        if($request->hasFile('flag_2')){
            File::delete(public_path() . '/' . $group->flag_2);
            $group->flag_2 = $request->file('flag_2')->store('/uploaded_files/friendship_group');
        }
        
        $group->save();
        $group->members()->sync($request->group_members_id);

        return redirect()->route('friendship_groups.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $selected_group = FriendshipGroup::findOrFail($id);
        File::delete(public_path() . '/' . $selected_group->flag_1);
        File::delete(public_path() . '/' . $selected_group->flag_2);
        $selected_group->delete();
        return redirect(route('friendship_groups.index'));
    }
}
