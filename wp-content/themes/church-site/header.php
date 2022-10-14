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

  <header class="header border-bottom">
    <div class="header__inner">
      <div class="header__logo-wrapper d-none d-md-flex align-items-center">
        <svg class="header__logo me-2">
          <use xlink:href="#logo"></use>
        </svg>
        <span class="header__logo-title">Церковь Кропоткина</span>
      </div>
      <div class="container-xxl">
        <div class="header__wrapper d-flex flex-wrap justify-content-center py-1">
          <!-- <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <span class="fs-5">Церковь Кропоткина</span>
        </a> -->

          <ul class="nav">
            <li class="nav-item fs-6"><a href="#" class="nav-link active" aria-current="page">Главная</a></li>
            <li class="nav-item fs-6"><a href="#" class="nav-link">Записи служений</a></li>
            <li class="nav-item fs-6"><a href="#" class="nav-link">Контакты</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <div style="display: none;"><?php require_once(get_template_directory() . '\assets\svg\svg-sprite.php') ?></div>
