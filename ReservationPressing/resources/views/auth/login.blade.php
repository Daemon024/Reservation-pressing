@extends('layouts.login')

@section('content')
<div class="container" style="background-color:#363C44;width:100%;height:45vw;color:#363C44">
    <div class="row" style="padding-left:20px;padding-right:20px;">
    <h3 style="color:white;font-family: Helvetica Neue;font-weight: 100;">Espace client</h3>
      <div class="col l6 s12 m6" style="background-color:#FF6E41;height:500px;padding-left:25px;padding-bottom:25px;padding-top:25px;color:#363C44;">    <h3>Connexion</h3><p>Avec vos identifiants fournis sur votre carte client ou quand vous vous êtes enregistrer.</p><br><form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" style="color:#363C44;">E-Mail</label>
                            <div class="col-md-6">
                            <input type="email" class="form-control" name="email" style="background-color:#363C44" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" style="color:#363C44;">Mot de passe</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" style="background-color:#363C44" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" <a class="waves-effect waves-light btn-large" style="padding-bottom: 5px;height: 40px;line-height: 40px;background-color: #363C44;color: white;font-weight: 400;font-size: 11px;border-left: 2px;border-right: 2px;border-bottom: 2px;border-top: 2px;border-style: solid;">
                                    SE CONNECTER
                                </button>
                                 <a href="{{ url('/password/reset') }}" class="waves-effect waves-light btn-large" style="padding-bottom: 5px;height: 40px;line-height: 40px;background-color: #363C44;color: white;font-weight: 400;font-size: 11px;border-left: 2px;border-right: 2px;border-bottom: 2px;border-top: 2px;border-style: solid;float:right;">
                                    MOT DE PASSE OUBLIE ?</a>    
                            </div>
                        </div>
                    </form></div>
                    <div class="col m6 l6 s12" style="background-image:url(img/Fotolia_10124971_XL.jpg);background-size:cover;height:500px;"></div>
                </div>
            </div>    
            <div class="col s12" style="background-color:rgba(0, 0, 0, 0.16);padding-top:5px;padding-bottom:5px;position:fixed;bottom:0;color:#E4E4E4;width:100%;text-align:center;font-weight: 300;font-size: 0.9em;">PRESSING DES HALLES - 17 Rue verchant - 04 67 90 67 21</div> 
@endsection
