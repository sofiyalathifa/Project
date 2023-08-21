@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection











{{-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendataan Karyawan</title>

    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Bagian Header -->
    <header>
        <nav>
            <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#home">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('login') }}"  class="btn btn-primary">Login</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
            </li>
          </ul>
        </nav>
    </header>

    <!-- Bagian Konten Utama -->
    <section id="home">
        <div class="container-fluid background">
            <div class="container text-center">
                <h1 class="container text-center">Selamat datang di PT. Maju Jaya</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nulla veritatis mollitia aperiam repellendus a totam est beatae. Ab hic est voluptatem dolorem beatae, suscipit error illum eligendi eos nostrum! </p>
            </div>
        </div>
    </section>

    <!-- About -->
  <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
      <div class="about-img">
        <img src="img/about2.jpg" alt="tentang Kami">
      </div>
      <div class="content">
        <h3>PT. Maju Jaya</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nihil mollitia nobis numquam doloremque tempore ex consequatur doloribus nesciunt? Perspiciatis vel nobis tempore, repudiandae distinctio commodi quas mollitia dolorem nisi!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nihil mollitia nobis numquam doloremque tempore ex consequatur doloribus nesciunt? Perspiciatis vel nobis tempore, repudiandae distinctio commodi quas mollitia dolorem nisi!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate necessitatibus est accusantium officia dolore quibusdam dolores error nihil obcaecati blanditiis odio sunt veritatis aliquam dolorem, cum possimus. Aperiam mollitia, quo, harum labore ipsum deleniti repellendus repudiandae libero qui excepturi ducimus!</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem excepturi est dolor pariatur voluptatibus recusandae iste eius, atque modi consequatur, praesentium quaerat, iure doloremque accusamus exercitationem repudiandae! Perspiciatis modi eligendi esse eaque! Commodi maxime explicabo, quis quos deleniti, maiores, similique laborum exercitationem provident consequatur dignissimos fuga quia molestiae possimus quod?</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem excepturi est dolor pariatur voluptatibus recusandae iste eius, atque modi consequatur, praesentium quaerat, iure doloremque accusamus exercitationem repudiandae! Perspiciatis modi eligendi esse eaque! Commodi maxime explicabo, quis quos deleniti, maiores, similique laborum exercitationem provident consequatur dignissimos fuga quia molestiae possimus quod?</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem excepturi est dolor pariatur voluptatibus recusandae iste eius, atque modi consequatur, praesentium quaerat, iure doloremque accusamus exercitationem repudiandae! Perspiciatis modi eligendi esse eaque! Commodi maxime explicabo, quis quos deleniti, maiores, similique laborum exercitationem provident consequatur dignissimos fuga quia molestiae possimus quod?</p>
      </div>
    </div>
  </section>
  <!-- end of About -->


    <!-- Bagian Footer -->
    <footer>
        <p>&copy; 2023 HRD PT.Maju Jaya. Hak cipta dilindungi.</p>
        <!-- Anda dapat menambahkan informasi tambahan di footer, seperti tautan ke kebijakan privasi, syarat dan ketentuan, dll. -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html> --}}
