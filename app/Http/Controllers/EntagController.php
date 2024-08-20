<?php

namespace App\Http\Controllers;

use App\Models\Entag;
use Illuminate\Http\Request;

class EntagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Entag::all();
        return view('blogs.en.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = new Entag();
        return view('blogs.en.tags.create', compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Entag::$rules);
        $tag = new Entag;
        $tag->nombre = $request->input('nombre');
        $tag->slug = $request->input('slug');
        $tag->save();

        return redirect()->route('entags.index')
            ->with('success', 'Tag en inglés creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entag  $entag
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $tag = Entag::where('slug', $slug)->firstOrFail();
        $blogs = $tag->enblogs()->get();
        $coincidencias = $tag->enblogs()->count();
		$relacionBlog=null;
        return view('blogs.en.tags.show', compact('tag','blogs','coincidencias','relacionBlog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entag  $entag
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Entag::query()->find($id);
        return view('blogs.en.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entag  $entag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entag $entag)
    {
        request()->validate(Entag::$rules);
        $entag->update($request->all());
        return redirect()->route('entags.index')
            ->with('success', 'Tag actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entag  $entag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Entag::query()->find($id);
        $tag->delete();
        return redirect()->route('entags.index')
            ->with('success', 'Tag borrado exitosamente!');
    }
}
