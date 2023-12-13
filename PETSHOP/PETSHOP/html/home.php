<?php
//session_start();
include('../php/verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animal World</title>
  <link rel="stylesheet" href="css/homeLogin.css">
  <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
  <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">    
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0">

  <!--Fazendo o Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top" id="navbar">
    <div class="container-fluid">
      <img src="imagens/HomeLogo.png" alt="" width="80px" height="60px">

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Produtos.html">Produtos</a>

          </li>
          <a class="nav-link" href="../php/logout.php">Logout</a>
          </li>
            
        </div>
      </div>
    </div>
  </nav>

  <!-- Fazendo o Carousel-->
  <div class="container">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imagens/HomeCarousel2.png" class="d-block w-100" alt="Primeiro Slide">
        </div>
        <div class="carousel-item">
          <img src="imagens/HomeCarousel1.webp" class="d-block w-100" alt="Segundo Slide">
        </div>
        <div class="carousel-item">
          <img src="imagens/HomeCarousel3.jpg" class="d-block w-100" alt="Terceiro Slide">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <br>
    <br>

    <!-- Fazendo o Card-->

    <div class="cards-container">
      <div class="card">
        <div class="content">
          <img src="imagens/HomeCard3.jpg" alt="">
          <div class="title">World Plus</div>
          <div class="price">R$50,00</div>
          <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at posuere eros.
            Interdum et malesuada fames ac ante ipsum primis in faucibus.</div>
        </div>
        <div class="card-footer">
        <a href="Pagamento.html"><small class="text-body-secondary"> <button class="Btn">
              Pay
              <svg class="svgIcon" viewBox="0 0 576 512">
                <path
                  d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z">
                </path>
              </svg>
            </button></small></a>
        </div>
      </div>

      <div class="card">
        <div class="content">
          <img src="imagens/HomeCard2.jpg" alt="">
          <div class="title">banho e tosa do seu Pet por</div>
          <div class="price">R$99,99</div>
          <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at posuere eros.
            Interdum et malesuada fames ac ante ipsum primis in faucibus.</div>
        </div>
        <div class="card-footer">
        <a href="Pagamento.html"><small class="text-body-secondary"> <button class="Btn">
              Pay
              <svg class="svgIcon" viewBox="0 0 576 512">
                <path
                  d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z">
                </path>
              </svg>
            </button></small></a>
        </div>
      </div>

      <div class="card">
        <div class="content">
          <img src="imagens/HomeCard4.jpg" alt="">
          <div class="title">Curiosidades</div>
          <div class="price"></div>
          <div class="description">Isso porque é assim que ele troca o calor necessário para se adaptar a temperatura do
            ambiente, principalmente em dias mais quentes</div>
        </div>
      </div>
    </div>
    <footer>
      <ul>
        <div class="description">Bem-vindo ao universo encantador do "Animal World"! No coração do nosso Pet Shop, dedicamo-nos apaixonadamente a fornecer cuidados excepcionais e serviços de alta qualidade para os membros peludos da sua família...
         <br>
          <br>Rua Tereza Conceicao Silva,   Jardim Geuseppe Camole    CEP: 99982-992  (19) 99999-9999   animalworld@contato.com</br>
          <br>
                                                   CPNJ: 990900909090
                                                   <br>
                                                     Animal World™ LTDA
        </div>
      </ul>
      <div class="social-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
      </div>
  </footer>
    
</body>

</html>