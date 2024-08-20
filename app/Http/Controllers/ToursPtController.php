<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\ToursPt;
use Illuminate\Http\Request;

class ToursPtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = ToursPt::all();
        return view('tourspt.index')->with('tours', $tours);
    }
    public function mostrar()
    {
        $tours = Tour::latest()->get();
        $relacionBlog = null; 
        return view('comecar', compact('tours', 'relacionBlog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tours = Tour::whereDoesntHave('tourPt')->get();
        return view('tourspt.create', compact('tours'));
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
        $tours = new ToursPt();

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
        return redirect('tourspt');
    }

    public function show($slug)
    {
        /* $tour = Toursen::where('slug', $slug)->firstOrFail(); */
        $tour = ToursPt::with('tourPt')->where('slug', $slug)->firstOrFail();
        $otrosTours = ToursPt::where('id', '!=', $tour->id)->inRandomOrder()->take(4)->get();
        $relacion = $tour->tourPt;
        $relacionBlog = null;
        $tours=ToursPt::all();
        return view('tourspt.show', compact('tour', 'otrosTours', 'relacion', 'relacionBlog', 'tours'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toursen  $toursen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = ToursPt::with('tourPt')->findOrFail($id);
        $es = Tour::all();
        return view('tourspt.edit', compact('tour', 'es'));
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
        $tour = ToursPt::find($id);

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
            if (ToursPt::where('slug', $newSlug)->where('id', '!=', $id)->exists()) {
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
        $tours = ToursPt::all();
        $tour->save();
        session()->flash('status', 'Tour actualizado exitosamente!');
        return view('tourspt.index', compact('tours'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toursen  $toursen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = ToursPt::find($id);
        $tour->delete();
        session()->flash('status', 'Tour borrado exitosamente!');
        return view('tourspt');
    }
}
