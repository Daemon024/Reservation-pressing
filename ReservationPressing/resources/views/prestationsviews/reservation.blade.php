@extends('layouts.app')

@section('content')
    <div class="container" style="width:100%;background-color:#FAFAFA">
    <div class="row">
      <div class="col s12" style="padding-left:25px;padding-right:20px;">
       <h4>Prise de réservation</h4>
       <div class="divider" style="margin-bottom:10px;"></div>
                    {!! Form::open(['url' => '/commandes']) !!}
                <div class="form-group{{ $errors->has('commentaire') ? ' has-error' : '' }}">
                    <p style="font-size:12px;">COMMENTAIRE - Indiquez nous une attention particulière, par exemple faire attention au boutons etc.. </p>
                    {!! Form::text('commentaire', null, ['class' => 'form-control'])!!}
                </div>
                 <div class="form-group{{ $errors->has('dateDepot') ? ' has-error' : '' }}">
                    <p style="font-size:12px;">DATE DE DEPOT - Indiquez à quel date vous viendrez déposé votre article </p>
                    {!! Form::date('dateDepot', null, ['class' => 'datepicker'])!!}
                </div>
                <div class="form-group">
                    <p style="font-size:12px;">VOTRE PRODUIT - Quel est votre produit ? </p>
                    {!! Form::select('produits_id', $produits, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <p style="font-size:12px;">PRESTATION - Quelle préstation avez-vous besoin pour votre produit ? </p>
                    {!! Form::select('prestations_id', $prestations, array('class' => 'form-control')) !!}
                </div>
                  <div class="form-group" style="display:none;">
                    {!! Form::label('Client') !!}<br />
                    {!! Form::text('clients_id', $userId, ['class' => 'form-control'])!!}
                </div>
                <div class="form-group" style="display:none;">
                    {!! Form::label('Employe') !!}<br />
                    {!! Form::text('employes_id', 10, ['class' => 'form-control'])!!}
                </div>
                <div class="form-group" style="padding-top:20px;padding-bottom:20px;">
                <button type="submit" class="waves-effect waves-light btn-large" onclick="Materialize.toast('Ajout de la réservation..', 4000,'',function(){alert('Your toast was dismissed')})">Confirmer votre prise de réservation
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