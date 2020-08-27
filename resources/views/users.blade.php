
@extends('layouts.master')
@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-12">
          @if(session()->has('success'))
           <div class="alert alert-success">
          {{ session()->get('success')}}
           </div>
          @endif
      <h1>listes des users</h1>

      <table class="table">
        <head>
          <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Mail</th>
            <th>Entreprise</th>
          </tr>
        </head>

        <body>
          @foreach($usersList as $tomp)
          <tr>
            <td>{{ $tomp->name }}</td>
            <td>{{ $tomp->prenom }}</td>
            <td>{{ $tomp->email }}</td>
            <td>{{ $tomp->entrepr }}</td>
            <td>
  <form action="{{ url('/users/'.$tomp->id) }}" method="post">
                {{ csrf_field() }}<!-- {{ csrf_token() }} // csrf_field() pour générer le token dans le input-->
                {{ method_field('DELETE') }}
  <a href="{{ url('users/'.$tomp->id.'/showuser') }}" class="btn btn-primary">Details</a>
@if(Auth::user()->situa == 'supAdmin')
  <a href="{{ url('users/'.$tomp->id.'/devenAdmin') }}" class="btn btn-outline-info">UserToAdmin</a>
@endif
              <button type="submit" class="btn btn-danger">Supprimer</button>
  </form>
            </td>
          </tr>
          @endforeach
        </body>
      </table>

    </div>
  </div>
</div>
  @endsection