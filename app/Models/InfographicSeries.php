<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfographicSeries extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $fillable = [
        'title',
        'section_id',
    ];

    public function Infographics()
    {
        return $this->hasMany(Infographic::class, 'series_id');
    }

    public function media()
    {
        return $this->hasOne(Media::class, 'infographic_series_id');
    }

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
}
=======
}
>>>>>>> 77736819 (..)
