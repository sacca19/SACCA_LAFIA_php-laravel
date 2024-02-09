@extends('Layout')
@section('contenu')
<h1 style="text-align: center">INSCRIPTION</h1>
<div class="container col-4 mt-5">
    <form method="POST" action="{{route('Inscription')}}">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nom</label>
          <input type="text"  name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Prenom</label>
          <input type="text" name="Prenom" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        @error('email')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Avatar</label>
            <input type="file" name="avatar" class="form-control" id="formFile">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="Password"class="form-control" id="exampleInputPassword1">
          </div>
          @error('password')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Confirmer Password</label>
            <input type="password" name="confirm Password" class="form-control" id="exampleInputPassword1">
          </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
      </form>

</div>
@endsection
