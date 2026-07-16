<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD en Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>Modifier un étudiant</h1>
                <hr>
                @if (session("status"))
                    <div class="alert alert-succes">
                        {{ session("status")}}
                    </div>
                @endif
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                </ul>
                    
                <form action="/update/traitment" method="POST" class="form-group"
                    onsubmit="return confirm('Êtes-vous sûr de vouloir modifier cet étudiant ?');">
                    @csrf

                    <input type="text" name="id" value="{{$etudiants->id}}" style="display:none;">
                    <div class="form-group">
                        <label for="nom" class="form-label">Nom : </label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{$etudiants->nom}}">
                    </div>

                    <div class="form-group">
                        <label for="Prenom" class="form-label">Prénom : </label>
                        <input type="text" class="form-control" id="Prenom" name="prenom" value="{{$etudiants->prenom}}">
                    </div>

                    <div class="form-group">
                        <label for="Classe" class="form-label">Classe : </label>
                        <input type="text" class="form-control" id="Classe" name="classe" value="{{$etudiants->classe}}"> <br>
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier un étudiant</button><br><br>
                    <a href="/student" class="btn btn-danger">Retour à la liste des étudiants</a>
                </form>
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>