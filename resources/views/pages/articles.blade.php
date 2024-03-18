<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
  </head>
  <body class="bg-dark">    
  <x- NavBar />
    
    <h1 class=" text-danger text-center p-4">Articles</h1>

    @if($list!=[])
      <h6 class=" text-danger text-start p-5" > ci sono {{ count($list) }} articoli</h6>
      <ul>
          @foreach($list as $index => $item)
          <li><a href="{{ route('article', $index ) }}" class="text-danger text-decoration-none fs-3">{{ $item['title'] }}</a></li>
          @endforeach
      </ul>
    @else
    <h3 class=" text-danger text-center p-4" >Non ci sono articoli da visualizzare</h3>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>