@extends('layout.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier une reservation</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('reservations.index') }}"> Back</a>
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
    
    <!-- form modif reservation -->
    <form action="{{ route('reservations.update',$reservation->id) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Client:</strong>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">          
                    </div>

                    <div class="form-group">
                        <strong>Poste:</strong>
                        <input type="text" name="name" value="{{ $poste->name }}" class="form-control" placeholder="Name">

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
                <button type="submit" class="btn btn-primary"> Ajouter</button></a>
        </div>
    </div>
</form>   
@endsection