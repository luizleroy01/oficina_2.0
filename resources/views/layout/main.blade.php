<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name = "csrf_token" content = "{{csrf_token()}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <title>Orçamentos</title>
</head>
<body>
    <main class = "center">
    @hasSection ('body')
        @yield('body')
    @else
        <h1>Não há conteúdo nesta página</h1>
    @endif
    </main>

</body>
</html>
