<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= wp_title() ?></title>
  <?php wp_head() ?>
</head>

<body>

  <header class="header">
    <div class="container">
      <div class="header__wrapper d-flex flex-wrap justify-content-center py-3 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <span class="fs-4">Церковь Кропоткина</span>
        </a>

        <ul class="nav nav-pills">
          <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Главная</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-dark">Записи служений</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-dark">Контакты</a></li>
        </ul>
      </div>
    </div>
  </header>

  <div class="intro">
    <div class="container h-100">
      <div class="intro__wrapper h-100 w-100 d-flex align-items-center flex-column justify-content-center">
        <h1 class="text-light">Церковь Кропоткина</h1>
        <p class="text-light mb-4">Последователи Иисуса Христа</p>
        <a role="button" class="btn btn-outline-light">Контакты</a>
      </div>
    </div>
  </div>

  <div class="main-about bg-primary">
    <div class="container">
      <div class="main-about__wrapper">
        <div class="main-about__header d-flex justify-content-center">
          <h3 class="main-about__title title">
            О нас
          </h3>
        </div>
        <div class="main-about__body d-flex justify-content-center">
          <p class="main-about__desc text-center">
            Мы - церковь города Кропоткин. Собираемся вместе чтобы изучать Слово, учавствовать в миссиях, служить нашему городу
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="main-slider">
    <div class="container">
      <div class="main-slider__wrapper d-flex flex-column justify-content-start align-items-center">
        <h3 class="maine-slider__title">Жизнь церкви</h3>
        <p class="main-slider__desc text-center">
          Мероприятие: Страна Чудес
        </p>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?= get_template_directory_uri() ?>/assets/img/main-slider/1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="<?= get_template_directory_uri() ?>/assets/img/main-slider/2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="<?= get_template_directory_uri() ?>/assets/img/main-slider/3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <script>
    var myCarousel = document.querySelector('#carouselExampleCaptions')
    var carousel = new bootstrap.Carousel(myCarousel)
  </script>
</body>

</html>