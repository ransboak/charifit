<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'thumbnail', 'category', 'goal', 'current', 'user_id', 'description'];

    public function donations(){
        return $this->hasMany(Donation::class, 'activity_id');
    }

    public function organizer(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
