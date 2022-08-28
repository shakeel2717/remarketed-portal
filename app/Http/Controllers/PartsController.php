<?php

namespace App\Http\Controllers;

use App\Models\PartCategory;
use App\Models\Parts;
use Illuminate\Http\Request;

class PartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = PartCategory::where('status', true)->get();
        return view('part.index', compact('categories'));
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
            'category_id' => 'required|integer|exists:part_categories,id',
            'name' => 'required|string|max:255',
            'stock' => 'required|integer|min:1',
            'min_price' => 'required|integer|min:1',
            'max_price' => 'required|integer|min:1',
        ]);

        $part = new Parts();
        $part->part_categories_id = $validated['category_id'];
        $part->title = $validated['name'];
        $part->stock = $validated['stock'];
        $part->min_price = $validated['min_price'];
        $part->max_price = $validated['max_price'];
        $part->save();

        return redirect()->back()->with('success', 'New Part Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parts  $parts
     * @return \Illuminate\Http\Response
     */
    public function show(Parts $parts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parts  $parts
     * @return \Illuminate\Http\Response
     */
    public function edit(Parts $parts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parts  $parts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parts $parts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parts  $parts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parts $parts)
    {
        //
    }
}
