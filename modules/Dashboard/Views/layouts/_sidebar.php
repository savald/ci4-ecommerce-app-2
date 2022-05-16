<!-- Sidebar -->
<aside class="hidden pb-3 px-3 h-screen overflow-y-auto overflow-x-hidden border-r bg-white transition duration-300 sm:block sm:w-64 lg:px-6 lg:w-72">
  <div class="realtive">
    <!-- Close nav mobile -->
    <div @click="dashboardSidebar = false" class="absolute right-1.5 top-1.5 rounded-full focus:bg-gray-100 active:bg-gray-200 p-1 sm:hidden">
      <button @click="openSidebar = false" type="button" class="text-gray-400">
        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <!-- Logo -->
    <div class="-mx-6 px-6 py-4">
      <a href="#" title="home">
        <img src="https://tailus.io/sources/blocks/stats-cards/preview/images/logo.svg" class="w-32" alt="tailus logo">
      </a>
    </div>

    <!-- Menu List -->
    <ul class="space-y-2 tracking-wide mt-5">
      <li class="group">
        <a href="<?= site_url('dashboard/home'); ?>" class="px-4 py-3 flex items-center space-x-4 text-sm text-gray-600 lg:text-base <?= $title == 'Dashboard' ? 'active-sidebar' : ''; ?>">
          <svg class="transition <?= $title == 'Dashboard' ? '' : 'hover-sidebar'; ?>" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-1x2-fill" viewBox="0 0 16 16">
            <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z" />
          </svg>
          <span class="transition <?= $title == 'Dashboard' ? '' : 'hover-sidebar'; ?>">Dashboard</span>
        </a>
      </li>
      <li class="group">
        <a href="<?= site_url('dashboard/products'); ?>" class="px-4 py-3 flex items-center space-x-4 text-sm text-gray-600 lg:text-base <?= $title == 'Dashboard | Products' ? 'active-sidebar' : ''; ?>">
          <svg class="transition <?= $title == 'Dashboard | Products' ? '' : 'hover-sidebar'; ?>" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-fill" viewBox="0 0 16 16">
            <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6l.5.667Z" />
          </svg>
          <span class="transition <?= $title == 'Dashboard | Products' ? '' : 'hover-sidebar'; ?>">Products</span>
        </a>
      </li>
      <li class="group">
        <a href="<?= site_url('dashboard/add-product'); ?>" class="px-4 py-3 flex items-center space-x-4 text-sm text-gray-600 lg:text-base <?= $title == 'Dashboard | Add Product' ? 'active-sidebar' : ''; ?>">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition <?= $title == 'Dashboard | Add Product' ? '' : 'hover-sidebar'; ?>" viewBox="0 0 20 20" fill="currentColor">
            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z" />
          </svg>
          <span class="transition <?= $title == 'Dashboard | Add Product' ? '' : 'hover-sidebar'; ?>">Add Product</span>
        </a>
      </li>
    </ul>

    <!-- Divider -->
    <div class="flex my-6">
      <span class="absolute bg-white px-4 text-xs font-medium uppercase text-center text-gray-400">
        Account settings
      </span>
      <div class="w-full bg-gray-300 mt-2.5 h-px"></div>
    </div>

    <!-- Account Setting -->
    <ul class="space-y-2 tracking-wide mt-5">
      <li>
        <a href="<?= site_url('dashboard/profile'); ?>" class="px-4 py-3 flex items-center space-x-4 text-sm text-gray-600 group lg:text-base <?= $title == 'Dashboard | Profile Info' ? 'active-sidebar' : ''; ?>">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 <?= $title == 'Dashboard | Profile Info' ? '' : 'hover-sidebar'; ?>" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path class="fill-current" stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
          </svg>
          <span class="transition <?= $title == 'Dashboard | Profile Info' ? '' : 'hover-sidebar'; ?>">Profile Info</span>
        </a>
      </li>
      <li>
        <a href="<?= site_url('dashboard/become-seller'); ?>" class="px-4 py-3 flex items-center space-x-4 text-sm text-gray-600 group lg:text-base <?= $title == 'Dashboard | Become a Seller' ? 'active-sidebar' : ''; ?>">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 <?= $title == 'Dashboard | Add Product' ? '' : 'hover-sidebar'; ?>" viewBox="0 0 20 20" fill="currentColor">
            <path class="fill-current" fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
          </svg>
          <span class="transition <?= $title == 'Dashboard | Become a Seller' ? '' : 'hover-sidebar'; ?>">Become a Seller</span>
        </a>
      </li>
    </ul>
  </div>

</aside>

