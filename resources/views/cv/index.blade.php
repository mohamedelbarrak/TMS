@extends('layouts.master')
@section('content')

<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">

		  @if(session()->has('success'))
			<div class="alert alert-success">
			{{ session()->get('success')}}
            </div>
          @endif
@if(Auth::user()->situa === 'admin' || Auth::user()->situa === 'supAdmin')
<a href="{{ url('/users') }}" class="btn btn-primary">Utilisateurs</a>
@endif
<!-- @if(Auth::user()->situa === 'supadmin')
<a href="{{ url('/users') }}" class="btn btn-primary">Utilisateurs</a>
@endif -->
@if(Auth::user()->situa == 'supAdmin')
<a href="{{ url('/users/Admins') }}" class="btn btn-primary">Admins</a>
@endif

			<div class="pull-right"><!--  -->
@if(Auth::user()->situa === 'admin' || Auth::user()->situa === 'supAdmin')				
<a href="{{ url('cvs/annoncesNonTretee') }}" class="btn btn-info">Annonces non traitée</a>
@endif
@if(Auth::user()->situa === 'admin' || Auth::user()->situa === 'supAdmin')				
<a href="{{ url('cvs/') }}" class="btn btn-info">Tous les annonces</a>
@endif
@if(Auth::user()->situa === 'admin' || Auth::user()->situa === 'supAdmin')				
<a href="{{ url('cvs/mesannonces') }}" class="btn btn-info">Mes annonces</a>
@endif

<a href="{{ url('users/'.Auth::user()->id.'/show') }}" class="btn btn-secondary">Consulter mon profile</a>
				<a href="{{ url('cvs/create')}}" class="btn btn-success">Nouveau commande</a>
			</div>
			<h1 >Liste des commandes</h1>
			

<!-- 
<div class="row">
	@foreach($cvs as $cv)
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail" >
			<img src="{{ asset('storage/'.$cv->photo) }}" alt="" style="width: 22rem; height: 20rem;">
			<div class="caption">
			<h3>{{ $cv->titre}}</h3>
			<p>
				    @if ( strlen( $cv->presentation ) >= 30)
					    <td> {{ substr($cv->presentation, 0, 30) }}...</td> {{ substr($cv->presentation, 0, 12)."..." }}
					@else
					    <td>{{ ($cv->presentation)}}</td>
					@endif

			</p>
			<p>


				<form action="{{ url('/cvs/'.$cv->id) }}" method="post">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
							<a href="" class="btn btn-primary">Details</a>
							<a href="{{ url('cvs/'.$cv->id.'/edit') }}" class="btn btn-info">Editer</a>
							<button type="submit" class="btn btn-danger">Supprimer</button>
						    </form>
			</p>
			</div>
		</div>
	</div>
	@endforeach
</div>
 -->

<!-- 
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
 -->

 <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
<div class="row">
	@foreach($cvs as $cv )
 <div class="card" style="width:380px">
 	<!-- <a href="paris.jpg"> -->
  <img style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;" class="card-img-top" src="{{ asset('storage/'.$cv->photo) }}" alt="Card image">
     <!-- </a> -->
  <div class="card-body">
    <h4 class="card-title" align="center" style="border:2px solid DodgerBlue;">{{ $user->entrepr}}</h4>
    <h6 style="color:Tomato">Date de commande :</h6>
    -{{ ($cv->datecomme)}}
    <p class="card-text">
    	<h6 style="color:Tomato">Point départ :</h6>
    @if ( strlen( $cv->depart ) >= 300)
					    <td> {{ substr($cv->depart, 0, 300) }}...</td> <!-- {{ substr($cv->presentation, 0, 12)."..." }} -->
					@else
					    <td>{{ ($cv->depart)}}</td>
					@endif
.<br>
        <h6 style="color:Tomato">Point d'arrivé :</h6>
	@if ( strlen( $cv->arrive ) >= 300)
					    <td> {{ substr($cv->arrive, 0, 300) }}...</td> <!-- {{ substr($cv->presentation, 0, 12)."..." }} -->
					@else
					    <td>{{ ($cv->arrive)}}</td>
					@endif
	.</p>
	
	<hr>
	@if($cv->situacv == 'off')
	<h6 >En cours de traitement</h6>
	@elseif($cv->situacv == 'on')
	<h6 >Annonce approuvée</h6>
	@else
	<h6 >Annonce rejetée</h6>
	@endif
	
	<form action="{{ url('/cvs/'.$cv->id) }}" method="post">
								{{ csrf_field() }}<!-- {{ csrf_token() }} // csrf_field() pour générer le token dans le input-->
								{{ method_field('DELETE') }}
					<a href="{{ url('/cvs/'.$cv->id.'/show') }}" class="btn btn-primary">Détails</a>
					@can('update', $cv)
					<a href="{{ url('cvs/'.$cv->id.'/edit') }}" class="btn btn-info">Editer</a>
					@endcan
					@if(Auth::user()->situa === 'admin' || Auth::user()->situa ===  'supAdmin')
					<a href="{{ url('cvs/'.$cv->id.'/onoff1') }}" class="btn btn-success">Approuver</a>
					<a href="{{ url('cvs/'.$cv->id.'/onoff2') }}" class="btn btn-secondary">Rejeter</a>
					@endif
					<button type="submit" class="btn btn-danger">Supprimer</button>
	</form>
  </div>
</div>

  @endforeach
</div>



</div>
</div>
</div>







@endsection