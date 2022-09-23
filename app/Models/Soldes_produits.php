<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soldes_produits extends Model
{
    use HasFactory;



    protected $fillable = [
        'idstructure',
        'idproduit',
        'montant',
    ];
}
