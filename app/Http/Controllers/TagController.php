<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Tour;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('blogs.es.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = new Tag();
        return view('blogs.es.tags.create', compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tag::$rules);
        $tag = new Tag;
        $tag->nombre = $request->input('nombre');
        $tag->slug = $request->input('slug');
        $tag->save();

        return redirect()->route('tags.index')
            ->with('success', 'Tag creado exitosamente!');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $blogs = $tag->blogs()->get();
        $coincidencias = $tag->blogs()->count();
        $tours=Tour::all();
        return view('blogs.es.tags.show', compact('tag','blogs','coincidencias', 'tours'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::query()->find($id);
        return view('blogs.es.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        request()->validate(Tag::$rules);
        $tag->update($request->all());
        return redirect()->route('tags.index')
            ->with('success', 'Tag actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::query()->find($id);
        $tag->delete();
        return redirect()->route('tags.index')
            ->with('success', 'Tag borrado exitosamente!');
    }
}
