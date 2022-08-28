<x-layout>

    @if($errors->any())
        <div class="alert alert-danger mb-0 mx-5">
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
    @endif

    <h2 class="gFont text-center mt-5 mb-3">Entra in eDoctor</h2>
    <form method="POST" action="{{route('login')}}" class="container">
        @csrf
        <div class="inputDivs row justify-content-center w-50 mx-auto my-2">
            <label for="emailInput" class="text-center">Email</label>
            <input class="inputs" id="emailInput" type="email" placeholder="Email" name="email">
        </div>
        <div class="inputDivs row justify-content-center w-50 mx-auto my-2">
            <label for="passwordInput" class="text-center">Password</label>
            <input class="inputs" id="passwordInput" type="password" placeholder="Password" name="password">
        </div>
        <div class="row justify-content-center w-25 mx-auto mt-3">
            <button type="submit" class="btn btn-warning mx-auto">Login</button>
        </div>
    </form>

</x-layout>