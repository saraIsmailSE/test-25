<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $fillable = [
        'user_id',
        'group_id',
        'user_type',
        'termination_reason',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
=======
}
>>>>>>> 77736819 (..)
