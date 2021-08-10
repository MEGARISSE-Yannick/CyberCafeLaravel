@extends('layout.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Ajouter un nouveau poste</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('postes.index') }}"> ⏮</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('postes.store') }}" method="POST">
    @csrf
  
     <div class="row">               
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">

                <strong>Processeur:</strong>
                <input class="form-control"  name="processeur" placeholder="Configuration du processeur">

                <strong>Carte Mere:</strong>
                <input class="form-control" name="carte_mere" placeholder="Configuration de la carte mère"
                >
                <strong>Carte Graphique:</strong>
                <input class="form-control"  name="carte_graphique" placeholder="Configuration de la carte graphique">

                <strong>RAM:</strong>
                <input class="form-control"  name="ram" placeholder="Configuration de la RAM">

                <strong>Memoire:</strong>
                <input class="form-control"  name="memoire" placeholder="Configuration de la memoire">

                <strong>Type:</strong>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="type" id="gaming" value="1">
                <label class="form-check-label" for="gaming">
                    Gaming
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="type" id="bureau" value="0">
                <label class="form-check-label" for="bureau">
                    Bureau                
                </label>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">➕</button>
        </div>
    </div>
   
</form>
@endsection