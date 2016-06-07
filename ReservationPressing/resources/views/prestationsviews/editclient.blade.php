@extends('layouts.app')

@section('content')
    <div class="container" style="width:100%;background-color:#FAFAFA">
    <div class="row">
      <div class="col s12" style="padding-left:25px;padding-right:20px;">
       <h4>Modification de votre compte client</h4>
       <div class="divider" style="margin-bottom:10px;"></div>
                    {!! Form::open(['url' => '/client']) !!}
                <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                    <p style="font-size:12px;">Nom</p>
                    {!! Form::text('nom', $NomClient , ['class' => 'form-control'])!!}
                </div>
                <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                    <p style="font-size:12px;">Prenom</p>
                    {!! Form::text('prenom', $PrenomClient, ['class' => 'form-control'])!!}
                </div>
                <div class="form-group">
                    <p style="font-size:12px;">Adresse</p>
                    {!! Form::text('adresse', $AdresseClient, ['class' => 'form-control'])!!}
                </div>
                <div class="form-group">
                    <p style="font-size:12px;">Code Postal</p>
                    {!! Form::text('codepostal', $CodePostalClient, ['class' => 'form-control'])!!}
                </div>
                  <div class="form-group">
                    <p style="font-size:12px;">Ville</p>
                    {!! Form::text('ville', $VilleClient, ['class' => 'form-control'])!!}
                </div>
                <div class="form-group">
                    <p style="font-size:12px;">Email</p>
                    {!! Form::text('email', $emailClient, ['class' => 'form-control'])!!}
                </div>
                <div class="form-group">
                    <p style="font-size:12px;">tel</p>
                    {!! Form::text('tel', $telClient, ['class' => 'form-control'])!!}
                </div>
                <div class="form-group">
                    <p style="font-size:12px">Mot de passe</p>
                    {!! Form::password('password', NULL , ['class' => 'form-control'])!!}
                </div>

                <div class="form-group" style="padding-top:20px;padding-bottom:20px;">
                <button type="submit" class="waves-effect waves-light btn-large" onclick="Materialize.toast('Modifications..', 4000,'',function(){alert('Your toast was dismissed')})">Confirmer les modifications
                </button>
                </div>
                </div>
        
                {!! Form::close() !!}
          <!--       </div> -->
      <!--       </div> -->

      </div>
      <div class="col s6" style="padding-left:25px;padding-right:20px;">
        
      </div>
      <div class="col s6"></div>
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
<script>
 $(document).ready(function() {
    $('select').material_select();
  });        
</script>
    </body>
</html>
@endsection