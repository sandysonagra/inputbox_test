<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 4</title>
</head>
<body>
    <h3>Inserted Data :</h3> <br>
    @foreach ($recentInputs as $input)
        <p>{{ $input->value }}</p>
    @endforeach
</body>
</html>