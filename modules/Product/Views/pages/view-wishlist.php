<?= $this->extend('\Modules\Product\Views\Main') ?>

<?= $this->section('content') ?>

<section class="bg-white">
  <div class="viewport">
    <h2 class="text-xl font-bold my-7 text-gray-900 lg:text-2xl">My Wishlist</h2>

    <div class="grid grid-cols-2 gap-x-4 gap-y-6 lg:grid-cols-3 lg:gap-6">

      <div class="group border rounded-md bg-white transition overflow-hidden shadow-sm hover:shadow-md lg:flex">
        <div class=" border-b bg-gray-200 aspect-w-1 aspect-h-1 transition group-hover:opacity-75 lg:border-r lg:border-b-0 lg:h-48 lg:w-48 lg:aspect-none">
          <a href="/product/view-product">
            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" class="w-full h-full object-center object-cover lg:w-full lg:h-full" />
          </a>
        </div>
        <div class="flex flex-col lg:items-end">
          <div class="flex flex-1 justify-between p-3 w-full">
            <h3>
              <a href="#" class="text-xs block leading-4 font-medium text-gray-700 transition hover:text-orange-600 sm:text-sm lg:text-sm">TH Jeans City Backpack</a>
            </h3>
            <p class="ml-3 text-xs font-bold text-indigo-500 sm:text-sm lg:text-base">$35</p>
          </div>

          <div class="ml-auto w-fit m-3">
            <button class="flex items-center text-xs p-1 transition text-rose-700 rounded-full bg-white border border-rose-700 hover:text-white hover:bg-rose-700" type="button">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-current lg:h-4 lg:w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
              </svg>
              <span class="ml-1">Remove</span>
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?= $this->endSection() ?>