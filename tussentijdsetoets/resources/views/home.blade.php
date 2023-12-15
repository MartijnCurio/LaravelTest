@yield('content')
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Metamorphous&family=Monoton&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        @include('includes.header') <!-- Voegt header toe -->
    
        <main class="wrapper">
            <h1>Welkom op het Forum!</h1>
            <p>Deze forumwebsite straalt eenvoudige schoonheid uit met een gebruiksvriendelijk ontwerp. De pagina's zijn overzichtelijk, met een rustig kleurenschema dat een aangename sfeer creëert. De discussiepagina's zijn gemakkelijk te lezen, en handige functies zoals een zoekbalk en notificaties maken de site toegankelijk. De vriendelijke gemeenschap moedigt positieve interacties aan, waardoor het niet alleen een mooie, maar ook een gezellige plek is om ideeën te delen.</p>
        </main>
    </body>
</html>
