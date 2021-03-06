<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> HOME </title>
  @include('layouts.css')
</head>

<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product">PRODUCT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('/')}}/order">ORDER</a>
        </li>    
        <li class="nav-item">
          <a class="nav-link" href="history">HISTORY</a>
        </li>
      </ul>
   </div>
</nav>
</header>  

<div class="container position-relative my-5">
    <div class="row position-relative">
    @foreach ($product as $procat )         
      <div class="col-md-4">
          <a href="" class="text-dark">
          <div class="card border-0 my-2 card-blog position-relative">
            <img class="card-img-top" src="sepatu.jpg"<?= $procat['img_path'] ?> alt="">
          </div>

          <div class="card-body">
              <h5 class="card-title poppins mb-1 font-weight-bold"><?= $procat['name'] ?></h5>
            </div>
            </a>
        </div> 
        @endforeach
    </div>
  </div>
  

</body>
@include('layouts.js') 
</html>
