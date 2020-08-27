@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inscription') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <!--  -->
                       <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
<label for="entrepr" class="col-md-4 col-form-label text-md-right">{{ __('Entreprise') }}</label>

                            <div class="col-md-6">
                                <input id="entrepr" type="text" class="form-control @error('entrepr') is-invalid @enderror" name="entrepr" value="{{ old('entrepr') }}" required autocomplete="entrepr" autofocus>

                                @error('entrepr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        
                        <!--  -->

<div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="téléphone" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>

                            <div class="col-md-6">
                                <input id="téléphone" type="text" class="form-control @error('téléphone') is-invalid @enderror" name="téléphone" value="{{ old('téléphone') }}" required autocomplete="téléphone" autofocus>

                                @error('téléphone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="pays" class="col-md-4 col-form-label text-md-right">{{ __('Pays') }}</label>

                            <div class="col-md-6">
                                <input id="pays" type="text" class="form-control @error('pays') is-invalid @enderror" name="pays" value="{{ old('pays') }}" required autocomplete="pays" autofocus>

                                @error('pays')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>

                            <div class="col-md-6">
                                <input id="ville" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus>

                                @error('ville')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                            <div class="col-md-6">
                                <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" autofocus>

                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        













<!-- 
 <div class="form-group row">
<label for="myCheck" class="col-md-4 col-form-label text-md-right">Vous etes :</label> 
<input type="radio" id="myCheck" onclick="myFunction()">Donateur
<input type="radio" id="myCheck1" >Bénificier -->
<!-- <p id="text" style="display:none">Checkbox is CHECKED! -->
<!--  <div  id="text" style="display:none" class="col-md-10">
    <div class="form-group row">
                            <label for="compte_bancaire" class="col-md-4 col-form-label text-md-right">{{ __('Compte_bancaire') }}</label>

                            <div class="col-md-6">
                                <input id="compte_bancaire" type="text" class="form-control " name="compte_bancaire" value="{{ old('compte_bancaire') }}" >

                                
                            </div>
                        </div>
</div> -->

<!-- </p> -->

<!-- <script>
function myFunction() {
  var checkBox = document.getElementById("situa");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
<script>
function myFunction1() {
  var checkBox = document.getElementById("situa");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>

</div> -->

























<!-- 
<div class="form-group row">
                            <label for="compte_bancaire" class="col-md-4 col-form-label text-md-right">{{ __('situa') }}</label>

                            <div class="col-md-6">
                                <input id="situa" type="text" class="form-control @error('situa') is-invalid @enderror" name="situa" value="{{ old('situa') }}" required autocomplete="situa" autofocus>

                                @error('situa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 -->
 <!-- <div class="form-group row">
    
<label for="situa" class="col-md-4 col-form-label text-md-right">{{ __('Vous êtes  ') }}</label>
<div class="col-md-6">
<div class="form-control @error('situa') is-invalid @enderror">
    <input  name="situa" type="radio" value="Bénéficiaire" id="situa" >
    <label for="situa">Bénéficiaire</label>
    <br>
</div>
<div class="form-control @error('situa') is-invalid @enderror">
    <input   name="situa" type="radio" value="Donateur" id="situa" >
    <label for="situa">Donateur</label>
</div>
</div>
    </div> -->



<!-- <div class="col-md-10">
 <div  id="text" style="display:none" >
    <div class="form-group row">
                            <label for="compte_bancaire" class="col-md-4 col-form-label text-md-right">{{ __('Compte_bancaire111') }}</label>

                            <div class="col-md-6">
                                <input id="compte_bancaire111" type="text" class="form-control " name="compte_bancaire111" value="{{ old('compte_bancaire111') }}" >

                                
                            </div>
                        </div>
</div>
</div>
 -->

<!--
<select name="Animaux">
        <option value="C">Chimpanzé</option>
        <option value="E">Eléphant</option>
        <option value="G">Girafe</option>
        <option value="S">Serpent</option>
        <option value="Z">Zèbre</option>
    </select>

                          -->


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
