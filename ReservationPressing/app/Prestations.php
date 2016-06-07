<?php

namespace App;
use App\Clients;
use App\Employes;
use App\Produits;
use App\Reservation;
use Illuminate\Database\Eloquent\Model;

class Prestations extends Model
{
	protected $table = 'Prestations';
    protected $fillable = ['id','nom','produits_id'];

	// une prestation peut avoir qu'un seul employé qui taff dessus
	public function Employes()
	{
	    return $this->belongsTo('App\Employes');
	}
	// une prestation appartient a un et un seul client.
	public function Clients()
	{
	    return $this->belongsTo('App\Clients');
	}

	public function Produits()
	{
	    return $this->hasOne('App\Produits');
	}
}

