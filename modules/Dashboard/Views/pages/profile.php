<?= $this->extend('\Modules\Dashboard\Views\Main') ?>

<?= $this->section('content') ?>

<div class="bg-white mt-7 px-5 py-6 rounded-lg shadow">
  <!-- Avatar -->
  <div class="p-4 rounded-lg h-fit">
    <div class="flex items-center space-x-4">
      <img src="https://tailus.io/sources/blocks/stats-cards/preview/images/second_user.webp" alt="" class="w-32 h-32 rounded-full object-cover object-center">
      <div class="text-xs space-y-2">
        <div class="cursor-pointer flex items-center space-x-1 shadow-md rounded-full bg-gray-400 py-2 px-3 text-white text-center w-fit transition hover:bg-gray-500 hover:shadow-none" onclick="upload()">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
          </svg>
          <span>Change avatar</span>
        </div>
        <p class="text-gray-500">Upload JPG, GIF or PNG image. 300 x 300 required.</p>
        <input type="file" name="avatar" id="file-upload" class="sr-only">
      </div>
    </div>
  </div>

  <div class="flex justify-between">
    <div class="w-1/2">
      <div class="mb-4">
        <label for="fullname" class="label-input">Fullname</label>
        <input type="text" name="fullname" id="fullname" class="input-profile" placeholder="Your name" autofocus>
      </div>
      <!-- Email & Phone -->
      <div class="flex space-x-2">
        <div class="mb-4">
          <label for="email" class="label-input">Email</label>
          <input type="email" name="email" id="email" class="input-profile" placeholder="example@email.com" autofocus>
        </div>
        <div class="mb-4">
          <label for="phone" class="label-input">Phone</label>
          <input type="text" name="phone" id="phone" class="input-profile" placeholder="Phone Number" autofocus>
        </div>
      </div>

      <!-- Password -->
      <div class="flex space-x-2">
        <div class="mb-4">
          <label for="password" class="label-input">New Password</label>
          <input type="password" name="password" id="password" class="input-profile" placeholder="••••••••" autofocus>
        </div>
        <div class="mb-4">
          <label for="confirm_password" class="label-input">Confirm Password</label>
          <input type="text" name="confirm_password" id="confirm_password" class="input-profile" placeholder="••••••••" autofocus>
        </div>
      </div>

      <button class="bg-indigo-500 text-sm font-semibold text-white py-3 px-6 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300">
        Update profile
      </button>
    </div>

    <!-- Addresses -->
    <div class="w-1/2 border-l border-gray-100 ml-4 pl-4">
      <table class="text-left w-full border-collapse">
        <thead>
          <tr class="text-gray-800 font-bold text-sm border-b-2 border-gray-200">
            <th class="pb-2 px-6">Address</th>
            <th class="pb-2 px-6" width="100">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b border-gray-200 text-sm transition hover:bg-gray-100">
            <td class="py-4 px-6">New York</td>
            <td class="py-4 text-center">
              <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
              </button>
              <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>

<?= $this->endSection() ?>