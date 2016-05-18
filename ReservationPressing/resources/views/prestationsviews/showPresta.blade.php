<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <style>
              main {
                flex: 1 0 auto;
              }
        </style>
    </head>
    <body>
     <nav>
    <div class="nav-wrapper" style="background-color: #FF5722;border-bottom: 5px;border-top: 0px;border-left: 0px;border-right: 0px;border-bottom-color: #444;border-style: solid;font-weight: 200;padding-left:15px;">
    <a href="#" class="brand-logo"><p style="color:#363C44;display: inline-block;padding: 0;margin-top: -10px;font-weight: 400;font-style: italic;"> Mon</p> pressing : <p style="color:#363C44;display: inline-block;padding: 0;margin-top: -10px;font-weight: 400;font-style: italic;"> mon</p> espace client</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
    <li><a class="waves-effect waves-light btn-large" style="padding-bottom: 5px;height: 40px;line-height: 40px;background-color: white;color: black;font-weight: 300;font-size: 11px;">Mon historique</a></li>
    <li><a class="waves-effect waves-light btn-large" style="padding-bottom: 5px;font-size: 11px;height: 40px;line-height: 40px;background-color: white;color: black;font-weight: 300;">Faire une réservation</a></li>
    <li><a class="waves-effect waves-light btn-large" style="padding-bottom: 5px;height: 40px;font-size: 11px;line-height: 40px;background-color: white;color: black;font-weight: 300;">Mon compte</a></li>
      </ul>
    </div>
  </nav>
        <div class="container" style="width:100%;">
        <div class="row">
      <div class="col s12">
       <h4>Prestations</h4>
                    <table class="table responsive-table highlight">
                    <tbody>
                    <thead>
                    <tr>
                      <th><b>Prestation</b></th>
                      <th><b>Type de produit</b></th>
                      <th><b>Gérée par</b></th>
                      <th><b>Total TTC</b></th>
                      <th><b>Déposé le</b></th>
                      <th><b>Retiré le</b></th>
                    </tr>
                    </thead>
                     @foreach ($Prestations as $Prestations)
                    <tr>
                    <td><p>{{$Prestations->libelle}}</p></td>
                    <td><p>{{$Prestations->type}}</p></td>
                    <td><p>{{$Prestations->prenomEmploye}} {{$Prestations->nomEmploye[0]}}</p></td>
                    <td><p>{{$Prestations->prix}} €</p></td>
                    <td><p>{{$Prestations->dateDepot}}</p></td>
                    <td><p>{{$Prestations->dateRecuperation}}</p></td>
                    </tr>
                    @endforeach
                        </tbody>
                     </table>
      </div>
    </div>
      </div>
        <footer class="page-footer" style="background-color: rgba(189, 189, 189, 0.57);">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text" style="color: #7A7B7D;">Informations pratiques</h5>
                <p class="grey-text text-lighten-4" style="color: #7A7B7D;">Blah blah blah.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text" style="color: #7A7B7D;">Accès rapide</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!" style="color: #7A7B7D;">Mon historique</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!" style="color: #7A7B7D;">Faire une réservation</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!" style="color: #7A7B7D;">Mon compte</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">Pressing Leissac</a>
            </div>
          </div>
        </footer>
    </body>
</html>
