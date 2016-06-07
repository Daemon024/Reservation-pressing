<?php

namespace App;
use App\Prestations;
use App\Employes;
use App\Produits;
use App\Tarifs;
use App\Clients;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
		protected $table = 'Commandes';
    	protected $fillable = ['id','commentaire','dateCreation','PretPourRecuperation', 'prestation_id', 'clients_id','employes_id'];

    	protected $dates = ['dateDepot','dateRecuperation'];

    	public function Prestations()
		{
	    return $this->hasOne('App\Prestations');
		}
		public function Clients()
		{
	    return $this->hasOne('App\Clients');
		}
		public function Employes()
		{
	    return $this->hasOne('App\Employes');
		}
}
