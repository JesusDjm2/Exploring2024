<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToursPt extends Model
{
    use HasFactory;
    public function tourPt()
    {
        return $this->belongsTo(Tour::class, 'tour_id');
    }
}
