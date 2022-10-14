<?php get_header(); ?>
<div class="intro">
  <div class="container-xxl h-100">
    <div class="intro__wrapper h-100 w-100 d-flex align-items-center flex-column justify-content-center">
      <div class="intro__body d-flex flex-column align-items-center">
        <div class="intro__title-wrapper d-flex flex-column flex-sm-row gap-3 align-items-center mb-2">
          <svg class="intro__logo">
            <use xlink:href="#logo"></use>
          </svg>
          <h1 class="text-light m-0 intro__title">Церковь Кропоткина</h1>
        </div>
        <p class="text-light intro__subtitle">Последователи Иисуса Христа</p>
      </div>
    </div>
  </div>
</div>

<div class="main-about bg-primary">
  <div class="container-xxl">
    <div class="main-about__wrapper">
      <div class="main-about__header d-flex justify-content-center">
        <h3 class="main-about__title title text-light">
          О нас
        </h3>
      </div>
      <div class="main-about__body d-flex justify-content-center">
        <p class="main-about__desc text-center text-light">
          Мы - церковь города Кропоткин. Собираемся вместе чтобы изучать Слово, учавствовать в миссиях, служить нашему городу
        </p>
      </div>
    </div>
  </div>
</div>

<?php $img_array = get_attached_media('image'); ?>
<div class="main-slider">
  <div class="container-xxl">
    <div class="main-slider__wrapper">
      <div class="main-slider__list">1</div>
      <div class="main-slider__content">
        <div class="main-slider__slides">2</div>
        <div class="main-slider__info">3</div>
      </div>
    </div>
    <!-- <div class="main-slider__wrapper d-flex flex-column justify-content-start align-items-center">
      <h3 class="maine-slider__title">Жизнь церкви</h3>
      <div data-bs-interval="false" id="carouselExampleCaptions" class="carousel slide w-100" data-bs-ride="carousel">
        <div class="carousel-inner">
          <?php
          $index = 0;
          foreach ($img_array as $img) {
            $img_url = $img->guid;
            if ($index == 0) {
          ?>

              <div class="carousel-item active overflow-hidden">
                <img src="<?= $img_url ?>" class="d-block w-100 carousel-img" alt="...">
              </div>

            <?php
            } else {
            ?>
              <div class="carousel-item overflow-hidden">
                <img src="<?= $img_url ?>" class="d-block w-100 carousel-img" alt="...">
              </div>
          <?php
            }
            $index++;
          }
          ?>
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
    </div> -->

  </div>
</div>
<!-- <div class="main-contact p-block p-block_s">
    <div class="container-xxl">
      <div class="main-contact__wrapper">
        <div class="main-contact__body d-flex justify-content-between w-100">
          <div class="main-contact__grid d-flex flex-column gap-4 w-100">
            <div class="main-contact__grid-row d-flex gap-4 flex-wrap">
              <div class="main-card border border-gray-200 main-contact__grid-item d-flex">
                <div class="main-card__main d-flex flex-column justify-content-between gap-4">
                  <div class="main-card__main-item">
                    <h4 class="main-card__title">Четверг</h4>
                    <div class="main-card__time">
                      <div class="d-flex align-items-center justify-content-between">
                        <p><b>19:30</b></p>
                        <span class="main-card__line bg-dark"></span>
                        <p>Домашние группы</p>
                      </div>
                    </div>
                  </div>

                  <div class="main-card__main-item">
                    <p class="">Олег: +7 (928)-4131-458</p>
                  </div>

                </div>
                <div class="main-card__secondary d-flex justify-content-end">
                  <div class="main-card__picture">

                  </div>
                </div>
              </div>
              <div class="main-card border border-gray-200 main-contact__grid-item d-flex">
                <div class="main-card__main d-flex flex-column justify-content-between gap-4">
                  <div class="main-card__main-item">
                    <h4 class="main-card__title">Воскресенье</h4>
                    <div class="main-card__time">
                      <div class="d-flex align-items-center justify-content-between">
                        <p><b>10:00</b></p>
                        <span class="main-card__line bg-dark"></span>
                        <p>Утреннее служение</p>
                      </div>
                    </div>
                  </div>

                  <div class="main-card__main-item">
                    <p class="">Олег: +7 (928)-4131-458</p>
                  </div>

                </div>
                <div class="main-card__secondary d-flex justify-content-end">
                  <div class="main-card__picture">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div> -->
<script>
  divByHeightWinow('.intro', 480)
  var myCarousel = document.querySelector('#carouselExampleCaptions')
  var carousel = new bootstrap.Carousel(myCarousel)
</script>
</body>

</html>