<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id', 'name', 'slug', 'weight'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
