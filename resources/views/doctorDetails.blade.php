<x-layout>

    @if(session('message'))
        <div class="alert alert-success text-center">{{session('message')}}</div>
    @endif

    <h1 class="gFont text-center mt-5 fw-bold">{{$doctor->first_name}} {{$doctor->last_name}}</h1>

    <div class="container">
        <div class="doctorDetailsImg">
            @if($doctor->gender == 'Female')
                {{-- Immagine se donna --}}
                <img src="/images/doctorF.webp" class="card-img-top" alt="Immagine dottoressa">

            @elseif($doctor->gender == 'Male')
                {{-- Immagine se uomo --}}
                <img src="/images/doctorM.webp" class="card-img-top" alt="Immagine dottore">

            @else
                {{-- Immagine se non binary --}}
                <img src="/images/doctorNB.webp" class="card-img-top" alt="Immagine dottor*">
                
            @endif
        </div>
        <div class="row text-center fw-bold">
            <p>Genere: {{$doctor->gender}}</p>
            <p>Città: {{$doctor->location}}</p>
            <p>Specializzazione: {{$doctor->specialization}}</p>
            <a href="mailto:{{$doctor->email}}" class="btn btn-success w-50 mt-4 detailBtns">
                <i class="fa-solid fa-phone me-1"></i>
                Contatta
            </a>
            @auth
                <a href="{{route('editDoctor', $doctor)}}" class="btn btn-warning w-50 mt-2 detailBtns">
                    <i class="fa-solid fa-pencil me-1"></i>
                    Modifica
                </a>
                <form id="deleteDoctorForm" method="POST" action="{{route('deleteDoctor', $doctor)}}">
                    @csrf
                    @method('delete')
                    <button type="button" class="btn btn-danger w-50 mt-2 detailBtns" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-trash me-2"></i>
                        Elimina
                    </button>
                </form>
            @endauth
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Conferma eliminazione</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Confermi di voler eliminare {{$doctor->first_name}} {{$doctor->last_name}}?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
              <button type="submit" form="deleteDoctorForm" class="btn btn-danger">Elimina</button>
            </div>
          </div>
        </div>
    </div>
  
</x-layout>