<!-- Sidebar Mobile -->
<div x-data="{ dashboardSidebar: false }">
  <div x-show="dashboardSidebar" @open-sidebar.window="dashboardSidebar = true" @keyup.escape.window="dashboardSidebar = false" x-cloak x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black z-40 bg-opacity-25 sm:hidden">
  </div>

  <aside x-show="dashboardSidebar" x-cloak x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="fixed z-40 top-0 pb-3 px-3 w-56 flex flex-col justify-between h-screen overflow-y-auto overflow-x-hidden bg-white transition duration-300 sm:hidden sm:static sm:w-52 md:px-6 md:w-60 lg:w-64 xl:w-72">
    <div class="realtive">
      <!-- Close nav mobile -->
      <div @click="dashboardSidebar = false" class="absolute right-1.5 top-1.5 rounded-full focus:bg-gray-100 active:bg-gray-200 p-1 sm:hidden">
        <button @click="openSidebar = false" type="button" class="text-gray-400">
          <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!-- Logo -->
      <div class="-mx-6 px-6 py-4">
        <a href="#" title="home">
          <img src="https://tailus.io/sources/blocks/stats-cards/preview/images/logo.svg" class="w-32" alt="tailus logo">
        </a>
      </div>

      <ul class="space-y-2 tracking-wide mt-5">
        <li>
          <a href="<?= site_url('dashboard/home'); ?>" class="px-4 py-3 flex items-center space-x-4 text-sm group rounded-xl shadow-lg text-white bg-gradient-to-r from-indigo-500 to-purple-400 lg:text-base">
            <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
              <path d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z" class="fill-current text-cyan-400 dark:fill-slate-600"></path>
              <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z" class="fill-current text-cyan-200 group-hover:text-cyan-300"></path>
              <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z" class="fill-current group-hover:text-sky-300"></path>
            </svg>
            <span class="-mr-1 font-medium">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('dashboard/products'); ?>" class="px-4 py-3 flex items-center space-x-4 text-sm text-gray-600 group lg:text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path class="fill-current text-gray-300 group-hover:text-cyan-300" fill-rule="evenodd" d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z" clip-rule="evenodd" />
              <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
            </svg>
            <span class="group-hover:text-gray-700">Products</span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('dashboard/add-product'); ?>" class="px-4 py-3 flex items-center space-x-4 text-sm text-gray-600 group lg:text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path class="text-gray-600 group-hover:text-cyan-600" fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V8a2 2 0 00-2-2h-5L9 4H4zm7 5a1 1 0 10-2 0v1H8a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V9z" />
            </svg>
            <span class="group-hover:text-gray-700">Add Product</span>
          </a>
        </li>
        <li>
          <a href="#" class="px-4 py-3 flex items-center space-x-4 text-sm text-gray-600 group lg:text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path class="fill-current text-gray-600 group-hover:text-cyan-600" fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
              <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
            </svg>
            <span class="group-hover:text-gray-700">Reports</span>
          </a>
        </li>
        <li>
          <a href="#" class="px-4 py-3 flex items-center space-x-4 text-sm text-gray-600 group lg:text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
              <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z" />
            </svg>
            <span class="group-hover:text-gray-700">Other data</span>
          </a>
        </li>
        <li>
          <a href="#" class="px-4 py-3 flex items-center space-x-4 text-sm text-gray-600 group lg:text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
              <path class="fill-current text-gray-600 group-hover:text-cyan-600" fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
            </svg>
            <span class="group-hover:text-gray-700">Finance</span>
          </a>
        </li>
      </ul>

      <!-- Divider -->
      <div class="flex my-6">
        <span class="absolute bg-white px-4 text-xs font-medium uppercase text-center text-gray-400">
          Account settings
        </span>
        <div class="w-full bg-gray-300 mt-2.5 h-px"></div>
      </div>

      <ul class="space-y-2 tracking-wide mt-5">
        <li>
          <a href="#" class="px-4 py-3 flex items-center space-x-4 text-sm text-gray-600 group lg:text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path class="fill-current group-hover:text-cyan-600" stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            <span class="group-hover:text-gray-700">Profile info</span>
          </a>
        </li>
        <li>
          <a href="#" class="px-4 py-3 flex items-center space-x-4 text-sm text-gray-600 group lg:text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path class="fill-current group-hover:text-cyan-600" fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
            </svg>
            <span class="group-hover:text-gray-700">Become a seller</span>
          </a>
        </li>
      </ul>
    </div>

    <!-- Logout -->
    <div class="px-6 -mx-6 pt-4 flex justify-between items-center border-t">
      <button class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
        </svg>
        <span class="text-sm group-hover:text-gray-700 lg:text-base">Logout</span>
      </button>
    </div>
  </aside>
</div>