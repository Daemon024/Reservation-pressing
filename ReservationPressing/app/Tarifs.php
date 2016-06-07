<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarifs extends Model
{
	protected $table = 'Tarifs';
    protected $fillable = ['tarif','produits_id','prestations_id'];

    public function Prestations()
	{
	    return $this->hasOne('App\Prestations');
	}
	public function Produits()
	{
	    return $this->hasOne('App\Produits');
	}
}
