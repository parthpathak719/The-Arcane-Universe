<x-layout>
    <script>
        window.onload = function () {
            document.getElementById('id01').style.display = "block";
        }
    </script>
    <div class="modal" id="id01">
        <div id="modal-content">
            <span id="close" onclick="document.getElementById('id01').style.display='none'">&times;</span>
            <h1>Welcome To Houses!!</h1>
            <p>Choose Your House</p>
        </div>
    </div>

    <div id="house-grid">
        @foreach ($houses as $house)
            <a href="{{ route('wizards',$house->id) }}"><img src="{{ $house->crest }}" alt="{{ $house->name }}"></a>
        @endforeach
    </div>
</x-layout>
