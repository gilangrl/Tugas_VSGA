<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Design</title>
<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container-fluid py-4">
    <div class="row">
      <!-- Sidebar -->
      <nav class="col-md-3 col-lg-2 d-md-block sidebar">
        <div class="text-center mt-4">
          <img src="img/logo.png" alt="Logo Perusahaan" class="img-fluid" width="120">
        </div>
        <ul class="nav flex-column mt-5">
          <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('artikel')}}">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('event')}}">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('gallery')}}">Galery Foto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('indexKlien')}}">Klien Kami</a>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Login
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Sign In</a></li>
              <li><a class="dropdown-item" href="#">Sign Up</a></li>
            </ul>
          </li>
        </ul>

      </nav>
      
      <!-- Main Content -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="container-fluid mt-4">
          <h1 class="text-center">Elite Motor Enthusiasts</h1>
          <nav class="navbar navbar-expand-md navbar-dark justify-content-center">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link  text-dark ms-5" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-dark ms-5" href="#">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-dark ms-5" href="/visi">Visi dan Misi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-dark ms-5" href="/produk">Produk Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-dark ms-5" href="/kontak">Kontak Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-dark ms-5" href="/about">About Us</a>
              </li>
            </ul>
          </nav>
          <div class="content">
            @yield('home')
            @yield('visi_misi')
            @yield('produk')
            @yield('kontak_kami')
            @yield('aboutUs')


            @yield('artikel')
            @yield('tambahArtikel')
            @yield('editArtikel')

            @yield('event')
            @yield('tambahEvent')
            @yield('editEvent')

            @yield('gallery')
            @yield('tambahGallery')
            @yield('editGallery')

            @yield('klien')
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- Include Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
