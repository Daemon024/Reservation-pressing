@extends('layouts.app')

@section('content')
    <div class="container" style="width:100%;background-color:#FAFAFA">
    <div class="row">
      <div class="col s12" style="padding-left:25px;padding-right:20px;">
       <h4>Votre historique</h4>
        <table class="table responsive-table highlight">
            <tbody>
                <thead>
                    <tr>
                      <th><b>Prestation</b></th>
                      <th><b>Pour votre produit de type</b></th>
                      <th><b>Gérée par</b></th>
                      <th><b>Déposé le</b></th>
                      <th><b>Retiré le</b></th>
                    </tr>
                </thead>
                     @foreach ($Commandes as $Commandes)
                    <tr>
                    <td><p>{{$Commandes->nomPrestation}}</p></td>
                    <td><p>{{$Commandes->nomProduit}}</p></td>
                    <td><p>
                    <?php 
                      if ($Commandes->idEmploye == 10) {
                        echo "Non défini";
                      }
                      elseif ($Commandes->idEmploye != 10) {
                        echo "{$Commandes->prenomEmploye} {$Commandes->nomEmploye[0]}";
                      }
                      ?>
                    </p></td>
                    <td><p>{{$Commandes->dateDepot}}</p></td>
                    <?php 
                      if ($Commandes->dateRecuperation == NULL && $Commandes->pretPourRecuperation == 1) {
                        echo "<td style='background-color:#81D71D;color:white;''><p>Prêt à etre Retiré</td>";
                      }
                      elseif ($Commandes->dateRecuperation == NULL && $Commandes->pretPourRecuperation == 0) {
                        echo "<td style='background-color:rgba(244, 67, 54, 0.87);color:white;''><p>Pas encore pret</td>";
                      }
                      elseif ($Commandes->dateRecuperation != NULL && $Commandes->pretPourRecuperation == 1) {
                        echo "<td style='background-color:#81D71D;color:white;''><p>$Commandes->dateRecuperation</td>";
                      }
                      ?>
                      </p>
                    </tr>
                    @endforeach
                </tbody>
            </table>
      </div>
      <div class="col s6" style="padding-left:25px;padding-right:20px;">
         <p style="font-weight:300;font-size:18px;">Typologie des vétements déposés</p>
         <canvas id="myChart" height="150px" width="400px"></canvas>
      </div>
      <div class="col s6"><div id"Yolo" style="text-align:center;padding-top:25%;padding-bottom:25%;width:100%;height:100%;">Calendrier</div></div>
      </div>
      <div class="col s12" style="text-align: center;background-color: #EAEAEA;position: relative;bottom: 0;width: 100%;"><p color="#565F76;">PRESSING DES HALLES - 17 Rue verchant  - 04 67 90 67 21</p></div>
      </div> 
      <?php 
        function random_color_part() {
            return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
        }

        function random_color() {
            return random_color_part() . random_color_part() . random_color_part();
        }

      ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.bundle.min.js"></script>
      <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'pie',

            data: {
              labels: {!!json_encode($GraphCommandesT)!!},
              
              datasets: [{
              backgroundColor: ["#6332B3","#36A2EB","#FFCE56"],
              hoverBackgroundColor: ["#FF6384","#36A2EB","#FFCE56"],
              data: {!!json_encode($GraphCommandesN)!!}
            }]
          },
            options: {
                scales: {
                    yAxes: [{
                        gridLines: {
                            lineWidth: 0
                        }
                    }]
                }
            }
        });
      </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.bundle.min.js"></script>
    </body>
</html>
@endsection