<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("comics.index", ['comics' => Comic::orderBy('id')->paginate(4)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* $data = $request->all();
        Comic::create($data); */

        $val_data = $request->validate([
            'title' => 'required|min:5|max:100',
            'thumb' => 'required|max:255',
            'type' => 'nullable|max:20',
            'series' => 'nullable|max:50',
            'sale_date' => 'nullable|max:10',
            'description' => 'nullable|max:500',
            'price' => 'required',
        ]);

        Comic::create($val_data);

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        /* $comic->update($request->all()); */
        $val_data = $request->validate([
            'title' => 'required|min:5|max:100',
            'thumb' => 'required|max:255',
            'type' => 'nullable|max:20',
            'series' => 'nullable|max:50',
            'sale_date' => 'nullable|max:10',
            'description' => 'nullable|max:500',
            'price' => 'required',
        ]);

        $comic->update($val_data);

        return to_route('comics.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}
