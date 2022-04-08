<div>
  <!-- Off-canvas menu overlay, show/hide based on off-canvas menu state. -->
  <div x-show="openSidebar" x-cloak x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black z-40 bg-opacity-25 lg:hidden"></div>
  <!-- Mobile menu Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
  <div x-show="openSidebar" x-cloak x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="fixed inset-0 flex z-40 lg:hidden">

    <!-- Off-canvas menu, show/hide based on off-canvas menu state. -->
    <div @click.outside="openSidebar = false" class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto">
      <div class="px-4 pt-5 pb-2 flex justify-end">
        <button @click="openSidebar = false" type="button" class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400">
          <span class="sr-only">Close menu</span>
          <!-- Heroicon name: outline/x -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!-- Links -->
      <div class="mt-2">
        <!-- Login & Register -->
        <div class="border-b border-gray-200">
          <div class="-mb-px flex px-4 space-x-8 text-center">
            <button @click="logModal = true; openSidebar = false" class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium hover:border-indigo-500">Sign in</button>
            <button @click="regModal = true; openSidebar = false" class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium hover:border-indigo-500">Create account</button>
          </div>
        </div>

        <div class="pt-10 pb-8 px-4 space-y-10">
          <!-- Category with Image -->
          <div class="grid grid-cols-2 gap-x-4">
            <div class="group relative text-sm">
              <div class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-center object-cover">
              </div>
              <a href="#" class="mt-6 block font-medium text-gray-900">
                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                New Arrivals
              </a>
              <p aria-hidden="true" class="mt-1">Shop now</p>
            </div>

            <div class="group relative text-sm">
              <div class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-center object-cover">
              </div>
              <a href="#" class="mt-6 block font-medium text-gray-900">
                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                Basic Tees
              </a>
              <p aria-hidden="true" class="mt-1">Shop now</p>
            </div>
          </div>

          <div x-data="{ 
            expand: false,
            categories: [
              { id: 1, label: 'Clothing', expanded: false },
              { id: 2, label: 'T-Shirt', expanded: false },
            ]
          }">
            <template x-for="category in categories" :key="category.id">
              <div class="mb-3">
                <button @click="category.expanded = !category.expanded" class="font-medium py-2 border-b text-gray-900 flex justify-between w-full">
                  <p x-text="category.label" class="font-medium text-gray-900"></p>
                  <svg x-show="!category.expanded" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                  </svg>
                  <svg x-show="category.expanded" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                  </svg>
                </button>
                <ul x-show="category.expanded" x-collapse role="list" aria-labelledby="women-clothing-heading-mobile" class="mt-2 ml-2 text-sm flex flex-col space-y-2">
                  <li class="flow-root">
                    <a href="#" class="-m-2 p-2 block text-gray-500"> Tops </a>
                  </li>

                  <li class="flow-root">
                    <a href="#" class="-m-2 p-2 block text-gray-500"> Dresses </a>
                  </li>

                  <li class="flow-root">
                    <a href="#" class="-m-2 p-2 block text-gray-500"> Pants </a>
                  </li>

                  <li class="flow-root">
                    <a href="#" class="-m-2 p-2 block text-gray-500"> Denim </a>
                  </li>

                  <li class="flow-root">
                    <a href="#" class="-m-2 p-2 block text-gray-500"> Sweaters </a>
                  </li>

                </ul>
              </div>
            </template>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>