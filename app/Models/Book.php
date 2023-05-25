<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use App\Models\Post;
=======
>>>>>>> 77736819 (..)

class Book extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = [
        'name',
        'writer',
        'publisher',
        'brief',
        'start_page',
        'end_page',
        'link',
        'section_id',
        'type_id',
        'level_id',
        'language_id',
    ];


    protected $with = array('section', 'type', 'language', 'level');

    /**
     * Get all posts associated with book.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function type()
    {
        return $this->belongsTo(BookType::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function media()
    {
        return $this->hasOne(Media::class);
    }

    public function theses()
    {
        return $this->hasMany(Thesis::class);
    }

    public function userBooks()
    {
        return $this->hasMany(UserBook::class);
    }

    public function level()
    {
        return $this->belongsTo(BookLevel::class);
    }
}
=======
}
>>>>>>> 77736819 (..)
