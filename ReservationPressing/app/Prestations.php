<?php

namespace App;
use App\Clients;
use App\Employes;
use App\Produits;
use App\Reservation;
use Illuminate\Database\Eloquent\Model;

class Prestations extends Model
{
    protected $fillable = ['id','dateDepot','dateRecuperation','pretPourRecuperation', 'libelle', 'clients_id', 'reservation_idreservation', 'reservation_clients_id', 'produits_id'];

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
	// une prestation à un et une seule reservation.
	public function Reservation()
	{
	    return $this->belongsTo('App\Reservation');
	}

	public function Produits()
	{
	    return $this->hasOne('App\Produits');
	}
}

