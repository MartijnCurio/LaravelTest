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
            <main class="wrapper">
                <h1>Posts</h1>
                <p>En tot zover, mijn Laravel kennis.</p>
                <p>Ik heb behoorlijk veel moeite met het begrijpen van de logica achter Laravel.</p>
                <p>Wellicht kunnen we samen kijken naar een kleine herhaling van Laravel?</p>
            </main>
        </main>
    </body>
</html>
