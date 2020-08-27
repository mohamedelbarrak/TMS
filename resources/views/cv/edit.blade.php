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
			<form action="{{ url('/cvs/'.$cv->id) }}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT"><!-- car url('/cvs/'.$cv->id) est put non pas post -->
				{{csrf_field()}}

				<div class="form-group">
					<label for="">Date de commande</label>
					<input type="text" name="datecomme" class="form-control @if($errors->get('datecomme')) is-invalid @else is-valid @endif" value="{{$cv->datecomme}}"><!-- value="{{$cv->titre}} -->	

				@if($errors->get('datecomme'))
				    @foreach($errors->get('datecomme') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif

				</div>

				<div class="form-group">
					<label for="">Point départ</label>
					<input type="text" name="depart" class="form-control @if($errors->get('depart')) is-invalid @else is-valid @endif" value="{{$cv->depart}}"><!-- value="{{$cv->titre}} -->	

				@if($errors->get('depart'))
				    @foreach($errors->get('depart') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif
				</div>
            
				<div class="form-group">
					<label for="">Point d'arrivé</label>
					<input type="text" name="arrive" class="form-control @if($errors->get('arrive')) is-invalid @else is-valid @endif" value="{{$cv->arrive}}"><!-- value="{{$cv->numero}} -->	

				@if($errors->get('arrive'))
				    @foreach($errors->get('arrive') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif
				</div>


				<div class="form-group">
					<label for="">Point d'arrivé</label>
					<input type="text" name="arrive" class="form-control @if($errors->get('arrive')) is-invalid @else is-valid @endif" value="{{$cv->arrive}}"><!-- value="{{$cv->numero}} -->	

				@if($errors->get('arrive'))
				    @foreach($errors->get('arrive') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif
				</div>

				<div class="form-group">
					<label for="">Quantité réel totale</label>
					<input type="text" name="reel" class="form-control @if($errors->get('reel')) is-invalid @else is-valid @endif" value="{{$cv->reel}}"><!-- value="{{$cv->numero}} -->	

				@if($errors->get('reel'))
				    @foreach($errors->get('reel') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif
				</div>

				<div class="form-group">
					<label for="">Nombre de palette</label>
					<input type="text" name="palette" class="form-control @if($errors->get('palette')) is-invalid @else is-valid @endif" value="{{$cv->palette}}"><!-- value="{{$cv->numero}} -->	

				@if($errors->get('palette'))
				    @foreach($errors->get('palette') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif
				</div>

				<div class="form-group">
					<label for="">Volume (m<sup>3</sup>)</label>
					<input type="text" name="volume" class="form-control @if($errors->get('volume')) is-invalid @else is-valid @endif" value="{{$cv->volume}}"><!-- value="{{$cv->numero}} -->	

				@if($errors->get('volume'))
				    @foreach($errors->get('volume') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif
				</div>


			<div class="form-group">
					<label for="">Type de marchandise</label>
					<input type="text" name="typemarch" class="form-control @if($errors->get('typemarch')) is-invalid @else is-valid @endif" value="{{$cv->typemarch}}"><!-- value="{{$cv->numero}} -->	

				@if($errors->get('typemarch'))
				    @foreach($errors->get('typemarch') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif
				</div>


<!-- ////////////////////////////////////////////
faux, mais pourqoui? 
<label for="">Type de marchandise</label>
<div class="col-md-6">
<div class="form-control @error('typemarch') is-invalid @enderror">
	@if($cv->typemarch == 'Gerbée')
    <input  name="typemarch" type="radio" value="Gerbée" id="typemarch" checked="checked">
    <label for="typemarch">Gerbée</label>
    @else
    <input  name="typemarch" type="radio" value="Non gerbée" id="typemarch" >
    <label for="typemarch">Gerbée</label>
    @endif
    <br>
</div>
<div class="form-control @error('typemarch') is-invalid @enderror">
	@if($cv->typemarch == 'Non gerbée')
    <input   name="typemarch" type="radio" value="Non gerbée" id="typemarch" checked="checked">
    <label for="typemarch">Non gerbée</label>
    @else
    <input   name="typemarch" type="radio" value="Gerbée" id="typemarch" >
    <label for="typemarch">Non gerbée</label>
    @endif
</div>
</div>
faux ??
//////////////////////////////////////////// -->

<label for="">Type de marchandise</label>
<div class="col-md-6">
<div class="form-control @error('typemarch') is-invalid @enderror">
	@if($cv->typemarch == 'Gerbée')
    <input  name="typemarch" type="radio" value="Gerbée" id="typemarch" checked="checked">
    <label for="typemarch">Gerbée</label>
    @else
    <input  name="typemarch" type="radio" value="Gerbée" id="typemarch" >
    <label for="typemarch">Gerbée</label>
    @endif
    <br>
</div>
<div class="form-control @error('typemarch') is-invalid @enderror">
	@if($cv->typemarch == 'Non gerbée')
    <input   name="typemarch" type="radio" value="Non gerbée" id="typemarch" checked="checked">
    <label for="typemarch">Non gerbée</label>
    @else
    <input   name="typemarch" type="radio" value="Non gerbée" id="typemarch" >
    <label for="typemarch">Non gerbée</label>
    @endif
</div>
</div>


<!-- //////////////////////////////////////////// -->

				<div class="form-group">
					<label for="">More information</label>
					<!-- <input type="text" name="presentation" class="form-control"> -->
					<textarea name="more" class="form-control @if($errors->get('more')) is-invalid @else is-valid @endif" rows="4">{{$cv->more}}</textarea>	

					@if($errors->get('more'))
				    @foreach($errors->get('more') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif

				</div>

				

<img class="card-img-top" src="{{ asset('storage/'.$cv->photo) }}" alt="Card image" style="float: none;width:400px;height:400px;">
<div class="form-group">
                	<label for="">Image</label>
                	<input class="form-control " type="file" name="photo" value="{{ old('photo')}}">
                </div>


				<div class="form-group">
					<label for=""></label>
					<input type="submit" class="form-control btn btn-info" value="Modifier">	
				</div>

					<a href="{{ url('/cvs') }}" class="btn btn-danger">Annuler</a>
			</form>
		</div>
	</div>
</div>

@endsection