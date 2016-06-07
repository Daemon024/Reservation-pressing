@extends('layouts.login')

@section('content')
<style>
label {
    font-size: 0.8rem;
    color: #363C44;
};

input:not([type]), input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
    background-color: #363C44; !important;
    border: none; !important;
    border: 1px solid #FFFFFF; !important;
    border-radius: 0; !important;
    outline: none; !important;
    height: 3rem; !important;
    width: 100%; !important;
    font-size: 1rem; !important;
    margin: 0 0 15px 0; !important;
    padding: 0; !important;
    box-shadow: none; !important;
    box-sizing: content-box; !important;
    transition: all 0.3s; !important;
    margin-top: 5px; !important;
};
</style>
<div class="container" style="background-color:#363C44;width:100%;height:45vw;color:#363C44">
<div class="row" style="padding-left:20px;padding-right:20px;">
<h3 style="color:white;font-family: Helvetica Neue;font-weight: 100;">Espace client</h3>
<div class="col l11 s11 m6" style="background-color:#FF6E41;height:auto;padding-bottom:20px;padding-left:25px;color:#363C44;">    
<h3>Inscription</h3><p>Inscrivez-vous pour suivre vos prestations.</p><br>
<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
    {!! csrf_field() !!}
    <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Nom</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="nom" value="{{ old('nom') }}">
                                @if ($errors->has('nom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Prenom</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="prenom" value="{{ old('prenom') }}">
                                @if ($errors->has('prenom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('adresse') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Adresse</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="adresse" value="{{ old('adresse') }}">
                                @if ($errors->has('adresse'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('codepostal') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Code Postal</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="codepostal" value="{{ old('codepostal') }}">
                                @if ($errors->has('codepostal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codepostal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('ville') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Ville</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ville" value="{{ old('ville') }}">

                                @if ($errors->has('ville'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ville') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Mot de passe</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Telephone (mobile)</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tel" value="{{ old('tel') }}">

                                @if ($errors->has('tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                           <button type="submit" <a class="waves-effect waves-light btn-large" style="padding-bottom: 5px;height: 40px;line-height: 40px;background-color: #363C44;color: white;font-weight: 400;font-size: 11px;border-left: 2px;border-right: 2px;border-bottom: 2px;border-top: 2px;border-style: solid;">
                                    S'inscrire
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
