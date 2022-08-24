<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container d-flex justify-content-between mx-3 my-2">
        <div class="align-self-start">
            <a class="navbar-brand gFont fs-1 text-blue" href="{{route('welcome')}}">eDoctor</a>
        </div>
        <div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('allDoctors')}}">Find doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About eDoctor</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  </nav>