<?php

namespace App\Http\Controllers;

use App\Models\PartCategory;
use Illuminate\Http\Request;

class PartCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);

        $category = new PartCategory();
        $category->category = $validated['name'];
        $category->save();

        return redirect()->back()->with('success', 'Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PartCategory  $partCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PartCategory $partCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PartCategory  $partCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PartCategory $partCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PartCategory  $partCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PartCategory $partCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PartCategory  $partCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PartCategory $partCategory)
    {
        //
    }
}
