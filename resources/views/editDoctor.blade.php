<x-layout>

    <x-slot name="title">Modifica</x-slot>

    @if($errors->any())
        <div class="alert alert-danger mb-0 mx-5">
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
    @endif

    <h2 class="gFont text-center mt-5 mb-3">Modifica dati dottore</h2>
    <form method="POST" action="{{route('submitChanges', compact('doctor'))}}" class="container">
        @csrf
        @method('put')
        <div class="inputDivs row justify-content-center w-75 mx-auto my-2">
            <label for="nameInput" class="text-center">Nome</label>
            <input class="inputs" id="nameInput" type="text" placeholder="Nome" name="first_name" value="{{$doctor->first_name}}">
        </div>
        <div class="inputDivs row justify-content-center w-75 mx-auto my-2">
            <label for="surnameInput" class="text-center">Cognome</label>
            <input class="inputs" id="surnameInput" type="text" placeholder="Cognome" name="last_name" value="{{$doctor->last_name}}">
        </div>
        <div class="inputDivs row justify-content-center w-75 mx-auto my-2">
            <label for="emailInput" class="text-center">Email</label>
            <input disabled class="inputs" id="emailInput" type="email" placeholder="Email" name="email" value="{{$doctor->email}}">
        </div>
        <div class="inputDivs row justify-content-center w-75 mx-auto my-2">
            <label for="genderInput" class="text-center">Genere</label>
            <input class="inputs" id="genderInput" type="text" placeholder="Genere" name="gender" value="{{$doctor->gender}}">
        </div>
        <div class="inputDivs row justify-content-center w-75 mx-auto my-2">
            <label for="specializationInput" class="text-center">Specializzazione</label>
            <input class="inputs" id="specializationInput" type="text" placeholder="Specializzazione" name="specialization" value="{{$doctor->specialization}}">
        </div>
        <div class="inputDivs row justify-content-center w-75 mx-auto my-2">
            <label for="locationInput" class="text-center">Citt??</label>
            <input class="inputs" id="locationInput" type="text" placeholder="Citt??" name="location" value="{{$doctor->location}}">
        </div>
        <div class="row justify-content-center w-25 mx-auto mt-3">
            <button type="submit" class="btn btn-warning mx-auto">Modifica</button>
        </div>
    </form>

</x-layout>