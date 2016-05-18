<?php

namespace App;
use App\Prestations;
use App\Employes;
use App\Produits;
use App\Reservation;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = ['id','nom','prenom','adresse', 'codepostal', 'ville', 'email', 'tel'];

	// Un client à une ou plusieurs prestations. 
	public function Prestations()
	{
	    return $this->hasMany('App\Prestations');
	}

	// Un client à une ou plusieurs reservations. 
	public function Reservation()
	{
	    return $this->hasMany('App\Reservation');
	}
}
