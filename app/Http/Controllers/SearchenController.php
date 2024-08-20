<?php

namespace App\Http\Controllers;

use App\Models\Enblog;
use App\Models\Toursen;
use App\Models\ToursPt;
use Illuminate\Http\Request;

class SearchenController extends Controller
{
    public function search(Request $request)
    {
        $name = $request->all();
        $nombre = $name['name'];
        $respuesta = Toursen::where('nombre', 'LIKE', "%$nombre%")->get();
        $relacionBlog = null;
        $cantidadCoincidencias = $respuesta->count();
        if (count($respuesta) != 0) {
            $respuestas = [
                'respuestas' => $respuesta,
                'nombre' => $nombre,
                'relacionBlog' => $relacionBlog,
                'cantidadCoincidencias' => $cantidadCoincidencias,
            ];

            return view('en.search', $respuestas);
        } else {
            return view('en.noresults', compact('nombre', 'relacionBlog'));
        }
    }
    public function searchblog(Request $request)
    {
        $name = $request->all();
        $nombre = $name['name'];
        $blog = Enblog::where('nombre', 'LIKE', "%$nombre%")->get();
        if (count($blog) != 0) {
            $blogs = [
                'respuestas' => $blog,
            ];

            return view('blogs.en..blogs.search', ['blogs' => $blog])
                ->with('nombre', $nombre);
        } else {
            return view('blogs.en.blogs.noresults', compact('nombre'));
        }
    }

    public function searchpt(Request $request)
    {
        $name = $request->all();
        $nombre = $name['name'];
        $respuesta = ToursPt::where('nombre', 'LIKE', "%$nombre%")->get();
        $relacionBlog = null;
        if (count($respuesta) != 0) {
            $respuestas = [
                'respuestas' => $respuesta,
                'nombre' => $nombre,
                'relacionBlog' => $relacionBlog,
            ];

            return view('tourspt.search', $respuestas);
        } else {
            return view('tourspt.noresults', compact('nombre', 'relacionBlog'));
        }
    }
}
