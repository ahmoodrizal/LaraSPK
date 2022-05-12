<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'method'
    ];

    protected $with = ['criterias', 'alternatives'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function criterias()
    {
        return $this->hasMany(Criteria::class);
    }

    public function alternatives()
    {
        return $this->hasMany(Alternative::class);
    }
}
