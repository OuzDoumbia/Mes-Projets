<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats du Sondage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        canvas {
            max-width: 100%;
            display: block;
            margin: auto;
        }

        .vote-button {
            text-align: center;
            margin-top: 20px;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="button-group">
        <div class="form-group">
            <a href="home" class="btn btn-success">HOME</a>
        </div>
        <h1>Résultats du Sondage</h1>
        <div class="form-group">
            <form method="GET" action="{{ route('electeur') }}">
                @csrf
                <button class="btn btn-success" onclick="event.preventDefault(); this.closest('form').submit();">VOTER</button>
            </form>
        </div>
    </div>

    <ul>
        @foreach($resultats as $candidat)
            <li>{{ $candidat->nom }} - {{ $candidat->votes }} votes</li>
        @endforeach
    </ul>

    <div style="width: 500px; height: 500px; display: flex; justify-content: center; align-items: center;">
        <canvas id="resultatsChart" width="500" height="500"></canvas>
    </div>

   
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Code pour initialiser le graphique ici
        var resultats = @json($resultats); // Convertir les données PHP en JSON

        // Extraire les noms et votes des candidats
        var nomsCandidats = resultats.map(function (candidat) {
            return candidat.nom;
        });

        var votesCandidats = resultats.map(function (candidat) {
            return candidat.votes;
        });

        // Générer des couleurs aléatoires pour chaque candidat
        var backgroundColors = resultats.map(function () {
            return getRandomColor();
        });

        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        // Créer le graphique
        var ctx = document.getElementById('resultatsChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut', // Changez le type de graphique selon vos préférences
            data: {
                labels: nomsCandidats,
                datasets: [{
                    label: 'Votes par candidat',
                    data: votesCandidats,
                    backgroundColor: backgroundColors,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                cutout: '30%', // Taille du trou au milieu de l'anneau (20% pour créer un trou)
            }
        });
    });
</script>

</body>
</html>
