<x-layout>
    <x-slot name="head">
        <title>Cast</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon/favicon6.ico') }}">
    </x-slot>

    <div class="modal5" id="id05">
        <div id="modal-content5">
            <span id="close5">&times;</span>
                <h1>Welcome To Cast!!</h1>
                <p>Meet the magical cast of Harry Potter from the movies!!</p>
        </div>
    </div>

    <video id="bg-video" loop muted>
        <source src="{{ asset('videos/wizard.mp4') }}" type="video/mp4">
    </video>

    <script src="{{ asset('js/cast.js') }}"></script>
</x-layout>