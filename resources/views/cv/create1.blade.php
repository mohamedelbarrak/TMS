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

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ url('cvs') }}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
				
				<div class="form-group"><!-- class="form-group has-error" -->
					<label for="">Titre</label>
					<input type="text" name="titre" class="form-control @if($errors->get('titre')) is-invalid @endif" value="{{ old('titre')}}">	
				
				 @if($errors->get('titre'))
				    @foreach($errors->get('titre') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif

                </div>

				<div class="form-group">
					<label for="">Presentation</label>
					<!-- <input type="text" name="presentation" class="form-control"> -->
					<textarea name="presentation" class="form-control @if($errors->get('presentation')) is-invalid @endif" rows="7">{{ old('presentation')}}</textarea>

				@if($errors->get('presentation'))
				    @foreach($errors->get('presentation') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				@endif

				</div>

				<div class="form-group"><!-- class="form-group has-error" -->
					<label for="">L'adresse(ville)</label>
					<input type="text" name="adresse" class="form-control @if($errors->get('adresse')) is-invalid @endif" value="{{ old('adresse')}}">	
				
				 @if($errors->get('adresse'))
				    @foreach($errors->get('adresse') as $message)
				    <li style="color:red">{{ $message }}</li>
				    @endforeach
				  @endif

                </div>

                <div class="form-group"><!-- class="form-group has-error" -->
					<label for="">Numéro de téléphone</label>
					<input type="text" name="numero" class="form-control @if($errors->get('numero')) is-invalid @endif" value="{{ old('numero')}}">	
				
				 @if($errors->get('numero'))
				    @foreach($errors->get('numero') as $message)
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