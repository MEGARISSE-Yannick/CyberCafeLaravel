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
        <!-- tableau affichage de tous les postes de la bdd / affichage du type de poste  -->
        <tr>
            <th>🦋</th>
            <th>Nom</th>
            <th>Configuration</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($postes as $poste)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $poste->name }}</td>
            <td>
            1️⃣             {{ $poste->carte_graphique }}
            <br>

            2️⃣                {{ $poste->processeur }}
            <br>

            3️⃣                {{ $poste->carte_mere }}
            <br>

            4️⃣                {{ $poste->ram }}
            <br>

            5️⃣                {{ $poste->memoire }}
            <br>

            6️⃣                   

                                @if ($poste -> type == 1)
                                    Gaming
                                    @else 
                                    Bureau
                                @endif
                                    
                                </td>

            <td>
                <form action="{{ route('postes.destroy',$poste->id) }}" method="POST">
       
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