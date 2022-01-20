<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Laravel HOME</title>
</head>
<body>
  <div class="container">
    <nav>
      <ul class="nav">
        @foreach ($links as $link)
          <li class="nav-item">
            <a class="nav-link active" href="{{route($link)}}">{{ucfirst($link)}}</a>
          </li>
        @endforeach
      </ul>  
    </nav>
    <h1>Home</h1>
  
    <h3>Visita la pagina <a href="{{route('about')}}">About </a> per saperne di più...</h3>

  </div>

</body>
</html>