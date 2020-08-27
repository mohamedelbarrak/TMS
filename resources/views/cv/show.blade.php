@extends('layouts.master')
@section('content')



    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
				</div>
				
				<div class="profile-userbuttons">
					<center><!-- href="{{ url('users/{id}/edit') }} -->
<a href="{{ url('users/'.$cv->user_id.'/show') }}" class="btn btn-info">Consulter le profil</a></center>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   



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
			<h6>L'id de l'annonce :  {{ ($cv->id)}}</h6>
			
<br>

<div class="row">
 <div class="card" style="width:600px">
 	<!-- <a href="paris.jpg"> -->
  <img style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;" class="card-img-top" src="{{ asset('storage/'.$cv->photo) }}" alt="Card image">
     <!-- </a> 
     //$cv->depart = $request->input('depart');//$user->name
      //  $cv->arrive = $request->input('arrive');
     //   $cv->reel = $request->input('reel');
      //  $cv->palette = $request->input('palette');
      //  $cv->volume = $request->input('volume');
       // $cv->datecomme = $request->input('datecomme');
      //  $cv->typemarch = $request->input('typemarch');
      // 	$cv->more = $request->input('more');
-->
  <div class="card-body">
    <center><h4 class="card-title">{{ $user->entrepr}}</h4></center>
    <p class="card-text">
    					<h6>Date de commande :</h6>
					    <td>{{ ($cv->datecomme)}}</td>
					    <br><br>
					    <h6>Point départ :</h6>
					    <br> 
					    <td>{{ ($cv->depart)}}</td>
					    <br><br>
					    <h6>Point d'arrivé : </h6>
					    <br>
					    <td>{{ ($cv->arrive)}}</td>
					    <br><br>
					    <h6>Quantité réel totale :</h6>
					    <br> 
					    <td>{{ ($cv->reel) }}  Tonne</td>
					    <br><br>
					    <h6>Nombre de palette :</h6>
					    <br> 
					    <td>{{ ($cv->palette)}}</td>
					    <br><br>
					    <h6>Volume (m<sup>3</sup>) :</h6>
					    <br> 
					    <td>{{ ($cv->volume)}}</td>
					    <br><br>
					    <h6>Type de marchandise :</h6>
					    <br> 
					    <td>{{ ($cv->typemarch)}}</td>
					    <br><br>
					    <h6>More information :</h6>
					    <br> 
					    <td>{{ ($cv->more)}}</td>
					    <br><br>
					    
					    <h6>Date de creation : </h6>
					    <br>
					    <td>{{ ($cv->created_at)}}</td>
					    <br><br>
					    <h6>Date de dernière modification : </h6>
					    <br>
					    <td>{{ ($cv->updated_at)}}</td>
					    <br>
	</p>
	<!-- <form action="{{ url('/cvs/'.$cv->id) }}" method="post">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
					@can('update', $cv)
					<a href="{{ url('cvs/'.$cv->id.'/edit') }}" class="btn btn-info">Editer</a>
					@endcan
				
					<button type="submit" class="btn btn-danger">Supprimer</button>
	</form> -->
					
  </div></div></div></div></div></div>
</div>
</div>
</div>
</div>
</div>







            </div>
		</div>
	</div>


<br>
<br>






















@endsection