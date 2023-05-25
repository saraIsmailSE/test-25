<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Notifications\Notifiable;

class Friend extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'friend_id',
        'user_id',
        'status'
    ];
    public function user()
    {
        return $this->belongsTo(User::class ,'user_id');
    }
    public function friend()
    {
        return $this->belongsTo(User::class ,'user_id');
    }
=======

class Friend extends Model
{
    use HasFactory;
>>>>>>> 77736819 (..)
}
