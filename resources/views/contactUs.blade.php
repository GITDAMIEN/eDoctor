<x-layout>

    <x-slot name="title">Contattaci</x-slot>

    @if(session('message'))
        <div class="alert alert-success text-center">{{session('message')}}</div>
    @endif
    
    <h2 class="gFont text-center my-5">Contattaci</h2>

    <form action="{{route('contactForm')}}" method="POST" class="d-flex justify-content-center flex-wrap">
        @csrf
        <input class="mb-2 w-75" type="text" name="name" placeholder="Il tuo nome">
        <input class="mb-2 w-75" type="email" name="email" placeholder="La tua email">
        <textarea class="mb-2 w-75" name="message" id="" cols="30" rows="10" placeholder="Messaggio"></textarea>
        <button type="submit" class="btn btn-warning">Invia messaggio</button>
    </form>
</x-layout>