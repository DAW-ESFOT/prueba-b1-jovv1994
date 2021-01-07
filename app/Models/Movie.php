<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['name', 'code', 'year', 'available'];

    public function gender()
    {
        return $this->belongsTo('App\Models\Gender');
    }
}
