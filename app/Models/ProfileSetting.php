<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileSetting extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $fillable = [
        'user_id',
        'posts',
        'media',
        'certificates',
        'infographics',
        'articles',
        'thesis',
        'books',
        'marks'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id' );
    }
=======
>>>>>>> 77736819 (..)
}
