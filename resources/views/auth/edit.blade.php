@extends('layouts.master')
@section('content')

<!-- @if(count($errors))count car $errors est une tableau
<div class="alert alert-danger" role="alert">  
  <ul>
  @foreach($errors->all() as $message)
   <li>{{ $message }}</li>
  @endforeach
  </ul>
</div>
@endif -->

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<form action="{{ url('/users/'.$user->id) }}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT"><!-- car url('/users/'.$user->id) est put non pas post -->
				{{csrf_field()}}

				<div class="form-group">
					<label for="">Nom</label>
					<input type="text" name="name" class="form-control @if($errors->get('name')) is-invalid @else is-valid @endif" value="{{$user->name}}"><!-- value="{{$user->titre}} -->	

				@if($errors->get('name'))
				    @foreach($errors->get('name') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif

				</div>

				



				<div class="form-group">
					<label for="">Prenom</label>
					<input type="text" name="prenom" class="form-control @if($errors->get('prenom')) is-invalid @else is-valid @endif" value="{{$user->prenom}}"><!-- value="{{$user->titre}} -->	

				@if($errors->get('prenom'))
				    @foreach($errors->get('prenom') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif
				</div>





				<div class="form-group">
					<label for="">Entreprise</label>
					<input type="text" name="entrepr" class="form-control @if($errors->get('entrepr')) is-invalid @else is-valid @endif" value="{{$user->entrepr}}"><!-- value="{{$user->titre}} -->	

				@if($errors->get('entrepr'))
				    @foreach($errors->get('entrepr') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif
				</div>


				<div class="form-group">
					<label for="">Adresse E-mail</label>
					<input type="text" name="email" class="form-control @if($errors->get('email')) is-invalid @else is-valid @endif" value="{{$user->email}}"><!-- value="{{$user->titre}} -->	

				@if($errors->get('email'))
				    @foreach($errors->get('email') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif
				</div>






				<div class="form-group">
					<label for="">Numéro de téléphone</label>
					<input type="text" name="téléphone" class="form-control @if($errors->get('téléphone')) is-invalid @else is-valid @endif" value="{{$user->téléphone}}"><!-- value="{{$user->titre}} -->	

				@if($errors->get('téléphone'))
				    @foreach($errors->get('téléphone') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif
				</div>




<div class="form-group">
					<label for="">Pays</label>
					<input type="text" name="pays" class="form-control @if($errors->get('pays')) is-invalid @else is-valid @endif" value="{{$user->pays}}"><!-- value="{{$user->titre}} -->	

				@if($errors->get('pays'))
				    @foreach($errors->get('pays') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif
				</div>





				<div class="form-group">
					<label for="">Ville</label>
					<input type="text" name="ville" class="form-control @if($errors->get('ville')) is-invalid @else is-valid @endif" value="{{$user->ville}}"><!-- value="{{$user->titre}} -->	

				@if($errors->get('ville'))
				    @foreach($errors->get('ville') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif
				</div>


				<div class="form-group">
					<label for="">Adresse</label>
					<input type="text" name="adresse" class="form-control @if($errors->get('adresse')) is-invalid @else is-valid @endif" value="{{$user->adresse}}"><!-- value="{{$user->numero}} -->	

				@if($errors->get('adresse'))
				    @foreach($errors->get('adresse') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif
				</div>

                <div class="form-group">
					<label for=""></label>
					<input type="submit" class="form-control btn btn-info" value="Modifier">	
				</div>
            
				



					<a href="{{ url('/accueil') }}" class="btn btn-danger">Annuler</a>
			</form>
		</div>
	</div>
</div>

@endsection