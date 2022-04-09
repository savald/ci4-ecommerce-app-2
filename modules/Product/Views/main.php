<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
  <link rel="stylesheet" href="<?= base_url(); ?>/css/app.css">
  <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
  <script src="https://unpkg.com/embla-carousel-autoplay/embla-carousel-autoplay.umd.js"></script>
  <style>
    [x-cloak] {
      display: none !important;
    }

    .embla {
      overflow: hidden;
    }

    .embla__container {
      display: flex;
    }

    .embla__slide {
      position: relative;
      flex: 0 0 100%;
    }
  </style>
  <title><?= $title; ?></title>
</head>

<body>
  <!-- Header -->
  <?= $this->include('Modules\Product\Views\Layouts\_header') ?>

  <!-- Breadcrumb -->
  <?= $this->include('Modules\Product\Views\Layouts\_breadcrumb') ?>

  <!-- Content -->
  <?= $this->renderSection('content') ?>

  <hr class="my-96">


  <!-- Tooltip -->
  <div class="flex min-h-screen items-center justify-center">
    <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
      <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="rounded-md px-3 py-2 bg-indigo-500 text-white cursor-pointer shadow">
        Hover over me
      </div>
      <div class="relative" x-cloak x-show.transition.origin.top="tooltip">
        <div class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-white transform -translate-x-1/2 -translate-y-full bg-orange-500 rounded-lg shadow-lg">
          Hi, I am Tooltip
        </div>
        <svg class="absolute z-10 w-6 h-6 text-orange-500 transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
          <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
        </svg>
      </div>
    </div>

  </div>

  <script type="text/javascript">
    const emblaNode = document.querySelector(".embla");
    const loop = {
      loop: true
    };
    const autoplay = [EmblaCarouselAutoplay({
      delay: 3000,
      stopOnInteraction: false
    }, (emblaRoot) => emblaRoot.parentElement)];

    const embla = EmblaCarousel(emblaNode, loop, autoplay);
  </script>
</body>

</html>