@extends('layout.layout')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Gestion des postes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('reservations.create') }}">+ajouter poste</a>
            
            
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
   <div>

   <form action="{{ route('reservations.store') }}" method="POST">
    @csrf
  
    
    
   <!-- tableau affichage tout les reservations -->
    <table class="table table-bordered">
        <tr>
            <th>🌶</th>
            <th>id client</th>
            <th>id poste</th>
            <th>debut / fin</th>
            <th>Jour</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($reservations as $reservation)
        <tr>
            <td>{{ ++$i }}</td>
            <td>
            {{ App\Models\User::where(['id' => $reservation->user_id])->get('name')[0]->name }}
            </td>
            <td>
            {{ App\Models\Poste::where(['id' => $reservation->poste_id])->get('name')[0]->name }}
            </td>
            <td>{{ $reservation->debut }}</td>
            <td>{{ $reservation->fin }}</td>
            <td>{{ $reservation->jour }}</td>
            <td>
            <form action="{{ route('reservations.destroy',$reservation->id) }}" method="POST">
        <a class="btn btn-primary" href="{{ route('reservations.edit',$reservation->id) }}">modif</a>

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
            </td>
        </tr>
        @endforeach
    </table>

  
@endsection
