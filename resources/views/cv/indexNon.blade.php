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

			<div class="pull-right">
				<a href="{{ url('cvs/create')}}" class="btn btn-success">Nouveau Annonce</a>
			</div>
			<h1>La liste de mes Annonces</h1>
			<table class="table">
				<head>
					<tr>
						<th>Title</th>
						<th>Presentation</th>
						<th>Date</th>
						<th>action</th>
					</tr>
				</head>
				<body>
@foreach($cvs as $cv)
					<tr>
						<td>{{ $cv->titre}}</td><!-- <td>{{ $cv->titre}} <br>{{ $cv->user->name }}</td> -->
						
						<!-- <td>{{ $cv->presentation}}</td> -->
							
 @if ( strlen( $cv->presentation ) >= 12)
    <td> {{ substr($cv->presentation, 0, 12) }}...</td> <!-- {{ substr($cv->presentation, 0, 12)."..." }} -->
@else
    <td>{{ ($cv->presentation)}}</td>
@endif

						
						<td>{{ $cv->created_at}}</td>
						<td>
							<form action="{{ url('/cvs/'.$cv->id) }}" method="post">
								{{ csrf_field() }}<!-- {{ csrf_token() }} // csrf_field() pour générer le token dans le input-->
								{{ method_field('DELETE') }}
							<a href="" class="btn btn-primary">Details</a>
							<a href="{{ url('cvs/'.$cv->id.'/edit') }}" class="btn btn-info">Editer</a>
							<button type="submit" class="btn btn-danger">Supprimer</button>
						    </form>
						</th>
					</tr>
@endforeach
				</body>
			</table>
		</div>
	</div>
</div>













<div class="row">
	@foreach($cvs as $cv)
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
			<img src="{{ asset('storage/'.$cv->photo) }}" alt="">
			<div class="caption">
			<h3>{{ $cv->titre}}</h3>
			<p>
				    @if ( strlen( $cv->presentation ) >= 12)
					    <td> {{ substr($cv->presentation, 0, 12) }}...</td> <!-- {{ substr($cv->presentation, 0, 12)."..." }} -->
					@else
					    <td>{{ ($cv->presentation)}}</td>
					@endif

			</p>
			<p>
				<a href="#" class="btn btn-primary" role="button">Details</a>
			    <a href="#" class="btn btn-info" role="button">Editer</a>
			    <a href="#" class="btn btn-danger" role="button">Supprimer</a>
			</p>
			</div>
		</div>
	</div>
	@endforeach
</div>



<!-- 
<div class="form-group row">
<label for="situa" class="col-md-4 col-form-label text-md-right">{{ __('Vous etes : ') }}</label>

<div class="checkbox">
    <label >
    <input name="situa[]" type="checkbox" value="Donateur" id="situa" {{in_array("Donateur", $situa)?"checked":""}}>
Donateur
</label>
</div>
    <br>
<div class="checkbox">
    <label>
    <input name="situa[]" type="checkbox" value="Bénificier" id="situa" {{in_array("Bénificier", $situa)?"checked":""}} >
 Bénificier
</label>
</div>
</div>

 -->


@endsection