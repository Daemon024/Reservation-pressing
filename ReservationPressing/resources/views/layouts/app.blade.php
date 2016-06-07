<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pressing des Halles</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.bundle.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.bundle.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/animatecss/3.5.1/animate.css" integrity="sha256-DbEot+lC/Kpjr33eXzHSzQQZNrDS9IYQRXxj/KvBrJc=" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <style>
              main {
                flex: 1 0 auto;
              };
        
        .btn-large {
            height: 35px;
            line-height: 35px;
            }

        select {
            display: block!important; 
        }
        .btn, .btn-large {
            text-decoration: none;
            color: #fff;
            background-color: #26a69a;
            text-align: center;
            letter-spacing: .5px;
            transition: .2s ease-out;
            cursor: pointer;
            padding-bottom: 5px;
            height: 40px;
            line-height: 40px;
            background-color: #363C44;
            color: white;
            font-weight: 400;
            font-size: 11px;
            border-left: 2px;
            border-right: 2px;
            border-bottom: 2px;
            border-top: 2px;
            border-style: solid;
        };
        .btn:hover, .btn-large:hover {
            text-decoration: none;
            color: #363C44;
            background-color: #fff;
            text-align: center;
            letter-spacing: .5px;
            transition: .2s ease-out;
            cursor: pointer;
            padding-bottom: 5px;
            line-height: 40px;
            font-weight: 400;
            font-size: 11px;
            border-left: 2px;
            border-right: 2px;
            border-bottom: 2px;
            border-top: 2px;
            border-style: solid;
            /* height: 20px; */
        };
        </style>
        <script>
        $(document).ready(function() {
            $('.js-scrollTo').on('click', function() { 
                var page = $(this).attr('href'); 
                var speed = 750; 
                $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
                return false;
            });
        });
    </script>
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <!-- Styles -->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout" style="background-color: rgba(255, 87, 34, 0.88);">
<!-- NAVIGATION EN HAUT -->
<nav>
<!-- Navigation avec un if pour voir si l'utilisateur est authentifié du coup on change le menu en fonction -->
    @if (Auth::guest())
    <div class="nav-wrapper" style="border-bottom: 0px;">
    @else
    <div class="nav-wrapper">
    @endif
    <a class="brand-logo" href="{{ url('/dashboard') }}">
    @if (Auth::guest())
    <img src="/img/Logo.png" style="width:30px;">
    <p style="color:#363C44;display: inline-block;padding: 0;margin-top: -10px;font-weight: 400;margin-top: -50px;">Pressing des Halles</p> 
    @else
    <p style="color:#363C44;display: inline-block;padding: 0;margin-top: -10px;font-weight: 400;font-style: italic;"> Mon</p> pressing : <p style="color:#363C44;display: inline-block;padding: 0;margin-top: -10px;font-weight: 400;font-style: italic;"> mon</p> espace client</a>
    @endif
    </a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        @if (Auth::guest())
            <li><a class="js-scrollTo" href="#infos" >A propos du pressing</a></li>
            <li><a class="js-scrollTo" href="#tarifs" >Tarifs</a></li>
            <li><a class="waves-effect waves-light btn-large" style="padding-bottom: 5px;height: 40px;line-height: 40px;background-color: white;color: #363C44;font-weight: 400;font-size: 11px;border-left: 2px;border-right: 2px;border-bottom: 2px;border-top: 2px;border-style: solid;" href="{{ url('/login') }}">Connexion</a></li>
            <li><a class="waves-effect waves-light btn-large" style="padding-bottom: 5px;height: 40px;line-height: 40px;background-color: white;color: #363C44;font-weight: 400;font-size: 11px;border-left: 2px;border-right: 2px;border-bottom: 2px;border-top: 2px;border-style: solid;" href="{{ url('/register') }}">Enregistrement</a></li>
        @else
            <li><a class="waves-effect waves-light btn-large" href="{{ url('/dashboard') }}" style="padding-bottom: 5px;height: 40px;line-height: 40px;background-color: #363C44;color: white;font-weight: 400;font-size: 11px;border-left: 2px;border-right: 2px;border-bottom: 2px;border-top: 2px;border-style: solid;" >Mon historique</a></li>
            <li><a class="waves-effect waves-light btn-large" href="{{ url('/booking') }}" style="padding-bottom: 5px;height: 40px;line-height: 40px;background-color: #363C44;color: white;font-weight: 400;font-size: 11px;border-left: 2px;border-right: 2px;border-bottom: 2px;border-top: 2px;border-style: solid;">Faire une réservation</a></li>
            <li><a class="waves-effect waves-light btn-large" href="{{ url('/account') }}" style="padding-bottom: 5px;height: 40px;line-height: 40px;background-color: #363C44;color: white;font-weight: 400;font-size: 11px;border-left: 2px;border-right: 2px;border-bottom: 2px;border-top: 2px;border-style: solid;">Mon compte</a></li>
             <p style="display:inline;padding-right:10px;font-weight:300;">Bienvenue {{ Auth::user()->nom}} {{ Auth::user()->prenom}}
             <a href="{{ url('/logout') }}" style="font-size: 9px;font-weight: 600;padding-left: 15px;">Se deconnecter</a></p>
        @endif
      </ul>
    </div>

  </nav>
    @yield('content')
    <!-- JavaScripts -->
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
 $(document).ready(function() {
    $('select').material_select();
  });        
</script>
</body>
</html>
