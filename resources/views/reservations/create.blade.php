@extends('layout.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Ajouter une nouvelle reservation</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('reservations.index') }}"> <-Back</a>
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
   
<form action="{{ route('reservations.store') }}" method="POST">
    @csrf
    <div class="row">
        <!-- form ajout nouvelle reservation -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Client:</strong>
                        <select name="user_id" class="form-control">
                                    @foreach($users as $user)
                                    <option value='{{ $user->id }}'>{{ $user->name }}</option>
                                    @endforeach
                                </select>            
                    </div>

                    <div class="form-group">
                        <strong>Poste:</strong>
                        <select name="poste_id" class="form-control">
                                    @foreach($postes as $poste)
                                    <option value='{{ $poste->id }}'>{{ $poste->name }}</option>
                                    @endforeach
                        </select>            
                    </div>
                
                    <div class="form-group">
                        <strong>Debut:</strong>
                            <input type="Time" name="debut" id="">
                        <strong>Fin:</strong>
                           <input type="Time" name="fin" id="">
                    </div>
                    <div class="form-group">
                        <strong>Jour:</strong>
                        <input type="date" name="jour" id="">
                    </div>
            </div>
        
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </div>
</form>



@endsection