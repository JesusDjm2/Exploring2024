<?php

namespace App\Http\Controllers;

use App\Models\tagPt;
use App\Models\ToursPt;
use Illuminate\Http\Request;

class TagPtController extends Controller
{
    public function index()
    {
        $tags = tagPt::all();
        return view('blogs.pt.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = new tagPt();
        return view('blogs.pt.tags.create', compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(tagPt::$rules);
        $tag = new tagPt;
        $tag->nombre = $request->input('nombre');
        $tag->slug = $request->input('slug');
        $tag->save();

        return redirect()->route('ptags.index')
            ->with('success', 'Tag creado exitosamente!');
    }
    public function show($slug)
    {
        $tag = tagPt::where('slug', $slug)->firstOrFail();
        $blogs = $tag->blogs()->get();
        $coincidencias = $tag->blogs()->count();
        $tours = ToursPt::all();
        $relacionBlog=null;
        return view('blogs.pt.tags.show', compact('tag', 'blogs', 'coincidencias', 'tours', 'relacionBlog'));
    }

    public function edit($id)
    {
        $tag = tagPt::query()->find($id);
        return view('blogs.pt.tags.edit', compact('tag'));
    }

    public function update(Request $request, tagPt $tag)
    {
        request()->validate(tagPt::$rules);
        $tag->update($request->all());
        return redirect()->route('ptags.index')
            ->with('success', 'Tag actualizado exitosamente!');
    }

    public function destroy($id)
    {
        $tag = tagPt::query()->find($id);
        $tag->delete();
        return redirect()->route('ptags.index')
            ->with('success', 'Tag borrado exitosamente!');
    }
}
