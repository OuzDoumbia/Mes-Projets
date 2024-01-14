<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Candidat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('succes') }}
    </div>
    @endif
<div class="card">
    <div class="card-header bg-info">Editer Candidat</div>
    <div class="card-body">
        <form action="{{ route('update-candidat', $candidat->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" name="nom" id="" class="form-control" value="{{$candidat->nom}}">
            </div>
            <div class="form-group">
                <label for="">Prenom</label>
                <input type="text" name="prenom" id="" class="form-control" value="{{$candidat->prenom}}">
            </div>
            <div class="form-group">
                <label for="">Date Naissance</label>
                <input type="date" name="dateNaissance" id="" class="form-control" value="{{$candidat->dateNaissance}}">
            </div>
            <div class="form-group">
                <label for="">Partie</label>
                <input type="text" name="partie" id="" class="form-control" value="{{$candidat->partie}}">
            </div>
            <div class="form-group">
                <label for="">Programme</label>
                <input type="text" name="programme" id="" class="form-control" value="{{$candidat->programme}}">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Modifier</button>
            </div>
        </form>
    </div>
</div>
</div>


</body>
</html>
