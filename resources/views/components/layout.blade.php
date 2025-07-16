<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wizarding Archives</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/houses.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/wizards.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/recruit.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/quiz.css') }}">
</head>
<body>
    <nav style="font-family:Georgia,serif;">
        <a href="{{ route('welcome') }}">Welcome</a>
        <a href="{{ route('houses') }}">Houses</a>
        <a href="{{ route('recruit') }}">Recruit</a>
        <a href="{{ route('quiz') }}">Quiz</a>
    </nav>
    <main>
        {{$slot}}
    </main>
</body>
</html>