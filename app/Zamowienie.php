<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Zamowienie extends Model
{
    /**
     * Zamówienie łączy users i products
     */
    protected $table = 'zamowienie';

    protected $fillable = [
    	'user_iduser',
    	'product_idproduct',
    	'ilosc'
    ];

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
