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
               <marquee behavior="" direction="right"> <span>Gestion Electeur</span> </marquee>
            </div>
        </div>
        <div class="card-body">
            <form id="voterForm" action="{{ route('enregistrerElecteur') }}" enctype="multipart/form-data"  method="post">
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
                    <label for="CNI">CNI</label>
                    <input type="text" name="CNI" id="CNI" class="form-control" pattern="[0-9]*" inputmode="numeric" title="Entrez des chiffres uniquement (maximum 12 chiffres)" maxlength="12" required>
                </div>

                <div class="form-group">
                    <label for="Adresse">Adresse</label>
                    <input type="text" name="Adresse" id="Adresse" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="candidat_id">Choisir un candidat :</label>
                    <select name="candidat_id" class="form-control" required>
                        <option value="" selected disabled>Sélectionnez un candidat</option>
                        @foreach ($candidat as $c)
                            <option value="{{ $c->id }}">{{ $c->nom }} {{ $c->prenom }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button type="button" class="btn btn-primary" onclick="validateForm()">VOTER</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        var form = document.getElementById('voterForm');
        if (form.checkValidity()) {
            form.submit();
        } else {
            alert('Veuillez remplir tous les champs obligatoires.');
        }
    }
</script>

</body>
</html>
