<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>About</title>
</head>
<body>
  <div class="container d-flex align-items-center justify-content-center my-5">
    <div class="card" style="width: 18rem;">
      <img src="https://scontent.fbri2-1.fna.fbcdn.net/v/t39.30808-6/262639055_6816660655018554_3057721126226909110_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=QfEp-ipaJh8AX_YFVIQ&_nc_ht=scontent.fbri2-1.fna&oh=00_AT_zePHkirlcqWWGX70lAS6r3CUF8TCcIQkA3wDtiJsWKw&oe=61EDA667" class="card-img-top" alt="propic">
      <div class="card-body">
        <h5 class="card-title">{{$fullname}}</h5>
        <p class="card-text">{{$description}}</p>
        <a href="{{route('home')}}" class="btn btn-primary">Torna alla home</a>
      </div>
    </div>
  </div>
</body>
</html>