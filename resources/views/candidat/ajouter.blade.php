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
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header bg-info">
            <div class="d-flex justify-content-between align-items-center">
                <span>Ajouter Candidat</span>
                <form method="GET" action="{{ route('liste.candidat') }}">
                    @csrf
                    <div class="form-group mb-0">
                        <button class="btn btn-add" style=" background-color: #007bff;
            color: #fff;">Voir</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body">
            <form id="candidatForm" action="{{ route('store.candidat') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="dateNaissance">Date Naissance</label>
                    <input type="date" name="dateNaissance" id="dateNaissance" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="partie">Partie</label>
                    <input type="text" name="partie" id="partie" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="programme">Programme</label>
                    <input type="text" name="programme" id="programme" class="form-control" required>
                </div>

                <div class="form-group">
                    <button type="button" class="btn btn-success" onclick="validateForm()">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        var form = document.getElementById('candidatForm');
        if (form.checkValidity()) {
            form.submit();
        } else {
            alert('Veuillez remplir tous les champs obligatoires.');
        }
    }
</script>

</body>
</html>
