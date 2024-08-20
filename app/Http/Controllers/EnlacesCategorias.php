<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Toursen;
use App\Models\ToursPt;


use Illuminate\Http\Request;

class EnlacesCategorias extends Controller
{
    public function contactenos()
    {
        $tours = Tour::all();
        return view('contactenos', compact('tours'));
    }
    public function cusco()
    {
        $tours = Tour::all();
        return view('es.machu-picchu', compact('tours'));
    }
    public function destinosPeru()
    {
        $tours = Tour::all();
        return view('es.destinos-peru', compact('tours'));
    }
    public function destinoCusco()
    {
        $tours = Tour::all()->filter(function ($tour) {
            $ubicaciones = explode(',', $tour->ubicacion);
            foreach ($ubicaciones as $ubicacion) {
                if (stripos($ubicacion, 'Cusco') !== false) {
                    return true;
                }
            }
            return false;
        });

        return view('es.destinos-en-peru.cusco-ombligo-del-mundo', compact('tours'));
    }
    public function destinoLima()
    {
        $tours = Tour::all()->filter(function ($tour) {
            $ubicaciones = explode(',', $tour->ubicacion);
            foreach ($ubicaciones as $ubicacion) {
                if (stripos($ubicacion, 'Lima') !== false) {
                    return true;
                }
            }
            return false;
        });

        return view('es.destinos-en-peru.lima-ciudad-de-reyes', compact('tours'));
    }
    public function destinoArequipa()
    {
        $tours = Tour::all()->filter(function ($tour) {
            $ubicaciones = explode(',', $tour->ubicacion);
            foreach ($ubicaciones as $ubicacion) {
                if (stripos($ubicacion, 'Arequipa') !== false) {
                    return true;
                }
            }
            return false;
        });

        return view('es.destinos-en-peru.arequipa-la-ciudad-blanca', compact('tours'));
    }
    public function destinoPuno()
    {
        $tours = Tour::all()->filter(function ($tour) {
            $ubicaciones = explode(',', $tour->ubicacion);
            foreach ($ubicaciones as $ubicacion) {
                if (stripos($ubicacion, 'Puno') !== false) {
                    return true;
                }
            }
            return false;
        });

        return view('es.destinos-en-peru.la-ciudad-de-puno', compact('tours'));
    }
    public function diarios()
    {
        $tours = Tour::all();
        return view('es.caminatas', compact('tours'));
    }
    public function trek()
    {
        $tours = Tour::all();
        return view('es.peru', compact('tours'));
    }
    public function luxury()
    {
        $tours = Tour::all();
        return view('es.privados', compact('tours'));
    }
    public function fullday()
    {
        $tours = Tour::all();
        return view('es.tours-de-un-dia', compact('tours'));
    }
    public function lodge()
    {
        $tours = Tour::all();
        return view('es.lodge-pacha-mama-spirit', compact('tours'));
    }
    public function nosotros()
    {
        $tours = Tour::all();
        return view('nosotros', compact('tours'));
    }
    public function terminos()
    {
        return view('terminos-y-condiciones');
    }
    public function preguntas()
    {
        return view('preguntas-frecuentes');
    }
    //Categorias ingles
    public function contact()
    {
        $tours = Toursen::all();
        $relacionBlog = null;
        return view('contact', compact('tours', 'relacionBlog'));
    }
    public function mapien()
    {
        $tours = Toursen::all();
        $relacionBlog = null;
        return view('en.machu-picchu', compact('tours', 'relacionBlog'));
    }
    public function hikes()
    {
        $tours = Toursen::all();
        $relacionBlog = null;
        return view('en.hikes', compact('tours', 'relacionBlog'));
    }
    public function around()
    {
        $tours = Toursen::all();
        $relacionBlog = null;
        return view('en.around-peru', compact('tours', 'relacionBlog'));
    }
    public function private()
    {
        $tours = Toursen::all();
        $relacionBlog = null;
        return view('en.private-and-exclusive-tours', compact('tours', 'relacionBlog'));
    }
    public function fulldayen()
    {
        $tours = Toursen::all();
        $relacionBlog = null;
        return view('en.full-day-tours', compact('tours', 'relacionBlog'));
    }
    public function lodgen()
    {
        $tours = Toursen::all();
        $relacionBlog = null;
        return view('en.pacha-mama-spirit-lodge', compact('tours', 'relacionBlog'));
    }

