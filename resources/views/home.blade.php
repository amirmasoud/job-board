<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job Board</title>
    </head>
    <body class="antialiased">
        <h1>Job Board</h1>
        @foreach($positions as $position)
            <div>
                <img src="{{ $position->company_logo }}">
                <h2>{{ $position->title }}</h2>
                <p>{{ $position->type }}</p>
                <p>{{ $position->company }} @ {{ $position->location }}</p>
                <ul>
                    @foreach($position->tags ?? [] as $tag)
                    <li>{{ $tag }}</li>
                    @endforeach
                </ul>
                <p>{{ $position->created_at->diffForHumans() }}</p>
            </div>
            <hr />
        @endforeach
    </body>
</html>
