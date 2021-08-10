@extends('layout.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier un poste</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('postes.index') }}"> Back</a>
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
  
    <form action="{{ route('postes.update',$poste->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="{{ $poste->Name }}">

                        <strong>Processeur:</strong>
                        <input class="form-control"  name="processeur" placeholder="{{ $poste->processeur }}">

                        <strong>Carte Mere:</strong>
                        <input class="form-control" name="carte_mere" placeholder="{{ $poste->carte_mere }}"
                        >
                        <strong>Carte Graphique:</strong>
                        <input class="form-control"  name="carte_graphique" placeholder="{{ $poste->carte_graphique }}">

                        <strong>RAM:</strong>
                        <input class="form-control"  name="ram" placeholder="{{ $poste->ram }}">

                        <strong>Memoire:</strong>
                        <input class="form-control"  name="memoire" placeholder="{{ $poste->memoire }}">

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
        </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection
