@extends('layouts.master')

@section('contenu')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-4">Liste des Etudiants</h6>
   <div class="mt-4">
       <div class="d-flex justify-content-end mb-4">
        <a href="" class="btn btn-primary">Ajouter un Etudiant</a>
       </div>
    <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Classe</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($etudiants as $etud)
          
            <tr>
              <th scope="row">{{$etud->id}}</th> {{-- ou {{$etud->id}} --}}
              <td>{{$etud->nom}}</td>
              <td>{{$etud->prenom}}</td>
              <td>{{$etud->classe->libelle}}</td> {{-- {{$etud->classe_id}} --}}
              <td>
                  <a href="" class="btn btn-info">Modifier</a>
                  <a href="" class="btn btn-danger">Supprimer</a>
              </td>
            </tr>
          
          @endforeach
            
        </tbody>
      </table>
      {{-- {{ $etudiants->links() }} --}}     {{-- Paginator::useBootstrap(); est ajouter dans providoe dans la fonction boot() --}}
    </div>

  </div>
@endsection


