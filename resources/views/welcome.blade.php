<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon/favicon1.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
</head>
<body>
    <div class="wrapper">
        <!-- Envelope -->
        <div class="envelope-container" id="envelope">
            <img id="envelope-img" src="https://res.cloudinary.com/dd4ldehqo/image/upload/v1753521198/envelope_buqces.jpg" alt="Hogwarts Envelope">
            <div class="flap" id="flap"></div>
        </div>

        <!-- Letter -->
        <div id="letter-container">
            <div id="letter-scroll">
                <p id="letter-text"></p>
            </div>
        </div>
    </div>

    <audio id="themeMusic" src="{{ asset('audio/song.mp4') }}" preload="auto"></audio>
    <audio id="writingSound" src="{{ asset('audio/write.mp4') }}" preload="auto"></audio>

    <script src="{{ asset('js/welcome.js') }}"></script>
</body>
</html>
