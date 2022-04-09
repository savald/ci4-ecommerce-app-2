<div x-data="{ openSidebar: false, logModal: false, regModal: false }" class="bg-white ">

  <?= $this->include('\Modules\Product\Views\Layouts\_log-reg-modal') ?>
  <?= $this->include('\Modules\Product\Views\Layouts\_sidebar-mobile') ?>

  <header class="relative bg-white">
    <p class="bg-indigo-600 h-10 flex items-center justify-center text-sm font-medium text-white px-4 sm:px-6 lg:px-8">Get free delivery on orders over $100</p>

    <nav x-data="{ search: false }" aria-label="Top" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="border-b border-gray-200">
        <div class="h-16 flex items-center">
          <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
          <button @click="openSidebar = true" type="button" class="bg-white p-2 rounded-md text-gray-400 lg:hidden">
            <span class="sr-only">Open menu</span>
            <!-- Heroicon name: outline/menu -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>

          <!-- Logo -->
          <div class="ml-4 flex lg:ml-0">
            <a href="/product">
              <span class="sr-only">Workflow</span>
              <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="">
            </a>
          </div>

          <!-- Categories menus -->
          <div class="hidden lg:ml-8 lg:block lg:self-stretch">
            <div class="h-full flex space-x-8">
              <a href="/product/categories" class="flex items-center text-[0.9375rem] font-semibold transition-colors text-gray-700 hover:text-orange-500">
                <i class="fa-solid fa-bars"></i>
                <span class="px-2">Categories</span>
                <i class="fa-solid fa-caret-down"></i>
              </a>
            </div>

            <?= $this->include('\Modules\Product\Views\Layouts\_categories-hover') ?>

          </div>

          <div class="ml-auto flex items-center">
            <?php if (!session()->get('is_logged')) : ?>
              <!-- Login & Register -->
              <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-4">
                <button @click="logModal = true" class="text-sm font-medium transition-colors text-gray-700 hover:text-orange-500">Sign in</button>
                <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                <button @click="regModal = true" class="text-sm font-medium transition-colors text-gray-700 hover:text-orange-500">Create account</button>
              </div>
            <?php else : ?>
              <!-- User has logged -->
              <div x-data="{ userMenu: false }" class="hidden relative text-left  lg:inline-block">

                <a href="#" @click="userMenu = !userMenu" @keydown.escape="userMenu = false" class="group flex items-center p-1 text-gray-400 shadow rounded transition hover:shadow-md hover:text-gray-500">
                  <div class="h-9 w-9 border rounded-full overflow-hidden transition group-hover:saturate-50">
                    <img src="<?= base_url(); ?>/img/bg/2.jpg" class="object-cover object-center w-full h-full" alt="">
                  </div>
                  <div class="text-xs font-medium mx-2">Salman</div>
                  <svg class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </a>

                <!-- User Menu -->
                <div x-show="userMenu" @click.outside="userMenu = false" x-cloak x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" @click.away="open = false" class="origin-top-right absolute right-0 mt-0.5 w-40 rounded shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">

                  <div>
                    <a href="<?= site_url('product/view-wishlist'); ?>" class="flex items-center text-gray-500 px-4 py-2 text-sm transition hover:bg-gray-100">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                      </svg>
                      <span>My Account</span>
                    </a>
                    <a href="<?= site_url('product/view-wishlist'); ?>" class="flex items-center text-gray-500 px-4 py-2 text-sm transition hover:bg-gray-100">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                      </svg>
                      <span>Wishlist</span>
                    </a>

                    <!-- <a href="<?= site_url('dashboard'); ?>" class="flex items-center text-gray-500 px-4 py-2 text-sm transition hover:bg-gray-100">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                      </svg>
                      <span>Dashboard</span>
                    </a>

                    <a href="<?= site_url('dashboard'); ?>" class="flex items-center text-gray-500 px-4 py-2 text-sm transition hover:bg-gray-100">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>
                      <span>Setting</span>
                    </a> -->

                    <a href="<?= site_url('user/logout'); ?>" class="flex items-center text-gray-500 px-4 py-2 text-sm border-t transition hover:bg-gray-100">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                      </svg>
                      <span>Sign out</span>
                    </a>
                  </div>
                </div>
              </div>
            <?php endif ?>

            <!-- Search -->
            <div class="flex lg:ml-6">
              <button @click="search = !search" @keydown.escape="search = false" class="p-1 text-gray-400 transition-colors hover:text-gray-500">
                <span class="sr-only">Search</span>
                <!-- Heroicon name: outline/search -->
                <svg class="w-6 h-6" :class="{ 'text-indigo-500': search }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </button>
            </div>

            <!-- Cart -->
            <div class="ml-4 flow-root lg:ml-6 -mr-2">
              <a href="/product/view-cart" class="group p-1 flex items-center">
                <!-- Heroicon name: outline/shopping-bag -->
                <svg class="flex-shrink-0 h-6 w-6 text-gray-400 transition-colors group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
                <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                <span class="sr-only">items in cart, view bag</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Input Search -->
      <div x-show="search" @click.outside="search = false" x-cloak x-collapse class="shadow">
        <form class="group relative ">
          <svg width="20" height="20" class="hidden absolute right-3 top-1/2 -mt-2.5 text-slate-400 pointer-events-none group-focus-within:block group-focus-within:text-indigo-500" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
          <input class="focus:ring-1 focus:ring-indigo-500 focus:outline-none appearance-none w-full text-sm leading-6 text-slate-700 placeholder-slate-400 rounded-b py-2 pl-3 ring-1 ring-slate-200" type="text" aria-label="Find product" placeholder="Find product...">
        </form>
      </div>

      <!-- Categories -->

    </nav>
  </header>
</div>