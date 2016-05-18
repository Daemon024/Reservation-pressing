<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Prestations;
use App\Clients;
use App\Employes;
use App\Produits;
use App\Http\Requests;

class PrestationsController extends Controller
{
    public function RecupPrestations()
    {
		$Prestations = DB::table('prestations')
			->join('clients', 'clients_id', '=', 'clients.id')
            ->join('produits', 'produits_id', '=', 'produits.id')
            ->join('reservations', 'reservation_idreservation', '=', 'reservations.id')
            ->join('employes', 'employes_idemployes', '=', 'employes.id')
            ->get();
		return view('prestationsviews/showPresta')->with('Prestations', $Prestations);
    }
}

