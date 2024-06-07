<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 3</title>
    <script>
        function checkAll()
        {
            document.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = true);  
        }
        function clearAll()
        {
            document.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);  
        }
    </script>
</head>

<body>
    <form action="{{ route('form.processpage3') }}" method="POST">
        @csrf
        @foreach ($inputs as $input)
            @if (!is_null($input))
                <div>
                    <input type="checkbox" name="selected[]" value="{{ $input }}" >
                    {{ $input }}
                </div>
            @endif
        @endforeach <br>
        <button type="button" onclick="checkAll()" >Check All</button>
        <button type="button" onclick="clearAll()" >Clear All</button>
        <button type="submit" >SUBMIT</button>
    </form>
</body>

</html>
