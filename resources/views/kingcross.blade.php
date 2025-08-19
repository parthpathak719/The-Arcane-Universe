<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>King Cross</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon/favicon8.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/kingcross.css') }}">
</head>
<body>
    <div class="modal7" id="id07">
        <div id="modal-content7">
            <span id="close7" onclick="document.getElementById('id07').style.display='none';">&times;</span>
            <h1>Welcome To King Cross Station!!</h1>
            <p>Board The Hogwarts Train!!</p>
        </div>
    </div>

    <!-- Background video -->
    <video id="bg-video" muted>
        <source src="{{ asset('videos/station.mp4') }}" type="video/mp4">
    </video>

    <div class="board">
        <p>Boarding Here</p>
        <div class="arrow-down"></div>
    </div>

    <video id="train" muted>
        <source src="{{ asset('videos/train.mp4') }}" type="video/mp4">
    </video>

    <script src="{{ asset('js/kingcross.js') }}"></script>
</body>
</html>
