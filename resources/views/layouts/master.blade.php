<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-warning shadow mb-4 ">
  <div class="container">
    <a class="navbar-brand" href="{{URL::to('/')}}">Parivera</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : ''}}" href="{{URL::to('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('pegawai') ? 'active' : ''}}" href="{{URL::to('/pegawai')}}">Pegawai</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('contact') ? 'active' : ''}}" href="{{URL::to('/contact')}}">Contact</a>
        </li>
        
      </ul>
      <div class="ms-auto">
      <a href="{{route('logout')}}" class="btn btn-default">Logout</a>
      </div>

      


      

    </div>
  </div>
</nav>
    
    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>

    
    <!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <footer class="bg-warning text-black text-center pb-3 mt-3">
        <p>Created with <i class="bi bi-suit-heart-fill text-danger">
        </i> by <a href="https://www.instagram.com/helendamayantii/" 
        class="text-black fw-bold">Helen Agustin Puspa Damayanti</a></p>
    </footer>
</html>
