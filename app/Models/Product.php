<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

   protected $fillable = [

        'name',
        'description',
        'price',
        'image',
        'user_id'
   ];

    /**
     * Get the user that owns the product.
     */
    // diventa sia metodo che proprietà della classe Product
    public function user()
    {
        return $this->belongsTo(User::class); // Questo metodo indica che quando richiamo il metodo user() mi ritorna l'utente collegato al prodotto
    }
}
