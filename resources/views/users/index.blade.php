@extends('layout.layout')
@section('content')


@if ($users->count() > 0)
@foreach ($users as $u)
<div class="modal fade" id="edit_users_{{$u->id}}" tabindex="-1" aria-labelledby="edit_users_{{$u->id}}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit_users_{{$u->id}}Label">Modifier un utilisateur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="{{ route('users.update', $u->id) }}">
                @csrf
                @method('patch')
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <strong>Nom</strong>
                        <input type="text" name="last_name" class="form-control" placeholder="Nom" value="{{$u->last_name }}">
                    </div>

                    <div class="mb-3">
                        <strong>Prénom</strong>
                        <input type="text" name="first_name" class="form-control" placeholder="Prénom" value="{{$u->first_name }}">
                    </div>
                    <div class="mb-3">
                        <strong>Adresse mail</strong>
                        <input type="text" name="email" class="form-control" placeholder="Adresse mail" value="{{$u->email }}">
                    </div>

                
                    <div class="mb-3">
                        <strong>Date de naissance</strong>
                        <input type="date" name="birthday" class="form-control" placeholder="Date de naissance" value="{{$u->birthday}}">
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-success" name="update">Modifier</button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
</div>
<!-- *******************************************************************************************************************************-->
<!-- *******************************************************************************************************************************-->
<div class="modal fade" id="delete_users_{{$u->id}}" tabindex="-1" aria-labelledby="delete_users_{{$u->id}}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete_users_{{$u->id}}Label">Suppression d'un utilisateur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="{{ route('users.destroy', $u->id) }}">
                @method('DELETE')
                @csrf

                <div class="modal-body">
                    <p>Confirmez vous la suppression de l'utilisateur : {{$u->last_name }}</p>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-success" name="delete">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endif
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Gestion des clients</h2>
            </div>
            <div class="pull-right">
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
    <th>🍄</th>
    <th>Nom</th>
    <th>Email</th>
    <th>Telephone</th>
    <th width="280px">Action</th>
</tr>
<tr>@foreach ($users as $user)

    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->phone }}</td>
    <td>
        <form action="{{ route('users.destroy',$user->id) }}" method="POST">
            <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">modif</a>

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
</tr>
@endforeach
</table>
{!! $users->links() !!}
@endsection