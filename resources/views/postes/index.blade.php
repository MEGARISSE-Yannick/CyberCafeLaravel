@extends('layout.layout')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Gestion des postes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('postes.create') }}">+ajouter poste</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nom</th>
            <th>Configuration</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($postes as $poste)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $poste->name }}</td>
            <td>{{ $poste->config }}</td>
            <td>
                <form action="{{ route('postes.destroy',$poste->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('postes.show',$poste->id) }}">voir</a>
    
                    <a class="btn btn-primary" href="{{ route('postes.edit',$poste->id) }}">modif</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $postes->links() !!}
      
@endsection