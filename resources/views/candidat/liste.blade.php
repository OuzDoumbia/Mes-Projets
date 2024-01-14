<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des candidats</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 15px;
            font-weight: bold;
        }

        .card-body {
            padding: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
        }

        .btn-add {
            background-color: #28a745;
            color: #fff;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #212529;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">Liste des candidats</div>
        <div class="btn-group">
        <form method="GET" action="{{ route('ajouter') }}">
                @csrf
                <div class="form-group">
                    <button class="btn btn-add">Ajouter Candidat</button>
                </div>
            </form>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="form-group">
                    <button class="btn btn-success" onclick="event.preventDefault();
                        this.closest('form').submit();">Log Out</button>
                </div>
            </form> 
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de Naissance</th>
                    <th>Partie</th>
                    <th>Programme</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($candidat as $c)
                    <tr>
                        <td>{{$c->id}}</td>
                        <td>{{$c->nom}}</td>
                        <td>{{$c->prenom}}</td>
                        <td>{{$c->dateNaissance}}</td>
                        <td>{{$c->partie}}</td>
                        <td>{{$c->programme}}</td>
                        <td>
                            <a href="{{ route('edit-candidat',$c->id) }}" class="btn btn-warning">Modifier</a>
                            <a onclick="return confirm('Do you wish to delete it');" href="{{ route('delete-candidat',$c->id) }}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
