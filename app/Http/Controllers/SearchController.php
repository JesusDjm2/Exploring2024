<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tour;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
{
    $name = $request->input('name');
    $respuesta = Tour::where('nombre', 'LIKE', "%$name%")->get();
    $cantidadCoincidencias = $respuesta->count(); // Contar la cantidad de coincidencias
    $tours = Tour::all();

    if ($respuesta->isNotEmpty()) {
        $respuestas = [
            'respuestas' => $respuesta,
            'nombre' => $name,
            'tours' => $tours,
            'cantidadCoincidencias' => $cantidadCoincidencias, // Pasar la cantidad de coincidencias a la vista
        ];
        return view('es.search', $respuestas);
    } else {
        return view('es.noresults', compact('name', 'tours'));
    }
}

    public function searchblog(Request $request)
    {
        $name = $request->all();
        $nombre = $name['name'];
        $blog = Blog::where('nombre', 'LIKE', "%$nombre%")->get();
        $tours = Tour::all();
        if (count($blog) != 0) {
            $blogs = [
                'blogs' => $blog,
            ];

            return view('blogs.es.blogs.search', ['blogs' => $blog, 'tours' => $tours])
                ->with('nombre', $nombre);
        } else {
            return view('blogs.es.blogs.noresults', compact('nombre', 'tours'));
        }
    }
}
