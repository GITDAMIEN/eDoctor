<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eDoctor | {{$title ?? ''}}</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

    {{-- My Css and Js --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-nav></x-nav>

    <div class="min-vh-100">
        {{$slot}}
    </div>

    <x-footer></x-footer>
</body>
</html>