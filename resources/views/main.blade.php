<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Main</title>
</head>
<body>
  <h1> L'attrice {{ $name }} {{ $lastname }} interpreta la parte di {{ $interpretes }}</h1>
  @if ($name === "Vera" && $lastname === "Farmiga" && $interpretes === "Lorraine Warren")
    <h5>I campi inseriti sono corretti</h5>
  @else
    <h5>I campi inseriti sono errati</h5>
  @endif

  <span>>Clicca per scoprire i dettagli dei film</span>
{{--   <ul>
    <li><h2><a href="/film1">The Conjuring - L'Evocazione</a></h2></li>
    <li><h2><a href="/film2">The Conjuring - Il caso Enfield</a></h2></li>
    <li><h2><a href="/film3">The Conjuring - Per ordine del Diavolo</a></h2></li>
  </ul> --}}
  @foreach($films as $film) 
  <li><h2><a href="{{$film['url']}}">{{$film['titolo']}}</a></h2></li>
@endforeach
</body>
</html>