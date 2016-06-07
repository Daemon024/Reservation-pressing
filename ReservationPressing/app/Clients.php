<?php

namespace App;
use App\Prestations;
use App\Employes;
use App\Produits;
use App\Tarifs;
use App\Clients;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
	protected $table = 'Clients';
    protected $fillable = ['id','nom','prenom','adresse', 'codepostal', 'ville', 'email', 'tel','password'];

    protected $hidden = ['remember_token'];

	// Un client à une ou plusieurs prestations. 
	public function Prestations()
	{
	    return $this->hasMany('App\Prestations');
	}

}
