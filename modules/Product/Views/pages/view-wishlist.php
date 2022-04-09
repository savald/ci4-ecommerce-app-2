<?= $this->extend('\Modules\Product\Views\Main') ?>

<?= $this->section('content') ?>

<section class="bg-white">
  <div class="viewport">
    <h2 class="text-xl font-bold my-7 text-gray-900 lg:text-2xl">My Wishlist</h2>

    <div class="grid grid-cols-2 gap-4 lg:gap-6">

      <div class="border rounded-md bg-white transition shadow overflow-hidden hover:shadow-md lg:flex">
        <a href="/product/view-product" class="group lg:flex">
          <div class="w-full border-b bg-gray-200 aspect-w-1 aspect-h-1 transition overflow-hidden group-hover:opacity-75 lg:border-r lg:border-b-0 lg:h-72 lg:w-72 lg:aspect-none">
            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" class="w-full h-full object-center object-cover lg:w-full lg:h-full" />
          </div>
        </a>
        <div class="flex flex-1 flex-col lg:items-end">
          <div class="flex flex-1 justify-between px-3 pt-3 w-full">
            <h3>
              <a href="#" class="text-xs block leading-4 font-medium text-gray-700 transition hover:text-orange-600 sm:text-sm lg:text-base">TH Jeans City Backpack</a>
            </h3>
            <p class="ml-3 text-xs font-bold text-indigo-500 sm:text-sm lg:text-xl">$35</p>
          </div>

          <div class="p-3 lg:w-fit">
            <div class="flex items-center justify-center p-2 text-xs rounded cursor-pointer transition text-rose-700 border border-rose-700 hover:text-white hover:bg-rose-700 lg:text-sm lg:p-2.5">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-current" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
              </svg>
              <span class="ml-1 font-medium">Remove</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?= $this->endSection() ?>