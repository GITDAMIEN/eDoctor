<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container d-flex justify-content-between mx-3 my-2">
        <div class="align-self-start">
            <a class="navbar-brand gFont fs-1 text-blue" href="{{route('welcome')}}">eDoctor</a>
        </div>
        <div class="text-end">
            <button id="navBtn" class="navbar-toggler text-blue py-1 px-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-blue"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav pe-2">
                    <li class="nav-item">
                        <a class="nav-link active text-blue" aria-current="page" href="{{route('welcome')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-blue" href="{{route('allDoctors')}}">Find doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-blue" href="{{route('aboutUs')}}">About eDoctor</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link text-blue" href="{{route('login')}}">Accedi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-blue" href="{{route('register')}}">Registrati</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-blue" href="/">Benvenuto, {{Auth::user()->name}}!</a>
                        </li>
                        <li>
                            <a class="nav-link text-blue" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
  </nav>