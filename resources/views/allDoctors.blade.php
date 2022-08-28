<x-layout>

    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

    <h2 class="gFont text-center my-5">Tutti i dottori</h2>

    @if(count($allDoctors)>0)
        <div class="container-fluid">
            <div class="row mx-4 justify-content-center">
                @foreach($allDoctors as $doctor)
                    <div class="card col-12 m-3" style="width: 18rem;">

                        @if($doctor->gender == 'Female')
                            {{-- Immagine se donna --}}
                            <img src="./images/doctorF.webp" class="card-img-top" alt="Immagine dottoressa">
                        @else
                            {{-- Immagine se uomo o lgbtq+ --}}
                            <img src="./images/doctorM.webp" class="card-img-top" alt="Immagine dottore/dottor*">
                        @endif

                        <div class="card-body">
                        <h5 class="card-title">Nome e cognome: {{$doctor->first_name}} {{$doctor->last_name}}</h5>
                        <p class="card-text">Genere: {{$doctor->gender}}</p>
                        <p class="card-text">Specializzazione: {{$doctor->specialization}}</p>
                        <p class="card-text">Città: {{$doctor->location}}</p>
                        <a href="#" class="btn btn-primary">Dettagli</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{$allDoctors->links()}}
    @else
        <h5 class="gFont text-center my-5">Nessun dottore presente</h5>
    @endif


    <div class="text-center">
        <a type="button" class="btn btn-warning" href="{{route('newDoctor')}}">Inserisci un nuovo dottore su eDoctor</a>
    </div>
</x-layout>