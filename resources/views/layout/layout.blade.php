<!DOCTYPE html>
<html>
<head>
    <title>Elecafé</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar-expand-lg navbar-dark bg-primary">
    <div class="navbar-nav">
        <!-- toutes les machines disponibles + creation d'un utilisateur + reservation potentiel  -->
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        <!-- tous les postes de la bdd + crud + nouveau poste-->
      <a class="nav-item nav-link" href="{{ route('postes.index') }}">Postes</a>
        <!-- tous les utilisateur de la bdd + crud + nouveau utilisateur  -->
      <a class="nav-item nav-link" href="{{ route('users.index') }}">Utilisateurs</a>
        <!-- toutes les reservations en cours ou a venir -->
      <a class="nav-item nav-link" href="{{ route('reservations.index') }}">Reservations</a>
  </div>
</nav>
<div class="container">
    @yield('content')
</div>
   
</body>
</html>