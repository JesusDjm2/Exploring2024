<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ptblog extends Model
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
  public function tags()
  {
    return $this->belongsToMany(tagPt::class, 'ptblogs_categoria', 'ptblog_id', 'ptag_id');
  }
  public function blog()
  {
    return $this->belongsTo(Blog::class, 'blog_id');
  }
}
