<x-layout>

    @if($errors->any())
        <div class="alert alert-danger mb-0 mx-5">
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
    @endif

    <h2 class="gFont text-center mt-5 mb-3">Aggiungi dottore</h2>
    <form method="POST" action="{{route('createDoctor')}}" class="container">
        @csrf
        <div class="inputDivs row justify-content-center w-50 mx-auto my-2">
            <label for="nameInput" class="text-center">Nome</label>
            <input class="inputs" id="nameInput" type="text" placeholder="Nome" name="name" value="{{old('name')}}">
        </div>
        <div class="inputDivs row justify-content-center w-50 mx-auto my-2">
            <label for="surnameInput" class="text-center">Cognome</label>
            <input class="inputs" id="surnameInput" type="text" placeholder="Cognome" name="surname" value="{{old('surname')}}">
        </div>
        <div class="inputDivs row justify-content-center w-50 mx-auto my-2">
            <label for="emailInput" class="text-center">Email</label>
            <input class="inputs" id="emailInput" type="email" placeholder="Email" name="email" value="{{old('email')}}">
        </div>
        <div class="inputDivs row justify-content-center w-50 mx-auto my-2">
            <label for="genderInput" class="text-center">Genere</label>
            <input class="inputs" id="genderInput" type="text" placeholder="Genere" name="gender" value="{{old('gender')}}">
        </div>
        <div class="inputDivs row justify-content-center w-50 mx-auto my-2">
            <label for="specializationInput" class="text-center">Specializzazione</label>
            <input class="inputs" id="specializationInput" type="text" placeholder="Specializzazione" name="specialization" value="{{old('specialization')}}">
        </div>
        <div class="inputDivs row justify-content-center w-50 mx-auto my-2">
            <label for="locationInput" class="text-center">Città</label>
            <input class="inputs" id="locationInput" type="text" placeholder="Città" name="location" value="{{old('location')}}">
        </div>
        <div class="row justify-content-center w-25 mx-auto mt-3">
            <button type="submit" class="btn btn-warning mx-auto">Aggiungi</button>
        </div>
    </form>

</x-layout>