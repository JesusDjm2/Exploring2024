<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
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
    return $this->belongsToMany(Tag::class, 'blog_categoria', 'blog_id', 'tag_id');
  }
  public function enblog()
  {
    return $this->hasOne(Enblog::class, 'blog_id');
  }
  public function ptblogs()
  {
    return $this->hasOne(ptblog::class, 'blog_id');
  }
}
