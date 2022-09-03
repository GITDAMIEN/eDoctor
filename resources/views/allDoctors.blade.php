<x-layout>

    <x-slot name="title">Tutti i dottori</x-slot>

    @if(session('message'))
        <div class="alert alert-success text-center">{{session('message')}}</div>
    @endif

    <h2 class="gFont text-center my-5">Tutti i dottori</h2>

    
    @if(count($allDoctors)>0)
    <div class="container-fluid">
        <div class="row mx-4 justify-content-center">
            <div class="col-12 d-flex justify-content-center mb-3">
                <input id="searchBox" type="text" placeholder="Cerca tra i dottori" class="text-center">
                <button class="ms-2 submit btn btn-warning">Cerca</button>
            </div>
                
            @foreach($allDoctors as $doctor)
                <div class="card col-12 m-3 doctorCard">

                    <div>

                        @if($doctor->gender == 'Female')
                            {{-- Immagine se donna --}}
                            <img src="./images/doctorF.webp" class="card-img-top" alt="Immagine dottoressa">

                        @elseif($doctor->gender == 'Male')
                            {{-- Immagine se uomo --}}
                            <img src="./images/doctorM.webp" class="card-img-top" alt="Immagine dottore">

                        @else
                            {{-- Immagine se non binary --}}
                            <img src="./images/doctorNB.webp" class="card-img-top" alt="Immagine dottor*">
                            
                        @endif
                    </div>
                    
                    <div class="card-body">
                        <h5 class="card-title">Nome e cognome: <br>
                            {{$doctor->first_name}} {{$doctor->last_name}}</h5>
                        <p class="card-text">Genere: {{$doctor->gender}}</p>
                        <p class="card-text">Specializzazione: {{$doctor->specialization}}</p>
                        <p class="card-text">Città: {{$doctor->location}}</p>
                    </div>
                    <a href="{{route('doctorDetails', $doctor)}}" class="btn btn-warning detailBtn">Dettagli</a>
                </div>
            @endforeach
        </div>
    </div>
    {{$allDoctors->links()}}
    @else
        <h5 class="gFont text-center my-5">Nessun dottore presente</h5>
    @endif


    <div class="text-center">
        <a type="button" class="btn btn-warning mt-5 fs-5 mx-5 px-sm-4" href="{{route('newDoctor')}}">Inserisci un nuovo dottore su eDoctor</a>
    </div>
</x-layout>