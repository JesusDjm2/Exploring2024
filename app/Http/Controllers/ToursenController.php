<?php

namespace App\Http\Controllers;

use App\Models\Toursen;
use App\Models\Tour;
use Illuminate\Http\Request;

class ToursenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Toursen::all();
        return view('toursen.index')->with('tours', $tours);
    }
    public function mostrar()
    {
        $tours = Toursen::orderBy('created_at', 'desc')->get();
        $relacionBlog = null;
        return view('index', compact('tours', 'relacionBlog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tours = Tour::whereDoesntHave('tourEn')->get();
        return view('toursen.create', compact('tours'));
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
            'tour_id' => 'required|exists:tours,id',
        ]);
        $tours = new Toursen();

        $tours->id = $request->get('id');
        $tours->nombre = $request->get('nombre');
        /* $tours->descripcion = $request->get('descripcion'); */

        /* $tours->mapa=$request->get('mapa'); */

        $tours->resumen = $request->get('resumen');
        $tours->detallado = $request->get('detallado');
        $tours->contenido = $request->get('contenido');
        $tours->incluidos = $request->get('incluidos');
        $tours->importante = $request->get('importante');

        $tours->precio = $request->get('precio');
        $tours->dias = $request->get('dias');
        $tours->ubicacion = $request->get('ubicacion');

        $img = $request->file('img');
        $rutaImg = public_path("img/buscador/");
        $imgTour = $img->getClientOriginalName();
        $img->move($rutaImg, $imgTour);
        $tours['img'] = "img/buscador/$imgTour";

        $cat = $request->get('categoria');
        $tours->categoria = implode(', ', $cat);
        $tours->keywords = $request->get('keywords');
        $tours->slug = $request->get('slug');
        $tours->clase = $request->get('clase');

        $tours->tour_id = $request->tour_id;

        $tours->save();
        session()->flash('status', 'Tour creado exitosamente!');
        return redirect('toursen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toursen  $toursen
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $tour = Toursen::with('tourEs')->where('slug', $slug)->firstOrFail();
        $otrosTours = Toursen::where('id', '!=', $tour->id)->inRandomOrder()->take(4)->get();
        $relacion = $tour->tourEs;
        $relacionBlog = null;
        $tours=Toursen::all();
        return view('toursen.show', compact('tour', 'otrosTours', 'relacion', 'relacionBlog', 'tours'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toursen  $toursen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Toursen::find($id);
        $es = Tour::all();
        return view('toursen.edit', compact('tour', 'es'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toursen  $toursen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tour = Toursen::find($id);

        $tour->nombre = $request->get('nombre');
        /* $tour->descripcion = $request->get('descripcion'); */

        $tour->mapa = $request->get('mapa');

        $tour->resumen = $request->get('resumen');
        $tour->detallado = $request->get('detallado');
        $tour->contenido = $request->get('contenido');
        $tour->incluidos = $request->get('incluidos');
        $tour->importante = $request->get('importante');

        $tour->precio = $request->get('precio');
        $tour->dias = $request->get('dias');
        $cat = $request->get('categoria');
        $tour->categoria = implode(',', $cat);
        $tour->ubicacion = $request->get('ubicacion');
        $tour->keywords = $request->get('keywords');
        $tour->clase = $request->get('clase');

        if ($request->has('slug') && $request->slug !== $tour->slug) {
            // Nuevo slug proporcionado en el formulario de actualización
            $newSlug = $request->get('slug');

            // Verificar si el nuevo slug ya existe en la base de datos
            if (Toursen::where('slug', $newSlug)->where('id', '!=', $id)->exists()) {
                // Si el nuevo slug ya existe, no hacer nada y mantener el valor actual del slug
            } else {
                // Si el nuevo slug no existe, actualizar el campo slug
                $tour->slug = $newSlug;
            }
        }

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $rutaImg = public_path("img/buscador/");
            $imgTour = $img->getClientOriginalName();
            $img->move($rutaImg, $imgTour);
            $tour->img = "img/buscador/$imgTour";
        }
        if ($request->has('tour_id')) {
            $tour->tour_id = $request->tour_id;
        } else {
            $tour->tour_id = null;
        }

        $tour->save();
        session()->flash('status', 'Tour actualizado exitosamente!');
        return redirect('/toursen');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toursen  $toursen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = Toursen::find($id);
        $tour->delete();
        session()->flash('status', 'Tour borrado exitosamente!');
        return redirect('/toursen');
    }
}
