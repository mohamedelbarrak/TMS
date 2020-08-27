@extends('layouts.master')
@section('content')

<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
<!-- 
		  @if(session()->has('success'))
			<div class="alert alert-success">
			{{ session()->get('success')}}
            </div>
          @endif -->

<center></center>
			<!-- <h6>L'id de l'utilisateur :  {{ ($user->id)}}</h6> -->
			
<br>

<div class="row">
 <div class="card" style="width:800px">
 	<!-- <a href="paris.jpg"> -->
  


     <!-- </a> -->
  <div class="card-body">
    <center><h4 class="card-title" style="border:2px solid DodgerBlue;">{{ $user->entrepr}}</h4></center>
    <p class="card-text">
    	                <br><br>
					    <h6><U>User : </U></h6>
					    <br>
					    <td>{{ $user->name}} {{ ($user->prenom)}}</td>
					    <br><br>
					    <h6><U>E-mail :</U></h6>
					    <br> 
					    <td>{{ ($user->email)}}</td>
					    <br><br>
					    <h6><U>Numéro de téléphone : </U></h6>
					    <br>
					    <td>{{ ($user->téléphone)}}</td>
					    <br><br>
					    <h6><U>Pays : </U></h6>
					    <br>
					    <td>{{ ($user->pays)}}</td>
					    <br><br>
					    <h6><U>Ville : </U></h6>
					    <br>
					    <td>{{ ($user->ville)}}</td>
					    <br><br>
					    <h6><U>Adresse : </U></h6>
					    <br>
					    <td>{{ ($user->adresse)}}</td>
					    <!-- <br><br>
					    @if($user->situa != 'Donateur')
					    <h6><U>compte_bancaire : </U></h6>
					    <br>
					    <td>{{ ($user->compte_bancaire)}}</td>
					    @endif -->
					    <br><br>
	</p>
<!-- Auth::user()->situa === 'admin' || Auth::user()->situa === 'supAdmin' || -->
@if( Auth::user()->id === $user->id)
<a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-info">Editer</a>
@endif
</div></div></div></div></div></div>
</div>
</div>
</div>
</div>
</div>

@endsection