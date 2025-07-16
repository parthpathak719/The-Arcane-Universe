<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
</head>
<body>
    <video id="bg-video" autoplay loop muted>
        <source src="{{ asset('videos/wizard.mp4') }}" type="video/mp4">
    </video>

    <button id="button1" onclick="document.getElementById('bg-video').muted = false; this.style.display='none';">🔊 Unmute</button>

    <div class="content-wrapper">
        <h1>Welcome To "The Wizarding Archives"</h1>
        <a href="{{ route('houses') }}">Go To Houses</a>
    </div>
</body>
</html>