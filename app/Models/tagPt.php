<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tagPt extends Model
{
    use HasFactory;
    static $rules = [
        'nombre' => 'required',
        'slug' => 'required',
    ];
    protected $perPage = 20;
    protected $fillable = ['nombre', 'slug'];
    public function blogs()
    {
        return $this->belongsToMany(ptblog::class, 'ptblogs_categoria', 'ptag_id', 'ptblog_id');
    }
}
