<x-layout>
    <br><br>
    @if (session('success'))
        <script>
            window.onload=function(){
                document.getElementById('id02').style.display='block';
            }
        </script>
        <div class="modal2" id="id02">
            <div id="modal-content2">
                <span id="close2" onclick="document.getElementById('id02').style.display='none'">&times;</span>
                {{ session('success') }}
            </div>
        </div>
    @endif
    @php
        $house = $wizards->first()->house;
    @endphp
    
   <div id="house-details">
      <h1 id="house-name">{{ $house->name }}</h1>
      <div id="founder-box">
        <span class="label">Founder:</span>
        <span class="value"><b>{{ $house->founder }}</b></span>
      </div>
      <p class="house-description">{{ $house->description }}</p>
    </div>


    {{-- Keep background style inline as per your request --}}
    <style>
        body {
            background: url({{ $house->crest }}) no-repeat center fixed;
            background-size: cover;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }
    </style>
    
    <div id="wizard-container">
        @foreach ($wizards as $wizard)
            <div class="wizard-card">
                <img src="{{ $wizard->image }}" alt="{{ $wizard->name }}" class="wizard-image">
                <p class="wizard-name">{{ $wizard->name }}</p>
                <a href="{{ route('details',$wizard->id) }}" class="view-details">View Details</a>
                <a href="{{ route('edit',$wizard->id) }}" class="edit-details">Edit</a>
                <form name="my" id="my" method="post" action="{{ route('destroy',['id1'=>$wizard->id,'id2'=>$house->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete Sorcerer?')">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
</x-layout>
