@extends('layouts.app')

@section('content')
    <div class="container" style="width:100%;background-color:#FAFAFA">
    <div class="row">
      <div class="col s12" style="padding-left:25px;padding-right:20px;">
       <h4>Votre confirmation de réservation</h4>
       <div class="col s6">
       <div class="divider" style="margin-bottom:10px;"></div>
       <p><b>Vos informations</b></p> <!-- commande','client','produit','prestation' -->
         @foreach ($client as $client)
       		<p>{{@$client->nom}} {{@$client->prenom}}</p>
       		<p>{{@$client->adresse}}</p>
       		<p>{{@$client->codepostal}} {{@$client->ville}}</p>
       		<p> Numéro de téléphone : {{@$client->tel}}</p>
  		 @endforeach
  		 <p style="font-size:19px;">Votre réservation</p>
  		 @foreach ($produit as $produit)
			Pour votre produit : <b>{{$produit->nom}} </b>-
			@endforeach
			@foreach ($prestation as $prestation)
			avec une prestation de type <b>{{$prestation->nom}}</b></p>
				@endforeach
  		 @foreach ($commande as $commande)
  		 	<p><b>Commentaire : {{@$commande->commentaire}}</b> </p>
  		 	<p><b>Pour être déposé le </b> {{@$commande->dateDepot}}</p>
  		 	<p><b>Votre numéro de commande <i>unique</i> </b> <p style="font-size:17px">ORDER-W{{@$commande->id}}</p></p>
		@endforeach
		</div>
		<div class="col s6" style="padding-bottom:25px;">
		<h4>Et maintenant ? </h4>
		<p>Vous pouvez venir déposé vos produit(s) au pressing entre 8H30 et 20H</p>
		<p>du Lundi au Vendredi et entre 8H30 et 12H30 le Samedi.</p>
		<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:300px;width:600px;'><div id='gmap_canvas' style='height:440px;width:450px;'></div><div><small><a href="http://embedgooglemaps.com">									google maps carte							</a></small></div><div><small><a href="https://youtubeembedcode.com">youtubeembedcode.com</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:18,center:new google.maps.LatLng(43.6058073,3.87643300000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(43.6058073,3.87643300000002)});infowindow = new google.maps.InfoWindow({content:'<strong>PRESSING DES HALLES</strong><br> 5 Bis pl Alexandre Laissac 34000 MONTPELLIER<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
		</div> 
       </div>
       </div>
       </div>
             <div class="col s12" style="text-align: center;background-color: #EAEAEA;position: relative;bottom: 0;width: 100%;"><p color="#565F76;">PRESSING DES HALLES - 17 Rue verchant  - 04 67 90 67 21</p></div>
      </div> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/picker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<style>
input {
        background-color: #F5F5F5!important;
    border-radius: 5px!important;
    border: 1px solid #363C44!important;
    color: #363C44!important;
    padding-left: 5px!important;
    width: 89.5%!important;
}

      #map {
        width: 500px;
        height: 400px;
      }

<script>
 $(document).ready(function() {
    $('select').material_select();
  });        
</script>
<script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          center: {lat: 44.540, lng: -78.546},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>
    </body>
</html>
@endsection