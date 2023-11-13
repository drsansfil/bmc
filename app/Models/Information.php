<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    protected $table = 'information';
    protected $fillable = [
        'email_contact',
        'contacts',
        'adresse',
        'facebook',
        'instagram',
        'linkedin',
        'email',
        'video',
        'home_message',
        'mail_reception',
        'chiffre_happyclient',
        'chiffre_projetencours',
        'chiffre_projetterminer',
    ];
}
