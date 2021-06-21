<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Dettaglio film 1</title>
</head>
<body>
  <h1>Titolo: {{ $titolo }}</h1>

  <img src="{{ $copertina }}" alt="copertina">

  <h2>Cast: 
    @foreach ($casts as $cast)
      {{ $cast }}
    @endforeach
  </h2>

  <h2>
    Nei panni di:    
      @foreach ($interpretes as $interprete)
      {{ $interprete }}
  @endforeach 
  </h2>

  <h1>Regista: {{ $author }}</h1>

  <h6>Trama: {{ $trama }}</h6>

  <h2>Se vuoi vederlo in streaming <a target="_blank" href="https://altadefinizione.software/the-conjuring-3-per-ordine-del-diavolo-streaming-4k/">clicca qui</a></h2>

  <button><a href="/">Torna alla home</a></button>
</body>
</html>