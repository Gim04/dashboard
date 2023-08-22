<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitor extends Model
{
    use HasFactory;

    public $attributes = ['count' => 0];

    protected $fillable = [
        'page',
        'count',
    ];

    public $timestamps = false;

    protected $table = 'visitors';

   
}
