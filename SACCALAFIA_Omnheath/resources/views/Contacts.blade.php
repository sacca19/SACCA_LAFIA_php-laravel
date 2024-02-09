@extends('Layout')
@section('contenu')
<h1 style="text-align: center"> Systeme de Gestion des contatcs</h1>
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">email</th>
            <th scope="col">Telephone</th>
          </tr>
        </thead>
    </table>

</div>

    <div style="display: flex;"  class="button">
        <a class="btn btn-primary " href="{{route('Ajouter')}}">Ajouter</a>
        <a class="btn btn-warning " href="{{route('Modifier')}}">Modifier</a>
        <a class="btn btn-danger " href="{{route('Supprimer')}}">suprimer</a>
     </div>

@endsection
<style>
    .button{
        justify-content: center;
        gap: 25px;
        padding: 100px;
    }
    .container{
        border-radius: solide black 1px;
        padding: 100px;
    }
</style>

