<?php

namespace App\Http\Controllers;

use DB;
use Request;
use App\Http\Requests\EditClientRequest;
use App\Prestations;
use App\Commandes;
use App\Clients;
use App\Employes;
use App\Produits;
use App\EventModel;
use Auth;
use DateTime;
use Carbon\Carbon;
use App\Http\Requests;

class ClientController extends Controller
{
    public function ClientEdit (){
    	 $userId = Auth::id();
    	 $NomClient = '';
    	 $PrenomClient = '';
    	 $AdresseClient = '';
    	 $CodePostalClient = '';
    	 $VilleClient = '';
    	 $emailClient = '';
    	 $telClient = '';
    	 $passClient = '';
    	 $leClient = Clients::where('id', $userId)
               ->take(1)
               ->get();
     	 
     	 foreach ($leClient as $leClient) {
     	 	$NomClient = $leClient->nom;
     	 	$PrenomClient = $leClient->prenom;
     	 	$AdresseClient = $leClient->adresse;
     	 	$CodePostalClient = $leClient->codepostal;
     	 	$VilleClient = $leClient->ville;
     	 	$emailClient = $leClient->email;
     	 	$telClient = $leClient->tel;
     	 	$passClient = $leClient->password;
     	 }
         return view('prestationsviews/editclient', compact('leClient','NomClient','PrenomClient','AdresseClient','CodePostalClient','VilleClient','emailClient','telClient','passClient'))
                       ->with('leClient', $leClient)
                       ->with('NomClient', $NomClient)
                       ->with('PrenomClient', $PrenomClient)
                       ->with('AdresseClient', $AdresseClient)
                       ->with('CodePostalClient', $CodePostalClient)
                       ->with('VilleClient', $VilleClient)
                       ->with('emailClient', $emailClient)
                       ->with('telClient', $telClient)
                       ->with('passClient', $passClient);
    }

    public function store() {
    	$userId = Auth::id();
    	$data = Request::all();
    	DB::table('Clients')
            ->where('id', $userId)
            ->limit(1)
            ->update(array('nom' => $data['nom'],'prenom' => $data['prenom'],'adresse' => $data['adresse'],'codepostal' => $data['codepostal'],'ville' => $data['ville'], 'email' => $data['email'], 'tel' => $data['tel'],'password' => bcrypt($data['password'])))
   
}
