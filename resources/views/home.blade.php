<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <li>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </li>

    <h1>INI ADALAH TAMPILAN HOME SETELAH LOGIN</h1>

    <script src="{{ mix('js/app.js') }}"></script>

</body>
</html>