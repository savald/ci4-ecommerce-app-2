  <!-- Register Modal -->
  <div x-show="regModal" x-cloak x-transition:enter="transition-opacity ease-linear duration-2000" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-2000" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="mx-auto fixed inset-0 flex items-center justify-center overflow-y-auto bg-black z-50 bg-opacity-25">
    <div class="p-4 w-full max-w-md h-full md:h-auto">
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
        <h3 class="text-xl font-bold text-center text-gray-900 dark:text-white">Create account</h3>
        <form id="reg_form" class="px-4 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="<?= site_url('user/create-account'); ?>" method="POST">
          <?= csrf_field() ?>
          <div>
            <label for="name" class="label-modal">Full Name</label>
            <input type="text" name="name" id="reg_name" class="input-modal border-gray-300" placeholder="Your Name..." autofocus>
            <div class="hidden error-input"></div>
          </div>
          <div>
            <label for="email" class="label-modal">Email Address</label>
            <input type="text" name="email" id="reg_email" class="input-modal border-gray-300" placeholder="email@example.com">
            <div class="hidden error-input"></div>
          </div>
          <div>
            <label for="password" class="label-modal">Password</label>
            <input type="password" name="password" id="reg_password" placeholder="••••••••" class="input-modal border-gray-300">
            <div class="hidden error-input"></div>
          </div>
          <button type="submit" class="log-reg-btn">Create account</button>
          <div class="text-sm text-center font-medium text-gray-500 dark:text-gray-300">
            Already have an account?
            <a @click="regModal = false; logModal = true" href="#" class="text-indigo-700 hover:underline dark:text-indigo-500">Sign in</a>
          </div>
        </form>
      </div>
    </div>
  </div>