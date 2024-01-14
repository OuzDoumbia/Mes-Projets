<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programme des Candidats</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    $(document).ready(function() {
        $('.btn-like').on('click', function(event) {
            event.preventDefault();

            var form = $(this).closest('form');

            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(),
                dataType: 'json',
                success: function(response) {
                    // Update the like and dislike counts on the page
                    form.closest('.candidat-card').find('.likes-count').text(response.likes);
                    form.closest('.candidat-card').find('.dislikes-count').text(response.dislikes);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    });
</script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 20px auto;
        }

        .candidat-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-like {
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div>
    
                <div class="form-group">
                    <a href="home">
                    <button class="btn btn-success">HOME</button>
                    </a>
                </div>
         
    </div>
    <h1>Programme des Candidats</h1>                    

    @foreach($candidat as $c)
        <div class="candidat-card">
            <h2>{{ $c->nom }} {{ $c->prenom }}</h2>
            <p>{{ $c->programme }}</p>

            <form action="{{ route('like-programme', ['candidat' => $c->id, 'type' => 'like']) }}" method="post" class="d-inline">
                @csrf
                <button type="submit" name="action" value="like" class="btn btn-success btn-like"><i class="fas fa-thumbs-up"></i></button>
            </form>

            <span class="likes-count">{{ $c->likes()->where('type', 'like')->count() }}</span> Likes

            <form action="{{ route('like-programme', ['candidat' => $c->id, 'type' => 'dislike']) }}" method="post" class="d-inline">
                @csrf
                <button type="submit" name="action" value="dislike" class="btn btn-danger btn-like"><i class="fas fa-thumbs-down"></i></button>
            </form>

            <span class="dislikes-count">{{ $c->likes()->where('type', 'dislike')->count() }}</span> Dislikes
        </div>
    @endforeach
</div>

</body>
</html>
