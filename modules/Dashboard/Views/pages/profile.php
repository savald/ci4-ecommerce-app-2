<?= $this->extend('\Modules\Dashboard\Views\Main') ?>

<?= $this->section('content') ?>

<div class="bg-white mt-7 px-5 py-6 rounded-lg shadow">
  <!-- Avatar -->
  <div x-data="imageData()" class="p-4 rounded-lg h-fit">
    <div class="flex items-center">
      <!-- Placeholder image -->
      <div x-show="!previewPhoto" class="w-32 h-32 rounded-full shadow-lg overflow-hidden">
        <img src="<?= base_url(); ?>/img/users/default_user.png" alt="" class="w-32 h-32 object-cover object-center">
      </div>
      <!-- Show a preview of the photo -->
      <div x-show="previewPhoto" x-cloak class="w-32 h-32 rounded-full shadow-lg overflow-hidden">
        <img :src="previewPhoto" alt="" class="w-32 h-32 object-cover object-center">
      </div>
      <div class="text-xs ml-4">
        <div class="flex items-center space-x-2">
          <div class="cursor-pointer flex items-center space-x-1 shadow-md rounded-full bg-gray-400 py-2 px-3 text-white text-center w-fit transition hover:bg-gray-500 hover:shadow-none" onclick="upload()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
            </svg>
            <span>Change avatar</span>
          </div>
          <!-- Display the file name when available -->
          <span x-text="fileName || 'No file chosen'" class="text-gray-500 italic">No file chosen</span>
          <!-- Removes the selected file -->
          <button x-show="fileName" x-cloak @click="clearPreview($refs)" x-data="{ tooltip: false }" type="button" aria-label="Remove image" class="text-rose-600">
            <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false">
              <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4" aria-hidden="true" focusable="false">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
              </svg>
              <!-- Tooltip -->
              <div class="relative" x-cloak x-show.transition.origin.top="tooltip">
                <div class="absolute bottom-7 -left-5 z-10 w-32 p-2 -mt-1 text-xs leading-tight text-white bg-neutral-800 rounded-md shadow-lg">
                  Remove image
                </div>
                <svg class="absolute bottom-3 -left-[7px] z-10 w-6 h-6 text-neutral-800  fill-current stroke-current" width="8" height="8">
                  <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                </svg>
              </div>
            </div>
          </button>
        </div>
        <p class="text-gray-700 mt-2">Upload JPG, GIF or PNG image. 300 x 300 required.</p>
        <input @change="updatePreview($refs)" x-ref="input" type="file" name="avatar" id="file-upload" class="sr-only">
      </div>
    </div>
  </div>

  <div class="flex justify-between">
    <div class="w-1/2">
      <div class="mb-4">
        <label for="fullname" class="label-input-profile">Fullname</label>
        <input type="text" name="fullname" id="fullname" class="input-profile" placeholder="Your name" autofocus>
      </div>
      <!-- Email & Phone -->
      <div class="flex space-x-2">
        <div class="mb-4">
          <label for="email" class="label-input-profile">Email</label>
          <input type="email" name="email" id="email" class="input-profile" placeholder="example@email.com" autofocus>
        </div>
        <div class="mb-4">
          <label for="phone" class="label-input-profile">Phone</label>
          <input type="text" name="phone" id="phone" class="input-profile" placeholder="Phone Number" autofocus>
        </div>
      </div>

      <!-- Password -->
      <div class="flex space-x-2">
        <div class="mb-4">
          <label for="password" class="label-input-profile">New Password</label>
          <input type="password" name="password" id="password" class="input-profile" placeholder="••••••••" autofocus>
        </div>
        <div class="mb-4">
          <label for="confirm_password" class="label-input-profile">Confirm Password</label>
          <input type="text" name="confirm_password" id="confirm_password" class="input-profile" placeholder="••••••••" autofocus>
        </div>
      </div>

      <button class="bg-indigo-500 text-sm font-semibold text-white py-3 px-6 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300">
        Update profile
      </button>
    </div>

    <!-- Addresses -->
    <div x-data="setAddress()" @click.outside="showAddress = false" class="w-1/2 h-fit border-l-2 border-gray-100 ml-4 pb-0 pl-4">
      <table class="text-left w-full border-collapse">
        <thead>
          <tr class="text-gray-800 font-medium text-sm border-b-2 border-gray-200">
            <th class="pb-2 px-6">Address</th>
            <th class="pb-2 px-6" width="100">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b border-gray-200 text-xs italic text-gray-500" :class="{ 'hidden' : addresses.length !== 0 }">
            <td class="py-4 px-6">Addres not set...</td>
          </tr>
          <template x-for="(address, index) in addresses" :key="index">
            <tr class="border-b border-gray-200 text-xs transition hover:bg-indigo-50">
              <td class="py-4 px-6" x-text="address.name"></td>
              <td class="text-center">
                <!-- Edit address -->
                <button @click="editAddress; $nextTick(() => $refs.addressInput.select());">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                  </svg>
                </button>
                <!-- Remove address -->
                <button @click="removeAddress(address.id)">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
                </button>
              </td>
            </tr>
          </template>
        </tbody>
      </table>

      <div>
        <button @click="showInputAddress; $nextTick(() => showAddress ? $refs.addressInput.focus() : $refs.addressInput.blur());" class="flex items-center justify-between my-3 px-2 py-1 bg-emerald-500 text-white text-xs rounded shadow transition hover:bg-emerald-600">New address</button>
        <div x-show="showAddress" x-cloak x-collapse>
          <div class="bg-indigo-50 rounded p-2 space-y-2">
            <textarea x-ref="addressInput" x-model="newAddress.name" class="block text-xs w-full px-3 rounded placeholder-gray-300 border-none transition focus:bg-white focus:ring-2 focus:ring-indigo-400" placeholder="New address"></textarea>
            <div class="flex justify-between">
              <span x-show="error" x-cloak class="text-rose-500 text-xs">The address can't be empty!</span>
              <!-- Add address -->
              <button x-show="!update" x-cloak @click="addAddress" class="flex items-center justify-between ml-auto px-2 py-1 text-xxs bg-sky-500 text-white rounded-full shadow transition hover:bg-sky-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                <span>Add</span>
              </button>

              <!-- Update address -->
              <button x-show="update" x-cloak @click="updateAddress(newAddress.id, newAddress.name)" class="flex items-center justify-between ml-auto px-2 py-1 text-xxs bg-violet-500 text-white rounded-full shadow transition hover:bg-violet-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                </svg>
                <span>Update</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection() ?>