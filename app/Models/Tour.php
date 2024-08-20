<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'contenido',
        'ubicacion',
        'precio',
        'dias',
        'img',
        'mapa',
        'categoria',
        'slug'
    ];
    public function tourEn()
    {
        return $this->hasOne(Toursen::class, 'tour_id');
    }
    public function tourPt()
    {
        return $this->hasOne(ToursPt::class, 'tour_id');
    }
}
