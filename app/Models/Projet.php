<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_projet', 'description','type_projet','id_client'
      ];

    public function clients()
    {
        return $this->belongsTo(Client::class, 'id_client','id');
    }

    public function type (){
        return $this->belongsTo(ProjectCategory::class, 'project_category_id', 'id');
    }

    public function images (){
        return $this->hasMany(images::class, 'id_projet', 'id');
    }
}
