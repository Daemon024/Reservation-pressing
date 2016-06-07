<?php

namespace App\Http\Controllers;
// use MaddHatter\LaravelFullcalendar\Facades\Calendar;
// use MaddHatter\LaravelFullcalendar\Event;
use DB;
use Request;
use App\Http\Requests\CreateReservationRequest;
// use Makzumi\Calendar\Calendar;
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

class CommandesController extends Controller
{
    public function create() 
    {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
      $data = Request::all();
      // $varA = DB::table('Produits')->where('Produits.id', $data['produits_id'])->lists('surcout');
      // $varB = DB::table('Prestations')->where('Prestations.id', $data['prestations_id'])->lists('prix');
      // $prixCom = ($varA[0] + $varB[0]);
      // return $data;
      // DB::table('Commandes')->insert(
      //     ['commentaire' => $data['commentaire'], 'dateCreation' => $data['dateDepot'], 'dateDepot' => $data['dateDepot'], 'prestations_id' => $data['prestations_id'], 'clients_id' => $data['clients_id'], 'employes_id' => $data['employes_id'], 'produits_id' => $data['produits_id']]
      // );
      // DB::table('Tarifs')->insert(
      //     ['tarif' => $prixCom, 'produits_id' => $data['produits_id'], 'prestations_id' => $data['prestations_id']]
      // );
      // $newCommande = new Commandes($data);
      // $newCommande->save();
      // $fiche = DB::table('Commandes')
      //           ->where('Commandes.clients_id', $data['clients_id'])
      //           ->where('Commandes.commentaire', $data['commentaire'])
      //           ->where('Commandes.produits_id', $data['produits_id'])
      //           ->join('Clients', 'clients_id', '=', 'Clients.id')
      //           ->join('Prestations', 'prestations_id', '=', 'Prestations.id')
      //           ->join('Employes', 'employes_id', '=', 'Employes.id')
      //           ->join('Produits', 'produits_id', '=', 'Produits.id')
      //           ->selectRaw('Employes.nom as nomEmploye, Employes.prenom as prenomEmploye, Employes_id as idEmploye, Clients.nom as nomClient, Clients.prenom as prenomClient, commentaire, dateDepot, pretPourRecuperation, dateRecuperation, adresse, codepostal, ville, email, tel, dateArrivee, typeContrat, salaire, Prestations.nom as nomPrestation, Produits.nom as nomProduit')
      //           ->first();

      $commande = Commandes::where('clients_id', $data['clients_id'])
               ->where('Commandes.dateDepot', $data['dateDepot'])
               ->take(1)
               ->get();
      $client = Clients::where('id', $data['clients_id'])
               ->take(1)
               ->get();
      $produit = Produits::where('id', $data['produits_id'])
               ->take(1)
               ->get();
      $prestation = Prestations::where('id', $data['prestations_id'])   
               ->take(1)
               ->get();
      // return $commande;
      return view('prestationsviews/confirmationReservation', compact('commande','client','produit','prestation'))
                       ->with('commande', $commande)
                       ->with('client', $client)
                       ->with('produit', $produit)
                       ->with('prestation', $prestation);
    }
    //------------------------------------------------------------------------------------------//
    public function priseReservation() 
    {
       $userId = Auth::id();
       $produits = DB::table('Produits')->lists('nom', 'id');
       $prestations = DB::table('Prestations')->lists('nom', 'id');
       // return $produits;
       return view('prestationsviews/reservation', compact('userId','produits','prestations'))
                       ->with('userId', $userId)
                       ->with('prestations', $prestations)
                       ->with('produits', $produits);
    }
    //------------------------------------------------------------------------------------------//
	 /**
	 * Fonction de récupération des commandes, jointure sur les tables clients, produits, reservations, employes. 
	 * on retourne un objet avec toutes les infos relatives au prestations du client.
	 */
    //------------------------------------------------------------------------------------------//
    public function RecupCommandes()
    {

        $userId = Auth::id();
        // Requête pour récupérer les prestations du clients
    		$Commandes = DB::table('Commandes')->where('Commandes.clients_id', $userId)
    			      ->join('Clients', 'clients_id', '=', 'Clients.id')
                ->join('Prestations', 'prestations_id', '=', 'Prestations.id')
                ->join('Employes', 'employes_id', '=', 'Employes.id')
                ->join('Produits', 'produits_id', '=', 'Produits.id')
                // ->join('Tarifs', 'Tarifs.Prestations_id', '=', 'Prestations.id')
                ->selectRaw('Employes.nom as nomEmploye, Employes.prenom as prenomEmploye, Employes_id as idEmploye, Clients.nom as nomClient, Clients.prenom as prenomClient, commentaire, dateDepot, pretPourRecuperation, dateRecuperation, adresse, codepostal, ville, email, tel, dateArrivee, typeContrat, salaire, Prestations.nom as nomPrestation, Produits.nom as nomProduit')
                ->orderBy('Commandes.id','desc')
                ->get();
        // return $Commandes;
        //------------------------------------------------------------------------------------------//
        $CalendrierFetch = json_encode(DB::table('Commandes')->where('Commandes.clients_id', $userId)
                ->join('Clients', 'clients_id', '=', 'Clients.id')
                ->join('Prestations', 'prestations_id', '=', 'Prestations.id')
                ->join('Produits', 'produits_id', '=', 'Produits.id')
                ->orderBy('dateDepot')
                ->lists('dateDepot','Produits.nom'));
        // return $CalendrierFetch;
        // $CalendrierFetchProd = DB::table('Commandes')->where('Commandes.clients_id', $userId)
        //         ->join('Clients', 'clients_id', '=', 'Clients.id')
        //         ->join('Prestations', 'prestations_id', '=', 'Prestations.id')
        //         ->join('Produits', 'Prestations.produits_id', '=', 'Produits.id')
        //         ->orderBy('dateDepot')
        //         ->lists('Produits.nom');
        // return $CalendrierFetch;
        // 
        // 
        // 
        // 
    //     $events = array(
    //     "2014-04-09 10:30:00" => array(
    //         "Event 1",
    //         "Event 2 <strong> with html</stong>",
    //     ),
    //     "2014-04-12 14:12:23" => array(
    //         "Event 3",
    //     ),
    //     "2014-05-14 08:00:00" => array(
    //         "Event 4",
    //     ),
    // );

    // $cal = Calendar::make();
    // /**** OPTIONAL METHODS ****/
    // $cal->setDate(Input::get('cdate')); //Set starting date
    // $cal->setBasePath('/dashboard'); // Base path for navigation URLs
    // $cal->showNav(true); // Show or hide navigation
    // $cal->setView(Input::get('cv')); //'day' or 'week' or null
    // $cal->setStartEndHours(8,20); // Set the hour range for day and week view
    // $cal->setTimeClass('ctime'); //Class Name for times column on day and week views
    // $cal->setEventsWrap(array('<p>', '</p>')); // Set the event's content wrapper
    // $cal->setDayWrap(array('<div>','</div>')); //Set the day's number wrapper
    // $cal->setNextIcon('>>'); //Can also be html: <i class='fa fa-chevron-right'></i>
    // $cal->setPrevIcon('<<'); // Same as above
    // $cal->setDayLabels(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat')); //Label names for week days
    // $cal->setMonthLabels(array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December')); //Month names
    // $cal->setDateWrap(array('<div>','</div>')); //Set cell inner content wrapper
    // $cal->setTableClass('table'); //Set the table's class name
    // $cal->setHeadClass('table-header'); //Set top header's class name
    // $cal->setNextClass('btn'); // Set next btn class name
    // $cal->setPrevClass('btn'); // Set Prev btn class name
    // $cal->setEvents($events); // Receives the events array
    // /**** END OPTIONAL METHODS ****/

    // echo $cal->generate() // Return the calendar's html;
        // $events = [];



        // foreach ($CalendrierFetch as $CalendrierFetch) {
        // $date = Carbon::createFromFormat('Y-d-m', $CalendrierFetch->dateDepot)->toDateTimeString();
        // $events[] = \Calendar::event(
        //     '{{$CalendrierFetch->nom}}',
        //     true,
        //     $date,
        //     $date
        // );

        //     // echo $CalendrierFetch->dateDepot;
        //     // echo $CalendrierFetch->nom;
        // }

        // $eloquentEvent = EventModel::first(); //EventModel implements MaddHatter\LaravelFullcalendar\Event  

        // $calendar = \Calendar::addEvents($events) //add an array with addEvents
        //     ->addEvent($eloquentEvent, [ 
        //         'color' => '#800',
        //     ])->setOptions([ 
        //         'firstDay' => 1
        //     ])->setCallbacks([ 
        //         'viewRender' => 'function() {alert("Callbacks!");}'
        // ]); 
        // foreach($CalendrierFetch) {
     
        //    $events[] = \Calendar::event(
        //     'Reservation{{', 
        //     false, 
        //     '2015-02-11T0800', 
        //     '2015-02-12T0800', 
        //     0 
        // );
        //   };

        //
        // $PointsFidelite = DB::table('prestations')->where('prestations.clients_id', $userId)
        //         ->join('clients', 'clients_id', '=', 'clients.id')
        //         ->join('produits', 'produits_id', '=', 'produits.id')
        //         ->selectRaw('prestations.id, COUNT(*) as count')
        //         ->pluck('count');
        // return $PointsFidelite;
        // ->lists('count');
        //
        // Retourne le nombre de prestations du clients.
        //
        //
        $GraphCommandesT = DB::table('Commandes')->where('Commandes.clients_id', $userId)
                ->join('Clients', 'clients_id', '=', 'Clients.id')
                ->join('Prestations', 'prestations_id', '=', 'Prestations.id')
                ->join('Produits', 'produits_id', '=', 'Produits.id')
                ->join('Tarifs', 'Tarifs.Prestations_id', '=', 'Prestations.id')
                ->selectRaw('Produits.nom, COUNT(*) as count')
                ->groupBy('Produits.nom')
                ->orderBy('count', 'desc')
                ->lists('Produits.nom');
        //------------------------------------------------------------------------------------------//
        $GraphCommandesN = DB::table('Commandes')->where('Commandes.clients_id', $userId)
                ->join('Clients', 'clients_id', '=', 'Clients.id')
                ->join('Prestations', 'prestations_id', '=', 'Prestations.id')
                ->join('Produits', 'produits_id', '=', 'Produits.id')
                ->join('Tarifs', 'Tarifs.Prestations_id', '=', 'Prestations.id')
                ->selectRaw('Produits.nom, COUNT(*) as count')
                ->groupBy('Produits.nom')
                ->orderBy('count', 'desc')
                ->lists('count');
        // Requête séparé en deux parties pour les statistiques client avec ChartsJS
        return view('prestationsviews/dashboard', compact('GraphCommandesT','GraphCommandesN','Commandes'))
                       ->with('Commandes', $Commandes)
                       ->with('GraphCommandesT', $GraphCommandesT)
                       ->with('GraphCommandesN', $GraphCommandesN);
                       // ->with('calendar', $calendar);
        //------------------------------------------------------------------------------------------//
    }    
}