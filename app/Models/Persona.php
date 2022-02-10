<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Persona extends Model
{
    use HasFactory;
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function categoria()
    {
    	return $this->belongsTo(User::class);
    }
}
