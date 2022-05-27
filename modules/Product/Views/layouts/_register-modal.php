  <!-- Register Modal -->
  <div x-show="regModal" x-cloak x-transition:enter="transition-opacity ease-linear duration-2000" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-2000" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="mx-auto fixed inset-0 flex items-center justify-center overflow-y-auto bg-black z-50 bg-opacity-25">
    <div  class="p-4 w-full max-w-md h-full md:h-auto">
      <!-- Modal content -->
      <div @click.outside="regModal = false" class="bg-white rounded shadow-lg dark:bg-gray-700">
        <!-- Close button -->
        <div class="flex justify-end p-2">
          <button @click="regModal = false" type="button" class="text-gray-400  transition hover:text-gray-900 text-sm p-1.5 ml-auto inline-flex items-center dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <form class="px-4 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="<?= site_url('user/create-account'); ?>" method="POST">
          <?= csrf_field() ?>
          <h3 class="text-xl font-bold text-center text-gray-900 dark:text-white">Create account</h3>
          <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Full Name</label>
            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded focus:border-indigo-500 focus:outline-none appearance-none block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Your Name..." autofocus>
          </div>
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email Address</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded focus:border-indigo-500 focus:outline-none appearance-none block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="email@example.com">
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded focus:border-indigo-500 focus:outline-none appearance-none block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
          </div>
          <button type="submit" class="w-full text-white transition bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Create account</button>
          <div class="text-sm text-center font-medium text-gray-500 dark:text-gray-300">
            Already have an account?
            <a @click="regModal = false; logModal = true" href="#" class="text-indigo-700 hover:underline dark:text-indigo-500">Sign in</a>
          </div>
        </form>
      </div>
    </div>
  </div>