@extends('layouts.login')

<!-- Main Content -->
@section('content')
<div class="container" style="background-color:#363C44;width:100%;height:45vw;color:#363C44">
    <div class="row" style="padding-left:20px;padding-right:20px;">
    <h3 style="color:white;font-family: Helvetica Neue;font-weight: 100;">Espace client</h3>
      <div class="col l12 s12 m12" style="background-color:#FF6E41;height:400px;padding-left:25px;padding-bottom:25px;padding-top:25px;color:#363C44;"><h3>Renitialisation de mot de passe</h3><p>Pour votre compte client.</p><br>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col l11 s11 m11">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="l6 m6 s6">E-Mail Address</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary" style="background-color: #363C44;">
                                    Envoyer le lien de renitialisation mot de passe
                                </button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
@endsection
