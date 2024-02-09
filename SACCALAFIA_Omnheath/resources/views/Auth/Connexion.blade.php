@extends('Layout')
@section('contenu')
<h1 style="text-align: center">CONNEXION</h1>
<div  class="Container col-4 mt-5">
    <form method="POST" action="{{route('Connexion')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        @error('email')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="Password" name="Password" class="form-control" id="exampleInputPassword1">
          </div>
          @error('Password')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Confirmer Password</label>
            <input type="Confirm Password" name="Confirm Password" class="form-control" id="exampleInputPassword1">
          </div>
        <div class="mb-3 form-check">
             <input type="checkbox" class="form-check-input" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1">Se rappeler de moi</label>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>

</div>
@endsection
