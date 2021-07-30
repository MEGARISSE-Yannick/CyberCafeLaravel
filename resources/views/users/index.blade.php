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
    <th>Email</th>
    <th>Telephone</th>
    <th width="280px">Action</th>
</tr>
@foreach ($users as $user)
<tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->phone }}</td>
    <td>
        <form action="{{ route('user.destroy',$user->id) }}" method="POST">

            <a class="btn btn-info" href="{{ route('user.show',$user->id) }}">voir</a>

            <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">modif</a>

            @csrf

            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
</tr>
@endforeach
</table>
    {!! $postes->links() !!}
      
@endsection