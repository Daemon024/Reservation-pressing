<?php

namespace App;
use App\Prestations;
use App\Clients;
use App\Employes;
use App\Reservation;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
	protected $table = 'Produits';
    protected $fillable = ['id','type'];

    public function Prestations()
	{
    return $this->belongsTo('App\Prestations');
	}
}