    public function destiniesPeru()
    {
        $tours = Tour::all();
        $relacionBlog = null;
        return view('en.destinies-peru', compact('tours', 'relacionBlog'));
    }
    public function destinyCusco()
    {
        $tours = Toursen::all()->filter(function ($tour) {
            $ubicaciones = explode(',', $tour->ubicacion);
            foreach ($ubicaciones as $ubicacion) {
                if (stripos($ubicacion, 'Cusco') !== false) {
                    return true;
                }
            }
            return false;
        });
        $relacionBlog = null;
        return view('en.destinies-peru.cusco-navel-of-the-world', compact('tours', 'relacionBlog'));
    }
    public function destinyArequipa()
    {
        $tours = Toursen::all()->filter(function ($tour) {
            $ubicaciones = explode(',', $tour->ubicacion);
            foreach ($ubicaciones as $ubicacion) {
                if (stripos($ubicacion, 'Arequipa') !== false) {
                    return true;
                }
            }
            return false;
        });
        $relacionBlog = null;
        return view('en.destinies-peru.arequipa-the-white-city', compact('tours', 'relacionBlog'));
    }
    public function destinyLima()
    {
        $tours = Toursen::all()->filter(function ($tour) {
            $ubicaciones = explode(',', $tour->ubicacion);
            foreach ($ubicaciones as $ubicacion) {
                if (stripos($ubicacion, 'Lima') !== false) {
                    return true;
                }
            }
            return false;
        });
        $relacionBlog = null;
        return view('en.destinies-peru.lima-city-of-kings', compact('tours', 'relacionBlog'));
    }
    public function destinyPuno()
    {
        $tours = Toursen::all()->filter(function ($tour) {
            $ubicaciones = explode(',', $tour->ubicacion);
            foreach ($ubicaciones as $ubicacion) {
                if (stripos($ubicacion, 'Puno') !== false) {
                    return true;
                }
            }
            return false;
        });
        $relacionBlog = null;
        return view('en.destinies-peru.puno-city', compact('tours', 'relacionBlog'));
    }
    //Enlaces Portugues
    public function cuscop()
    {
        $tours = ToursPt::all();
        $relacionBlog = null;
        return view('tourspt.categorias.pacotes-cusco', compact('tours', 'relacionBlog'));
    }
    public function diariosp()
    {
        $tours = ToursPt::all();
        $relacionBlog = null;
        return view('tourspt.categorias.passeios-diarios', compact('tours', 'relacionBlog'));
    }
    public function trekp()
    {
        $tours = ToursPt::all();
        $relacionBlog = null;
        return view('tourspt.categorias.caminahada', compact('tours', 'relacionBlog'));
    }
    public function pacotes()
    {
        $tours = ToursPt::all();
        $relacionBlog = null;
        return view('tourspt.categorias.pacotes-peru', compact('tours', 'relacionBlog'));
    }
    public function destinosnoPeru()
    {
        $relacionBlog = null;
        $tours=ToursPt::all();
        return view('tourspt.destinos.cusco', compact('relacionBlog', 'tours'));
    }
    public function Arequipap()
    {
        $tours = ToursPt::all();
        $toursArequipa = ToursPt::whereRaw('LOWER(ubicacion) LIKE ?', ['%arequipa%'])->get();
        $relacionBlog = null;
        return view('tourspt.destinos.arequipa', compact('tours', 'relacionBlog', 'toursArequipa'));
    }
    public function Limap()
    {
        $tours = ToursPt::all();
        $toursLima = ToursPt::whereRaw('LOWER(ubicacion) LIKE ?', ['%lima%'])->get();
        $relacionBlog = null;
        return view('tourspt.destinos.lima', compact('tours', 'relacionBlog', 'toursLima'));
    }
    public function Punop()
    {
        $tours = ToursPt::all();
        $toursPuno = ToursPt::whereRaw('LOWER(ubicacion) LIKE ?', ['%puno%'])->get();
        $relacionBlog = null;
        return view('tourspt.destinos.puno', compact('toursPuno', 'relacionBlog', 'tours'));
    }
}
