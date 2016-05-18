<?php

namespace App;
use App\Prestations;
use App\Clients;
use App\Employes;
use App\Produits;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['idreservation','dateVoulue', 'clients_id'];

	public function Clients()
	{
	    return $this->belongsTo('App\Clients');
	}

	public function Prestations()
	{
	    return $this->hasOne('App\Prestations');
	}
}

