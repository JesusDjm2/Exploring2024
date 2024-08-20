<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enblog extends Model
{
    static $rules = [
        'nombre' => 'required|unique:blogs,nombre',
        'descripcion' => 'required|max:120',
        'cuerpo' => 'required',
        'img' => 'required',
        'keywords' => 'required|max:255',
        'tags' => 'required|array',
        'slug' => 'required|unique:blogs|max:255'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'descripcion', 'cuerpo', 'img', 'keywords', 'slug'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function entags()
    {
        return $this->belongsToMany(Entag::class, 'enblogs_categoria', 'enblog_id', 'entag_id')->withTimestamps();
    }
    public function esblog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }
}
