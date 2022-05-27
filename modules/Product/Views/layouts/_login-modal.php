  <!-- Login Modal -->
  <div x-show="logModal" x-cloak x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="mx-auto fixed inset-0 flex items-center justify-center overflow-y-auto bg-black z-50 bg-opacity-25">
    <div @click.outside="logModal = false" class="p-4 w-full max-w-md h-full md:h-auto">
      <!-- Modal content -->
      <div class="bg-white rounded shadow-lg dark:bg-gray-700">
        <!-- Close button -->
        <div class="flex justify-end p-2">
          <button @click="logModal = false" type="button" class="text-gray-400 transition hover:text-gray-900 text-sm p-1.5 ml-auto inline-flex items-center dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>

        <div class="px-4 space-y-6">
          <h3 class="text-xl font-bold text-center text-gray-900 dark:text-white">Sign in</h3>
          <p class="text-sm font-semibold text-center text-gray-500 dark:text-white">with</p>
        </div>

        <!-- FB & Google login -->
        <div class="px-4 my-6 space-x-4 lg:px-8 flex justify-between">
          <button class="bg-white w-full active:bg-gray-50 text-gray-700 px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center justify-center font-bold text-xs ease-linear transition-all duration-150" type="button">
            <img alt="..." class="w-5 mr-1" src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg">Facebook</button>
          <button class="bg-white w-full active:bg-gray-50 text-gray-700 px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center justify-center font-bold text-xs ease-linear transition-all duration-150" type="button">
            <img alt="..." class="w-5 mr-1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2048px-Google_%22G%22_Logo.svg.png">Google</button>
        </div>

        <form class="px-4 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="<?= site_url('user/login'); ?>" method="POST">
          <?= csrf_field() ?>
          <div class="flex flex-row justify-center mb-8">
            <span class="absolute bg-white px-4 text-sm font-semibold text-center text-gray-500 dark:text-white">or with email</span>
            <div class="w-full bg-gray-200 mt-2.5 h-px"></div>
          </div>
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded focus:border-indigo-500 focus:outline-none appearance-none block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="email@example.com">
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded focus:border-indigo-500 focus:outline-none appearance-none block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
          </div>
          <div class="flex justify-between">
            <div class="flex items-start">
              <div class="flex items-center h-5">
                <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-indigo-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-indigo-600 dark:ring-offset-gray-800">
              </div>
              <div class="ml-3 text-sm">
                <label for="remember" class="font-medium text-gray-900 dark:text-gray-300">Remember me</label>
              </div>
            </div>
            <a href="#" class="text-sm text-indigo-700 hover:underline dark:text-indigo-500">Forgot Password?</a>
          </div>
          <button type="submit" class="w-full text-white transition bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Login to your account</button>
          <div class="text-sm text-center font-medium text-gray-500 dark:text-gray-300">
            Not registered?
            <a @click="regModal = true; logModal = false" href="#" class="text-indigo-700 hover:underline dark:text-indigo-500">Create account</a>
          </div>
        </form>
      </div>
    </div>
  </div>


