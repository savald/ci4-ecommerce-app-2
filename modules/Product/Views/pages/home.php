<?= $this->extend('\Modules\Product\Views\Main') ?>

<?= $this->section('content') ?>

<!-- <div class="relative"> -->
<!-- Embla Carousel -->
<!-- <div class="embla h-[30rem] ">
    <div class="embla__container h-full">
      <div class="embla__slide h-full bg-cover bg-center" style="background-image: url(<?= base_url(); ?>/img/bg/1.jpg)"></div>
      <div class="embla__slide h-full bg-cover bg-center" style="background-image: url(<?= base_url(); ?>/img/bg/2.jpg)"></div>
      <div class="embla__slide h-full bg-cover bg-center" style="background-image: url(<?= base_url(); ?>/img/bg/3.jpg)"></div>
    </div>
  </div> -->

<!-- <div class="absolute top-0 right-0 w-full h-full">
    <div class="max-w-7xl mx-auto h-full border-2 border-emerald-500">
      <div class="grid grid-cols-3 gap-y-10 gap-x-8 py-10 h-full border-2 border-pink-500">
        <div class="col-start-3 grid grid-cols-2 gap-x-8 p-8 bg-slate-100 rounded-lg">
          <div class="group relative text-base sm:text-sm">
            <div class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
              <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg" alt="Drawstring top with elastic loop closure and textured interior padding." class="object-center object-cover">
            </div>
            <a href="#" class="mt-6 block font-medium text-gray-900">
              <span class="absolute z-10 inset-0" aria-hidden="true"></span>
              New Arrivals
            </a>
            <p aria-hidden="true" class="mt-1">Shop now</p>
          </div>

          <div class="group relative text-base sm:text-sm">
            <div class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
              <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg" alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt." class="object-center object-cover">
            </div>
            <a href="#" class="mt-6 block font-medium text-gray-900">
              <span class="absolute z-10 inset-0" aria-hidden="true"></span>
              Artwork Tees
            </a>
            <p aria-hidden="true" class="mt-1">Shop now</p>
          </div>
        </div>
      </div>
    </div>
  </div> -->
<!-- </div> -->

<div class="max-w-7xl mx-auto p-8 border-2 border-emerald-500">
  <div class="grid grid-cols-3 gap-y-10 gap-x-6 h-[30rem] border-2 border-pink-500">

    <div class=" grid grid-cols-2 gap-x-8 border-2 border-indigo-500">
      <div class="group relative text-base sm:text-sm">
        <div class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
          <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg" alt="Drawstring top with elastic loop closure and textured interior padding." class="object-center object-cover">
        </div>
        <a href="#" class="mt-6 block font-medium text-gray-900">
          <span class="absolute z-10 inset-0" aria-hidden="true"></span>
          New Arrivals
        </a>
        <p aria-hidden="true" class="mt-1">Shop now</p>
      </div>

      <div class="group relative text-base sm:text-sm">
        <div class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
          <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg" alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt." class="object-center object-cover">
        </div>
        <a href="#" class="mt-6 block font-medium text-gray-900">
          <span class="absolute z-10 inset-0" aria-hidden="true"></span>
          Artwork Tees
        </a>
        <p aria-hidden="true" class="mt-1">Shop now</p>
      </div>
    </div>

    <div class="col-start-2 col-span-2 border-2 border-indigo-500">
      <div class="embla">
        <div class="embla__container">
          <!-- <div class="embla__slide bg-cover bg-center" style="background-image: url(<?= base_url(); ?>/img/bg/1.jpg)"></div>
          <div class="embla__slide bg-cover bg-center" style="background-image: url(<?= base_url(); ?>/img/bg/2.jpg)"></div>
          <div class="embla__slide bg-cover bg-center" style="background-image: url(<?= base_url(); ?>/img/bg/3.jpg)"></div> -->
          <div class="embla__slide bg-cover bg-center h-full">
            <img src="<?= base_url(); ?>/img/bg/1.jpg" class="w-full h-full">
          </div>
          <div class="embla__slide bg-cover bg-center h-full">
            <img src="<?= base_url(); ?>/img/bg/1.jpg" class="w-full h-full">
          </div>
          <div class="embla__slide bg-cover bg-center h-full">
            <img src="<?= base_url(); ?>/img/bg/1.jpg" class="w-full h-full">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Product list -->
<div class="max-w-2xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8 bg-white">
  <h2 class="text-2xl font-bold tracking-tight text-gray-900">Trending products</h2>

  <div class="mt-6 grid grid-cols-2 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
    <div>
      <div class="mt-4 mb-3">
        <a href="#">
          <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden hover:opacity-75 hover:border lg:h-80 lg:aspect-none">
            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full" />
          </div>
        </a>
        <div class="flex justify-between mt-4">
          <a href="#" class="text-sm font-bold text-gray-700 hover:text-orange-600">
            <h3>Basic Tee</h3>
          </a>
          <!-- <div class="space-x-2">
                  <button class="text-base sm:text-lg text-slate-500 hover:text-pink-600">
                    <i class="fa-regular fa-heart"></i>
                  </button>
                  <button class="text-base sm:text-lg text-slate-500 hover:text-indigo-600">
                    <i class="fa-solid fa-cart-plus"></i>
                  </button>
                </div> -->
          <div class="flex gap-2 text-sm font-medium text-gray-900">$35</div>
        </div>
      </div>
      <!-- <div class="flex gap-2 text-sm font-medium text-gray-900">$35</div> -->

      <div class="flex gap-3 font-medium text-gray-900">
        <button class="w-full bg-gray-200 border border-transparent rounded-md py-2 px-4 sm:px-8 text-xs sm:text-sm font-bold text-gray-700 hover:bg-gray-300 focus:outline-none transition-colors duration-100">Add to bag</button>
        <button class="text-base sm:text-lg text-slate-500 hover:text-pink-600" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add to favorites">
          <i class="fa-regular fa-heart"></i>
        </button>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>