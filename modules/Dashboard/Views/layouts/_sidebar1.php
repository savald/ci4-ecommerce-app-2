<!-- Sidebar -->

<aside class="fixed z-40 top-0 pb-3 px-3 w-56 flex flex-col justify-between h-screen overflow-auto border-r bg-white transition duration-300 sm:static sm:w-52 md:px-6 md:w-60 lg:w-64 xl:w-72">
  <div class="realtive">
    <!-- Close nav mobile -->
    <div class="absolute right-1.5 top-1.5 inline-flex items-center justify-center rounded-full focus:bg-gray-100 active:bg-gray-200 p-1 sm:hidden">
      <button type="button" class="text-gray-400">
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

    <!-- User image on Mobile -->
    <div class="mt-8 text-center sm:hidden">
      <img src="https://tailus.io/sources/blocks/stats-cards/preview/images/second_user.webp" alt="" class="w-10 h-10 m-auto rounded-full object-cover lg:w-28 lg:h-28">
      <h5 class="hidden mt-4 text-xl font-semibold text-gray-600 lg:block">Cynthia J. Watts</h5>
      <span class="hidden text-gray-400 lg:block">Admin</span>
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
      <!-- <li>
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
      </li> -->
    </ul>

    <!-- Divider -->
    <div class="flex my-6">
      <span class="absolute bg-white px-4 text-sm font-medium uppercase text-center text-gray-400">
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

</aside>