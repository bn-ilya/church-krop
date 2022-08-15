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
      <div class="header__wrapper d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <span class="fs-4">Церковь Кропоткина</span>
        </a>

        <ul class="nav nav-pills">
          <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Главная</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Записи служений</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Контакты</a></li>
        </ul>
      </div>
    </div>
  </header>

</body>
</html>