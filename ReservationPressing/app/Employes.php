<?php

namespace App;
use App\Prestations;
use App\Clients;
use App\Produits;
use App\Reservation;
use Illuminate\Database\Eloquent\Model;

class Employes extends Model
{
    protected $fillable = ['id','nom','prenom','password', 'dateArrivee', 'typeContrat', 'salaire', ''];

	// Un employé à une ou plusieurs prestations. 
	public function Prestations()
	{
	    return $this->hasMany('App\Prestations');
	}
}

