<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} - SISDEC</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image: url('{{ asset('body-background/fundo.jpg') }}'); background-size: cover; background-repeat: no-repeat">
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card w-auto" style="opacity: 0.85; max-width: 100%;">
            <div class="card-body">
                {{$slot}}
            </div>
        </div>
    </div>
</body>
</html>
