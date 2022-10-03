<!doctype html>
<html lang="ru_RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
<h1>{{ env('APP_NAME') }}</h1>
<ul>
    @forelse($query as $key => $q)
        <li>{{ $key }} = {{ $q }}</li>
    @empty
        no data in query
    @endforelse
</ul>
</body>
</html>

