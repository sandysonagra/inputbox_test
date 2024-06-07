<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 1</title>
</head>

<body>
    <form action="{{ route('form.processpage1') }}" method="POST">
        @csrf
        <label for="number">Enter A Number :</label>
        <input type="number" name="number" id="number" >
        @error('number')
            {{ $message }}
        @enderror <br>
        <button type="submit" >SUBMIT</button>
    </form>
</body>

</html>
