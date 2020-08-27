
<!DOCTYPE html>
<html>
<head>
  <title>Document</title>
</head>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
<style >
body {background-image: url('images/W3.png');
      background-repeat: no-repeat;
      /* toujours apparaître  */
      background-attachment: fixed; 
      background-size: cover;/* ou 50% 66% ...*/
     }
</style>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <a class="navbar-brand" href="/accueil">COVID 19</a> -->
  <img src="Capture1.PNG" alt="" class="rounded" ><img src="Capture.PNG" alt="" class="rounded" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        
        <a class="nav-link" href="#Solutions">Solutions</a>
        
      </li>
      <li class="nav-item">
        
        <a class="nav-link" href="/accueil" target="_blank">Actualité</a>
      
      </li>
      
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Statistique
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Statistique#Cas de coronavirus" target="_blank">Cas de coronavirus: 7,211</a>
          <a class="dropdown-item" href="Statistique#Décès" target="_blank">Décès: 196</a>
          <a class="dropdown-item" >Guéri: 4,280</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" >dernière mise à jour: 24/05/2020</a>
        </div>
      </li> -->

      <li class="nav-item">
        
        <a class="nav-link" href="#objectifs" >Nos objectifs</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="#propos" >A propos de nous   </a>
      </li><li class="nav-item">
        <a class="nav-link" href="#INTRODUCTION" >Contactez nous       </a>
      </li>
      
    
    
    <!-- <h3 style="text-align:center; color:red">     بقى فدارك تنجا نت و حبابك#       </h3> -->
    <div class="dropdown-divider"></div>
  </ul>

  <div class="flex-center  full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                          <!-- href="/deconnexion" -->
                        <!-- <tr> -->
                        <!-- </tr> -->
                       <h5>     <a href="{{ url('/cvs') }}"> Mon espace</a> 
                            <a>  |  </a>
                       <a href="{{ url('/deconnexion') }}"> Se déconnecter</a> </h5>
          
                    @else
                <h5>        <a href="{{ route('login') }}">Connexion</a>
<!-- <h4>|</h4> --><a>  |  </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Inscription</a></h5>
                        @endif
                    @endauth
                </div>
            @endif
  </div>
</nav>

<!-- <a name="INTRODUCTION">
<iframe 
 src="https://www.worldometers.info/coronavirus/country/morocco/"
 width="100%" height="500"
 frameborder="0" 
 >
</iframe>
</a> -->


@yield('content')

<br><br><br>
<a name="INTRODUCTION">
</a>
<span  class="d-block p-2 bg-dark text-white" >
<div class="container">
  <div class="row">
                
                <div class="col-sm-4" align="center">
                    <div class="media">
                      <!-- <div class="media-body">
    <h5 class="mt-0">Mohamed ELBARRAK</h5>
    Ingenieur informatique
  </div> -->
  <!-- <img src="Capture2.PNG" alt="" class="rounded" > -->
  
    
</div>
                </div>
                <div class="col-sm-4" align="center">
                    
                </div>
            </div>
            </span>
<!--            
            <div class="attrb" align="center">
                <span>
            &copy2020 Covid-19VSmaroc. &nbsp;Tous les droits sont réservés.
          </span>
            </div>
        </div>
-->  
<div class="bg-info clearfix" align="center">
   <span ><!-- class="d-block p-2 bg-primary text-white" align="center" -->
    
            &copy2020 Transport_maroc. &nbsp;Tous les droits sont réservés.
          </span> 

</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<!-- <script src="{{asset('js/jquery.min.js')}}"></script> -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
