<?php

namespace App\Http\Controllers;

use App\Http\Requests\FriendshipGroupsStore;
use App\Models\FriendshipGroup;
use Illuminate\Http\Request;

class FriendshipGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups_all = FriendshipGroup::orderBy('created_at','DESC')->get();
        return view('admin.friendship_groups.index', ['groups_all' => $groups_all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.friendship_groups.create');
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
        $group->published_date = $request->published_date;

        $group->save();

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
        $selected_group = FriendshipGroup::findOrFail($id);

        return view('admin.friendship_groups.edit',['selected_group' => $selected_group]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FriendshipGroupsStore $request, string $id)
    {
        $group = FriendshipGroup::findOrFail($id);
        $group->title_tm = $request->title_tm;
        $group->title_ru = $request->title_ru;
        $group->title_en = $request->title_en;
        $group->description_tm = $request->description_tm;
        $group->description_ru = $request->description_ru;
        $group->description_en = $request->description_en;
        $group->published_date = $request->published_date;

        $group->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FriendshipGroup::findOrFail($id)->delete();
        return redirect(route('friendship_groups.index'));
    }
}
