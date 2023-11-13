<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Projet;

class ProjectCategory extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'status'];

    function projects (){
        return $this->hasMany(Projet::class);
    }
}
