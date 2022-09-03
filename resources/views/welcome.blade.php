<x-layout>

    <x-slot name="title">Home</x-slot>

    <header id="mainHeader">
        <div class="pt-5 pb-0 gFontBold fs-3 ps-5">eDoctor</div><span class="ps-5 gFont">Il tuo dottore</span><br><span class="ps-5 gFont">a portata di click</span>
        <h5 class="gFont my-4 pt-2 ps-5"> <a href="{{route('aboutUs')}}">Scopri di più!<i id="discoverArrow" class="fa-solid fa-arrow-right ms-3"></i></a></h5>
    </header>

    <main>
        <section>
        </section>
    </main>
    
    <div class="d-flex justify-content-center">
        <a href="{{route('contactUs')}}" class="btn btn-warning mt-5">Contattaci!</a>
    </div>

</x-layout>