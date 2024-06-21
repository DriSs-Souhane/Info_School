<!DOCTYPE html>
<html>
<head>
    <title>School Inscription</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: white;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar-brand, .nav-link, .btn-outline-light {
            color: #fff !important;
        }
        .nav-link:hover {
            color: #ffd700 !important;
        }
        .hero-section {
            margin-bottom: 0; /* Changed from 50px to 0 to remove space */
            height: 642px;
            position: relative;
        }
        .carousel-item {
            height: 642px;
            background-size: cover;
            background-position: center;
        }
        .carousel-caption {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
            color: white;
        }
        .carousel-caption h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .carousel-caption p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }
        .description-section {
            padding: 50px 0;
            background-image: url('https://images.pexels.com/photos/318274/pexels-photo-318274.jpeg');
            background-size: cover;
            background-position: center;
            color: white;
            background-color: black;
        }
        .description-section h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .description-section .activity, .description-section .review {
            margin-bottom: 30px;
        }
        .description-section .review {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
        }
        .description-section img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .footer {
            background-color: black;
            color: white;
            padding: 50px 0;
        }
        .footer .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        .footer .footer-item {
            flex: 1;
            padding: 0 20px;
        }
        .footer h3 {
            margin-bottom: 20px;
        }
        .footer p {
            line-height: 1.8;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 30px;
            width: 700px;
            margin-left: auto;
            margin-right: auto;
            margin-top : 30px
        }
        .form-container:hover {
            transform: scale(1.02);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        h2 {
            margin-bottom: 30px;
            text-align: center;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            border-color: #007bff;
        }
        .alert {
            margin-top: 20px;
        }
        .navbar {
            background-color: #007bff;
            padding: 10px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #fff !important;
            transition: all 0.3s ease;
        }
        .navbar-brand:hover, .navbar-nav .nav-link:hover {
            color: #f8f9fa !important;
            transform: scale(1.1);
        }
        .navbar-brand {
            font-size: 24px;
        }
        .navbar-nav {
            margin-left: auto;
        }
        .nav-link {
            margin: 0 15px;
            border-radius: 10px;
            padding: 8px 15px;
        }
        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        .animate-hover {
            transition: all 0.3s ease;
        }
        .animate-hover:hover {
            transform: translateY(-3px);
        }
        span {
            color: #007bff;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Info_School</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2 animate-hover" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide hero-section" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url('https://images.pexels.com/photos/1164572/pexels-photo-1164572.jpeg');">
      <div class="carousel-caption">
        <h1>Welcome to <span>Info_School</span></h1>
        <p>Your future starts here</p>
        <a href="#inscription-form" class="btn btn-primary">Get Started</a>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('https://images.pexels.com/photos/34600/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
      <div class="carousel-caption">
        <h1>Join <span>Our Community</span></h1>
        <p>Experience a vibrant learning environment</p>
        <a href="#inscription-form" class="btn btn-primary">Get Started</a>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('https://images.pexels.com/photos/3747481/pexels-photo-3747481.jpeg');">
      <div class="carousel-caption">
        <h1>Achieve <span>Your Goals</span></h1>
        <p>With our diverse programs</p>
        <a href="#inscription-form" class="btn btn-primary">Get Started</a>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('https://images.pexels.com/photos/256417/pexels-photo-256417.jpeg');">
      <div class="carousel-caption">
        <h1>Excel in <span>Your Studies</span></h1>
        <p>With our expert faculty</p>
        <a href="#inscription-form" class="btn btn-primary">Get Started</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="description-section">
  <div class="container">
    <h2>About <span>Info_School</span></h2>
    <p class="lead text-center">Info_School is committed to providing high-quality education and fostering a vibrant community of learners. Our programs are designed to help students achieve their academic and personal goals.</p>

    <div class="row activity">
      <div class="col-md-6">
        <img src="https://images.pexels.com/photos/1181262/pexels-photo-1181262.jpeg" alt="School Activity">
      </div>
      <div class="col-md-6">
        <h3>Our Activities</h3>
        <p>At Info_School, we offer a wide range of activities that cater to the diverse interests of our students. From sports to arts and technology, there is something for everyone.</p>
        <ul>
          <li>Sports teams and clubs</li>
          <li>Art and music programs</li>
          <li>Technology and coding clubs</li>
          <li>Community service projects</li>
        </ul>
      </div>
    </div>

   
    
  </div>
</div>

<div class="container">
    <div class="form-container" id="inscription-form">
        <h2 class="text-primary">Formulaire de pre-inscription</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('inscription.submit') }}" method="POST" class="animate-hover">
            @csrf
            <div class="form-group mb-3">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="phone_number">Phone Number:</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="filiere">Filiere:</label>
                <select class="form-control" id="filiere" name="filiere" required>
                    <option value="">Select Filiere</option>
                    <option value="Developpement Informatique">Developpement Informatique</option>
                    <option value="Infographie">Infographie</option>
                    <option value="Gestion des Entreprises">Gestion des Entreprises</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="footer-item">
            <h3><span>Our Mission</span></h3>
            <p>To provide the best education possible and prepare students for a bright future.</p>
        </div>
        <div class="footer-item">
            <h3><span>Programs</span></h3>
            <p>We offer a wide range of programs to cater to the diverse needs of our students.</p>
        </div>
        <div class="footer-item">
            <h3><span>Contact Us</span></h3>
            <p>Have any questions? Reach out to us anytime at contact@info_school.com.</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
</body>
</html>
