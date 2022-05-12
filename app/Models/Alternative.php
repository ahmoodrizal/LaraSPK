<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id', 'name', 'slug', 'c1', 'c2', 'c3', 'c4'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
