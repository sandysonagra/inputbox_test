<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 2</title>
</head>

<body>
    <form action="{{ route('form.processpage2') }}" method="POST">
        @csrf
        @for ($i = 0; $i < $number; $i++)
            <label for="input{{ $i }}">Input{{ $i + 1 }} :</label>
            <input type="text" name="inputs[]" id="input{{ $i }}" ><br>
        @endfor <br>
        <button type="submit" >SUBMIT</button>
    </form>
</body>

</html>
