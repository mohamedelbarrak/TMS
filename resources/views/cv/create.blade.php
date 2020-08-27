@extends('layouts.master')
@section('content')

<!-- @if(count($errors))  count car $errors est une tableau
<div class="alert alert-danger" role="alert">
  
  <ul>
  @foreach($errors->all() as $message)
   <li>{{ $message }}</li>
  @endforeach
  </ul>
</div>
@endif -->

<br><br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ url('cvs') }}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
				
				<div class="form-group"><!-- class="form-group has-error" -->
					<label for="">Date de commande</label>
					<input type="text" name="datecomme" class="form-control @if($errors->get('datecomme')) is-invalid @endif" value="{{ old('datecomme')}}">	
				
				 <!-- @if($errors->get('datecomme'))
				    @foreach($errors->get('datecomme') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif -->

                </div>







<div class="form-group"><!-- class="form-group has-error" -->
					<label for="">Point départ</label>
					<input type="text" name="depart" class="form-control @if($errors->get('depart')) is-invalid @endif" value="{{ old('depart')}}">	
				
				 @if($errors->get('depart'))
				    @foreach($errors->get('depart') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif

                </div>



<div class="form-group"><!-- class="form-group has-error" -->
					<label for="">Point d'arrivé</label>
					<input type="text" name="arrive" class="form-control @if($errors->get('arrive')) is-invalid @endif" value="{{ old('arrive')}}">	
				
				 @if($errors->get('arrive'))
				    @foreach($errors->get('arrive') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif

                </div>





<!-- <div class="form-group">
					<label for="">Point d'arrivé</label>
					<input type="text" name="typemarch" class="form-control @if($errors->get('typemarch')) is-invalid @endif" value="{{ old('typemarch')}}">	
				
				 @if($errors->get('typemarch'))
				    @foreach($errors->get('typemarch') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif

                </div> -->


 

<label for="">Type de marchandise</label>
<div class="col-md-6">
<div class="form-control @error('typemarch') is-invalid @enderror">
    <input  name="typemarch" type="radio" value="Gerbée" id="typemarch" >
    <label for="typemarch">Gerbée</label>
    <br>
</div>
<div class="form-control @error('typemarch') is-invalid @enderror">
    <input   name="typemarch" type="radio" value="Non gerbée" id="typemarch" >
    <label for="typemarch">Non gerbée</label>
</div>
</div>



<div class="form-group"><!-- class="form-group has-error" -->
					<label for="">Quantité réel totale (en tonnage)</label>
					<input type="text" name="reel" class="form-control @if($errors->get('reel')) is-invalid @endif" value="{{ old('reel')}}">	
				
				 @if($errors->get('reel'))
				    @foreach($errors->get('reel') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif

                </div>




<div class="form-group"><!-- class="form-group has-error" -->
					<label for="">Nombre de palette</label>
					<input type="text" name="palette" class="form-control @if($errors->get('palette')) is-invalid @endif" value="{{ old('palette')}}">	
				
				 @if($errors->get('palette'))
				    @foreach($errors->get('palette') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif

                </div>





<div class="form-group"><!-- class="form-group has-error" -->
					<label for="">Volume (m<sup>3</sup>) </label>
					<input type="text" name="volume" class="form-control @if($errors->get('volume')) is-invalid @endif" value="{{ old('volume')}}">	
				
				 @if($errors->get('volume'))
				    @foreach($errors->get('volume') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif

                </div>









				<div class="form-group">
					<label for="">More information</label>
					<!-- <input type="text" name="more" class="form-control"> -->
					<textarea name="more" class="form-control @if($errors->get('more')) is-invalid @endif" rows="3">{{ old('more')}}</textarea>

				@if($errors->get('more'))
				    @foreach($errors->get('more') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				@endif

				</div>



                <div class="form-group">
                	<label for="">Image</label>
                	<input class="form-control @if($errors->get('photo')) is-invalid @endif" type="file" name="photo" value="{{ old('photo')}}">
                </div>


@if($errors->get('photo'))
				    @foreach($errors->get('photo') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif
                
<!-- @if($errors->get('photo'))
				    @foreach($errors->get('photo') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif -->

				<div class="form-group" >
					<label for=""></label>
					<input type="submit" class="form-control btn btn-primary" value="Enregistrer">	
				</div>
			</form>
		</div>
	</div>
</div>

@endsection