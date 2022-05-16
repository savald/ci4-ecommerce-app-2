<!-- Header -->
<div class="sticky z-10 top-0 shadow-md rounded-lg bg-white sm:py-3">
  <div class="pr-6 flex items-center justify-between space-x-4 sm:px-6 2xl:container">
    <!-- Toggle Sidebar Button -->
    <button x-data @click="$dispatch('open-sidebar')" class="p-4 border-r sm:hidden">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <!--search bar -->
    <div class="hidden sm:block">
      <div class="relative flex items-center text-gray-400 focus-within:text-indigo-400">
        <span class="absolute left-0 h-6 flex items-center">
          <svg xmlns="http://ww50w3.org/2000/svg" class="w-5 fill-current" viewBox="0 0 35.997 36.004">
            <path id="Icon_awesome-search" data-name="search" d="M35.508,31.127l-7.01-7.01a1.686,1.686,0,0,0-1.2-.492H26.156a14.618,14.618,0,1,0-2.531,2.531V27.3a1.686,1.686,0,0,0,.492,1.2l7.01,7.01a1.681,1.681,0,0,0,2.384,0l1.99-1.99a1.7,1.7,0,0,0,.007-2.391Zm-20.883-7.5a9,9,0,1,1,9-9A8.995,8.995,0,0,1,14.625,23.625Z"></path>
          </svg>
        </span>
        <input type="text" name="leadingIcon" id="leadingIcon" placeholder="Search here" class="w-full pl-8 pr-4 py-2.5 text-sm text-gray-600 placeholder-gray-300 border-0 focus:ring-0">
      </div>
    </div>

    <div class="flex space-x-4">
      <!-- search bar button -->
      <button aria-label="search" class="hidden w-10 h-10 rounded-full border bg-gray-100 focus:bg-gray-100 active:bg-gray-200 md:hidden">
        <svg xmlns="http://ww50w3.org/2000/svg" class="w-4 mx-auto fill-current text-gray-600" viewBox="0 0 35.997 36.004">
          <path id="Icon_awesome-search" data-name="search" d="M35.508,31.127l-7.01-7.01a1.686,1.686,0,0,0-1.2-.492H26.156a14.618,14.618,0,1,0-2.531,2.531V27.3a1.686,1.686,0,0,0,.492,1.2l7.01,7.01a1.681,1.681,0,0,0,2.384,0l1.99-1.99a1.7,1.7,0,0,0,.007-2.391Zm-20.883-7.5a9,9,0,1,1,9-9A8.995,8.995,0,0,1,14.625,23.625Z"></path>
        </svg>
      </button>

      <!-- <button aria-label="chat" class="w-10 h-10 rounded-full border bg-gray-100 focus:bg-gray-100 active:bg-gray-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 m-auto text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
        </svg>
      </button>

      <button aria-label="notification" class="w-10 h-10 rounded-full border bg-gray-100 focus:bg-gray-100 active:bg-gray-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 m-auto text-gray-600" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
        </svg>
      </button> -->

      <!-- User menu -->
    </div>
    <div x-data="{ menu: false }">
      <div @click="menu = !menu" class="cursor-pointer relative">
        <img src="https://tailus.io/sources/blocks/stats-cards/preview/images/second_user.webp" alt="" class="w-10 h-10 m-auto rounded-full object-cover">
      </div>
      <div x-show="menu" @keyup.escape.window="menu = false" @click.outside="menu = false" x-cloak x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 z-50 mt-1 w-40 rounded shadow-xl overflow-hidden bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
        <div class="flex justify-center px-1 py-3">
          <span class="absolute bg-white px-2 text-sm font-medium uppercase text-center text-gray-300"><?= session()->get('name'); ?></span>
          <div class="w-full bg-gray-200 mt-2.5 h-px"></div>
        </div>

        <a href="<?= site_url('user/logout'); ?>" class="flex items-center text-gray-500 px-4 py-3 text-sm transition hover:bg-gray-100">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
          </svg>
          <span>Sign out</span>
        </a>
      </div>
    </div>
  </div>
</div>