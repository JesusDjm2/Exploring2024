<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toursen extends Model
{
    use HasFactory;
    public function tourEs()
    {
        return $this->belongsTo(Tour::class, 'tour_id');
    }
}
