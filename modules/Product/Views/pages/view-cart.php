<?= $this->extend('\Modules\Product\Views\Main') ?>

<?= $this->section('content') ?>

<section class="bg-white">
  <div class="viewport">
    <h2 class="text-xl font-bold py-4 mb-3 text-gray-900 lg:text-2xl">Shopping Cart</h2>

    <div class="lg:flex lg:gap-x-8">
      <!-- Product list -->
      <div class="w-full lg:w-2/3">
        <ul role="list" class="-my-6 mb-24 sm:mb-20 divide-y divide-gray-200">
          <li class="flex py-6">
            <div class="h-20 w-20 lg:h-32 lg:w-32 flex-shrink-0 overflow-hidden rounded shadow-sm border border-gray-200">
              <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center" />
            </div>

            <div class="ml-4 flex flex-1 flex-col">
              <div>
                <div class="flex justify-between text-base font-medium text-gray-900">
                  <h3 class="font-semibold text-sm lg:text-base text-gray-700">
                    <a href="#">Throwback Hip Bag</a>
                  </h3>
                  <p class="ml-4 text-sm font-bold text-gray-800 lg:text-base">$90.00</p>
                </div>
                <p class="mt-1 text-sm text-gray-500">Salmon</p>
              </div>

              <div class="flex flex-1 items-end justify-between text-sm">
                <p class="text-xs text-gray-500 lg:text-base">Qty 1</p>

                <div class="flex">
                  <button type="button" class="text-sm font-medium text-pink-600 lg:text-base hover:text-pink-500">Remove</button>
                </div>
              </div>
            </div>
            
          </li>

          <li class="flex py-6">
            <div class="h-20 w-20 lg:h-32 lg:w-32 flex-shrink-0 overflow-hidden rounded shadow-sm border border-gray-200">
              <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center" />
            </div>

            <div class="ml-4 flex flex-1 flex-col">
              <div>
                <div class="flex justify-between text-base font-medium text-gray-900">
                  <h3 class="font-semibold text-sm lg:text-base text-gray-700">
                    <a href="#">Throwback Hip Bag</a>
                  </h3>
                  <p class="ml-4 text-sm font-bold text-gray-800 lg:text-base">$90.00</p>
                </div>
                <p class="mt-1 text-sm text-gray-500">Salmon</p>
              </div>

              <div class="flex flex-1 items-end justify-between text-sm">
                <p class="text-xs text-gray-500 lg:text-base">Qty 1</p>

                <div class="flex">
                  <button type="button" class="text-sm font-medium text-pink-600 lg:text-base hover:text-pink-500">Remove</button>
                </div>
              </div>
            </div>
          </li>


          <!-- More products... -->
        </ul>
      </div>

      <!-- Checkout -->
      <div class="fixed bottom-0 left-0 right-0 max-w-2xl mx-auto shadow-inner h-fit bg-white border-t lg:shadow-md lg:block lg:static lg:border-none lg:rounded-none lg:w-1/3">
        <div class="pb-5 px-5 sm:px-4">
          <h2 class="hidden mb-2 text-xl font-semibold lg:block">Order Summary</h2>
          <div class="flex justify-between pt-3 text-sm lg:text-base lg:pt-4 font-medium text-gray-900">
            <p class="text-gray-500">Subtotal</p>
            <p class="text-gray-700 font-semibold">$262.00</p>
          </div>
          <div class="flex justify-between py-2 border-b border-gray-200 text-sm lg:text-base lg:py-4 font-medium text-gray-900">
            <p class="text-gray-500">
              Shipping estimate <span data-bs-toggle="tooltip" data-bs-placement="right" title="Shipping calculated at checkout."><i class="fa-solid fa-circle-question"></i></span>
            </p>
            <p class="text-gray-700 font-semibold">$5.00</p>
          </div>
          <div class="flex justify-between py-1 text-sm lg:text-base lg:py-4 font-bold text-gray-800">
            <p>Order total</p>
            <p>$312.00</p>
          </div>
          <div class="mt-2 lg:mt-6">
            <button class="w-full rounded-md border border-transparent bg-indigo-600 px-6 py-2 text-sm font-medium text-white shadow-md hover:bg-indigo-700 hover:shadow-none lg:py-3 lg:text-base">Checkout</button>
          </div>
          <div class="hidden text-center text-sm text-gray-500 lg:mt-6 lg:flex lg:justify-center lg:text-base">
            <p>
              or <a href="/product" class="font-medium text-indigo-600 hover:text-indigo-500">Continue Shopping<span> &rarr;</span></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>