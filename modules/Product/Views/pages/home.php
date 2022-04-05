<?= $this->extend('\Modules\Product\Views\Main') ?>

<?= $this->section('content') ?>

<!-- Hero section -->
<section class="bg-white mb-9">
  <div class="viewport">
    <div class="lg:grid lg:grid-cols-3 lg:gap-y-10 lg:gap-x-6">

      <div class="hidden lg:flex flex-col gap-y-6">
        <div class="group relative basis-1/2 rounded-md aspect-w-1 overflow-hidden shadow-md">
          <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg" class="object-center object-cover transition group-hover:scale-110">

          <a href="#" class="flex font-medium text-gray-900 ">
            <!-- <span class="absolute z-10 inset-0" aria-hidden="true"></span> -->
            <div class="px-4 py-2 flex flex-col justify-center text-white text-center bg-black bg-opacity-30">
              <h3 class="font-medium">New Arrivals</h3>
              <p aria-hidden="true" class="text-sm">Shop now</p>
            </div>
          </a>
        </div>

        <div class="group relative basis-1/2 rounded-md aspect-w-1 overflow-hidden shadow-md">
          <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg" class="object-center object-cover transition group-hover:scale-110">

          <a href="#" class="flex font-medium text-gray-900 ">
            <!-- <span class="absolute z-10 inset-0" aria-hidden="true"></span> -->
            <div class="px-4 py-2 flex flex-col justify-center text-white text-center bg-black bg-opacity-30">
              <h3 class="font-medium">New Arrivals</h3>
              <p aria-hidden="true" class="text-sm">Shop now</p>
            </div>
          </a>
        </div>
      </div>

      <!-- Embla carousel -->
      <div class=" rounded-md overflow-hidden shadow-md lg:col-start-2 lg:col-span-2 ">
        <div class="embla">
          <div class="embla__container">
            <div class="embla__slide lg:h-[30rem]">
              <img src="<?= base_url(); ?>/img/bg/1.jpg" class="bg-cover bg-bottom">
            </div>
            <div class="embla__slide lg:h-[30rem]">
              <img src="<?= base_url(); ?>/img/bg/2.jpg" class="bg-cover bg-bottom">
            </div>
            <div class="embla__slide lg:h-[30rem]">
              <img src="<?= base_url(); ?>/img/bg/3.jpg" class="bg-cover bg-bottom">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Product list -->
<section class="bg-gray-100">
  <div class="viewport">
    <div class="pb-8 pt-5">
      <h2 class="text-2xl font-bold text-center tracking-tight text-gray-900">Trending products</h2>

      <div class="mt-8 grid grid-cols-2 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-5 xl:gap-x-8">
        <div class="group border rounded-md bg-white transition shadow-sm hover:shadow">
          <a href="/product/view-product">
            <div class="w-full min-h-80 border-b bg-gray-200 aspect-w-1 aspect-h-1 transition overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
              <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full" />
            </div>

            <div class="flex items-center justify-between px-3 pt-3">
              <h3 class="text-sm font-medium text-gray-700 group-hover:text-orange-600">
                Basic Tee
              </h3>
              <p class="text-xs font-bold text-indigo-600 lg:text-base">$35</p>
            </div>
            <div class=" p-3">
              <div class="text-xxs text-yellow-400">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <p class="text-xxs mt-1 text-slate-700">129 sold</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>