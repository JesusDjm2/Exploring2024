<?php

namespace App\Http\Controllers;

use App\Models\Imagenes;
use Illuminate\Http\Request;

class ImagenesController extends Controller
{
    public function index()
    {
        $imagenes = Imagenes::latest()->get();
        return view('imagenes.index', compact('imagenes'));
    }

    public function create()
    {
        return view('imagenes.create');
    }

    public function store(Request $request)
    {
        $imgFiles = $request->file('img');

        foreach ($imgFiles as $img) {
            $imgTour = $img->getClientOriginalName();
            $imagenExistente = Imagenes::where('img', $imgTour)->first();
            if ($imagenExistente) {
                return redirect()->route('imagenes.create')->withErrors('La imagen ya existe en la base de datos. Por favor, elige una nueva imagen popita.');
            }
            $rutaImg = public_path("img/galeria/");
            $img->move($rutaImg, $imgTour);

            $imagen = new Imagenes();
            $imagen->img = $imgTour;
            
            $imagen->save();
        }

        session()->flash('status', 'Imágenes creadas exitosamente!');
        return redirect('imagenes');
    }


    public function show($id)
    {
        $imagen = Imagenes::find($id);
        return view('imagenes.show')->with('imagen', $imagen);
    }


    public function edit($id)
    {
        $imagen = Imagenes::find($id);
        return view('imagenes.edit')->with('imagen', $imagen);
    }


    public function update(Request $request, $id)
    {
        $imagen = Imagenes::find($id);
        if ($img = $request->file('img')) {
            $imgTour = $img->getClientOriginalName();
            $imagenExistente = Imagenes::where('img', $imgTour)->first();
            if ($imagenExistente) {
                return redirect()->route('imagenes.edit', ['imagene' => $id])->withErrors('La imagen ya existe en la base de datos. Por favor, elige una nueva imagen.');
            }

            $rutaImg = public_path("img/galeria/");
            $img->move($rutaImg, $imgTour);
            $imagen['img'] = $imgTour;
        } else {
            unset($imagen['img']);
        }

        $imagen->save();
        session()->flash('status', 'Imagen actualizada exitosamente!');
        return redirect('imagenes');
    }

    public function destroy($id)
    {
        $imagen = Imagenes::find($id);
        $imagen->delete();
        session()->flash('status', 'Imagen borrada exitosamente!');
        return redirect('imagenes');
    }
}
