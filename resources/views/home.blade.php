<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chaos Awakens</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body>
    <x-side-bar />
    <div class='max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-wrap gap-4 after:basis-1/4 after:grow after:shrink before:basis-1/4 before:grow before:shrink after:order-last before:order-last'>
        @switch($id)
            @case(1)
                <x-home-board />
            @break

            @case(2)
                <x-about-board />
            @break

            @case(3)
                <x-downloads-board />
            @break

            @case(4)
                @foreach ($mobs as $mob)
                    <x-gallery-board life="{{ $mob->life }}" text="{{ $mob->text }}" name="{{ $mob->name }}"
                        image="{{ $mob->image }}" />
                @endforeach
            @break

        @endswitch
    </div>
</body>

</html>
