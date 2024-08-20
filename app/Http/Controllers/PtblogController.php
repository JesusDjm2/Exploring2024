<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ptblog;
use App\Models\tagPt;
use App\Models\Tour;
use App\Models\ToursPt;
use Illuminate\Http\Request;

class PtblogController extends Controller
{
    public function index()
    {
        $blogs = ptblog::query()->with('tags')->get();
        return view('blogs.pt.blogs.index', compact('blogs'));
    }
    public function listado()
    {
        $blogs = ptblog::latest()->get();
        $relacionBlog = null;
        $tours=ToursPt::all();
        return view('blogs.pt.blog', compact('blogs', 'relacionBlog', 'tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = new ptblog();
        $tags = tagPt::query()->pluck('nombre', 'id');
        $relacionados = ptblog::pluck('blog_id')->toArray();
        $relaciones = Blog::whereNotIn('id', $relacionados)->pluck('nombre', 'id');
        return view('blogs.pt.blogs.create', compact('blog', 'tags', 'relaciones'));
    }

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
            'blog_id' => 'nullable|exists:blogs,id',
        ]);
        $blog = new ptblog();
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
        if ($request->filled('blog_id')) {
            $blog->blog_id = $request->get('blog_id');
        }
        $blog->save();
        $blog->tags()->sync(request('tags'));
        return redirect()->route('blogspt.index', $blog->id)->with('success', 'El blog se ha creado correctamente.');
    }

    public function show($slug)
    {
        $blog = ptblog::where('slug', $slug)->firstOrFail();
        $blogses = ptblog::where('id', '!=', $blog->id)->latest()->take(3)->get();
        $relacionados = ToursPt::latest()->take(4)->get();
        $relacionBlog = $blog->blog;
        $tours = ToursPt::all();
        return view('blogs.pt.blogs.show', compact('blog', 'blogses', 'relacionados', 'relacionBlog', 'tours'));
    }

    public function edit($id)
    {
        $blog = ptblog::with('tags')->findOrFail($id);
        $tags = tagPt::query()->pluck('nombre', 'id');
        $relacionado = $blog->blog;

        if ($relacionado) {
            $relaciones = collect([$relacionado->id => $relacionado->nombre])->merge(Blog::where('id', '!=', $relacionado->id)->pluck('nombre', 'id'));
        } else {
            $relaciones = Blog::pluck('nombre', 'id');
        }
        return view('blogs.pt.blogs.edit', compact('blog', 'tags', 'relaciones'));
    }

    public function update(Request $request, $id)
    { {
            $request->validate([
                'nombre' => 'required|unique:blogs,nombre,' . $id,
                'descripcion' => 'required',
                'cuerpo' => 'required',
                'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'keywords' => 'nullable|string',
                'slug' => 'required|string',
                'tags' => 'nullable|array',
            ]);
            $blog = ptblog::findOrFail($id);
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
            return redirect()->route('blogspt.index')->with('success', 'El blog se ha actualizado correctamente.');
        }
    }

    public function destroy($id)
    {
        $blog = ptblog::query()->findOrFail($id);
        $blog->tags()->detach();
        if (file_exists(public_path($blog->img))) {
            unlink(public_path($blog->img));
        }
        $blog->delete();

        return redirect()->route('blogspt.index')
            ->with('success', 'Blog borrado exitosamente!');
    }
}
