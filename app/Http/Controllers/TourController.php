<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Toursen;
use App\Models\User;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::latest()->get();
        return view('tours.index')->with('tours', $tours);
    }
    public function mostrar()
    {
        $tours = Tour::latest()->get();
        return view('inicio')->with('tours', $tours);
    }
    public function users()
    {
        $users = User::all();
        return view('auth.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tours = new tour();

        $tours->id = $request->get('id');
        $tours->nombre = $request->get('nombre');
        $tours->descripcion = $request->get('descripcion');

        $tours->contenido = $request->get('contenido');
        $tours->resumen = $request->get('resumen');
        $tours->detallado = $request->get('detallado');
        $tours->incluidos = $request->get('incluidos');
        $tours->importante = $request->get('importante');

        $tours->precio = $request->get('precio');
        $tours->dias = $request->get('dias');
        $tours->ubicacion = $request->get('ubicacion');
        $tours->mapa = $request->get('mapa');

        $img = $request->file('img');
        $rutaImg = public_path("img/buscador/");
        $imgTour = $img->getClientOriginalName();
        $img->move($rutaImg, $imgTour);
        $tours['img'] = "img/buscador/$imgTour";

        $cat = $request->get('categoria');
        $tours->categoria = implode(',', $cat);
        $tours->keywords = $request->get('keywords');
        $tours->slug = $request->get('slug');
        $tours->clase = $request->get('clase');

        $tours->save();
        session()->flash('status', 'Tour creado exitosamente!');
        return redirect('tours');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        /* $tour = Tour::where('slug', $slug)->firstOrFail(); */

        // Obtener el tour en inglés y su relación
        $tours = Tour::all();
        $tour = Tour::with('tourEn')->where('slug', $slug)->firstOrFail();
        $relacion = $tour->tourEn; 
        $relacionpt = $tour->tourPt; 
        $otrosTours = Tour::where('id', '!=', $tour->id)
                              ->inRandomOrder()
                              ->get();
        return view('tours.show', compact('tour', 'otrosTours', 'relacion', 'relacionpt', 'tours'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Tour::find($id);
        return view('tours.edit')->with('tour', $tour);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tour = Tour::findOrFail($id);

        $tour->nombre = $request->get('nombre');
        $tour->descripcion = $request->get('descripcion');
        $tour->contenido = $request->get('contenido');
        $tour->resumen = $request->get('resumen');
        $tour->detallado = $request->get('detallado');
        $tour->incluidos = $request->get('incluidos');
        $tour->importante = $request->get('importante');
        $tour->precio = $request->get('precio');
        $tour->dias = $request->get('dias');
        $tour->ubicacion = $request->get('ubicacion');
        $tour->mapa = $request->get('mapa');

        $cat = $request->get('categoria');
        $tour->categoria = implode(',', $cat);
        $tour->keywords = $request->get('keywords');
        $tour->slug = $request->get('slug');
        $tour->clase = $request->get('clase');

        // Actualizar la imagen si se ha proporcionado una nueva
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $rutaImg = public_path("img/buscador/");
            $imgTour = $img->getClientOriginalName();
            $img->move($rutaImg, $imgTour);
            $tour->img = "img/buscador/$imgTour";
        }

        $tour->save();
        session()->flash('status', 'Tour actualizado exitosamente!');
        return redirect('tours');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = Tour::find($id);
        $tour->delete();
        session()->flash('status', 'Tour borrado exitosamente!');
        return redirect('/tours');
    }
}
