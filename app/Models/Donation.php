<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable =['donor', 'user_id', 'contact', 'currency', 'amount', 'remarks', 'activity_id', 'payment_method'];

    public function activity(){
        return $this->belongsTo(Activity::class, 'activity_id');
    }

    public function donor(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
