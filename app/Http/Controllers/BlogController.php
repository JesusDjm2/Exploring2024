<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tag;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::query()->with('tags')->get();
        return view('blogs.es.blogs.index', compact('blogs'));
    }
    public function listado()
    {
        $blogs = Blog::latest()->get();
        $tours = Tour::all();
        return view('blog-peru', compact('blogs', 'tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = new Blog();
        $tags = Tag::query()->pluck('nombre', 'id');
        return view('blogs.es.blogs.create', compact('blog', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:blogs',
            'descripcion' => 'required',
            'cuerpo' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'keywords' => 'nullable|string',
            'slug' => 'required|string',
            'tags' => 'nullable|array',
        ]);
        $blog = new Blog();
        $blog->nombre = $request->get('nombre');
        $blog->descripcion = $request->get('descripcion');
        $blog->cuerpo = $request->get('cuerpo');

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('img/blog'), $filename);
            $blog->img = '/img/blog/' . $filename;
        }
        $blog->keywords = $request->get('keywords');
        $blog->slug = $request->get('slug');
        $blog->save();
        $blog->tags()->sync(request('tags'));
        return redirect()->route('blogs.index', $blog->id)->with('success', 'El blog se ha creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blogses = Blog::where('id', '!=', $blog->id)->latest()->take(3)->get();
        $tours = Tour::all();
        $relacionados = Tour::latest()->take(4)->get();
        $relacionBlogPT = $blog->ptblogs;
        $relacionBlogEn = $blog->enblog;
        return view('blogs.es.blogs.show', compact('blog', 'blogses', 'tours', 'relacionados', 'relacionBlogPT', 'relacionBlogEn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::with('tags')->findOrFail($id);
        $tags = Tag::query()->pluck('nombre', 'id');
        return view('blogs.es.blogs.edit', compact('blog', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|unique:blogs,nombre,' . $id,
            'descripcion' => 'required',
            'cuerpo' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'keywords' => 'nullable|string',
            'slug' => 'required|string',
            'tags' => 'nullable|array',
        ]);
        $blog = Blog::findOrFail($id);
        $blog->nombre = $request->get('nombre');
        $blog->descripcion = $request->get('descripcion');
        $blog->cuerpo = $request->get('cuerpo');
        $blog->keywords = $request->get('keywords');
        $blog->slug = $request->get('slug');
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('img/blog'), $filename);
            $blog->img = '/img/blog/' . $filename;
        }

        $blog->save();
        $blog->tags()->sync(request('tags'));
        return redirect()->route('blogs.index')->with('success', 'El blog se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::query()->findOrFail($id);
        $blog->tags()->detach();
        if (file_exists(public_path($blog->img))) {
            unlink(public_path($blog->img));
        }
        $blog->delete();

        return redirect()->route('blogs.index')
            ->with('success', 'Blog borrado exitosamente!');
    }
}
