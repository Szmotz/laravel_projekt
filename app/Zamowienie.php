<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zamowienie extends Model
{
    /**
     * Zamówienie łączy users i products
     */

    protected $fillable = [
    	'ilosc'
    ];
}
