<div x-data="{ addModal: false }">
  <div x-show="addModal" @modal-add.window="addModal = true" x-cloak x-transition:enter="transition-opacity ease-linear duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="mx-auto fixed inset-0 flex items-center justify-center overflow-y-auto bg-black z-50 bg-opacity-60">
    <!-- Modal content -->
    <div @click.outside="addModal = false" class="relative p-6 bg-white rounded shadow-lg dark:bg-gray-700">
      <h3 class="text-xl mb-8 font-bold text-center text-gray-900 dark:text-white">Add new product</h3>

      <!-- Close button -->
      <div class="absolute top-1 right-1">
        <button @click="addModal = false" type="button" class="text-gray-400  transition hover:text-gray-900 text-sm p-1.5 ml-auto inline-flex items-center dark:hover:text-white">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>

      <!-- Form -->
      <form action="<?= site_url('user/create-account'); ?>" method="POST">
        <?= csrf_field() ?>
        <div class="flex space-x-5">
          <div>
            <!-- Product name -->
            <div class="mb-4">
              <label for="productName" class="block w-fit mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product Name</label>
              <input type="text" name="productName" id="productName" class="bg-gray-50 border border-gray-300 text-gray-500 placeholder-gray-300 text-sm rounded transition duration-300 focus:border-indigo-400 focus:ring-indigo-400 focus:outline-none block w-full px-2 py-1.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Product Name..." autofocus>
            </div>
            <!-- SKU & value -->
            <div class="flex justify-between mb-4 space-x-2">
              <div>
                <label for="sku" class="block w-fit mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">SKU</label>
                <input type="text" name="sku" id="sku" class="bg-gray-50 border border-gray-300 text-gray-500 placeholder-gray-300 text-sm rounded transition duration-300 focus:border-indigo-400 focus:ring-indigo-400 focus:outline-none block w-full px-2 py-1.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Product Name..." autofocus>
              </div>
              <div>
                <label for="value" class="block w-fit mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Value</label>
                <input type="text" name="value" id="value" class="bg-gray-50 border border-gray-300 text-gray-500 placeholder-gray-300 text-sm rounded transition duration-300 focus:border-indigo-400 focus:ring-indigo-400 focus:outline-none block w-full px-2 py-1.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Product Name..." autofocus>
              </div>
            </div>
            <!-- Stock -->
            <div class="flex justify-between mb-4 space-x-2">
              <div>
                <label for="stock" class="block w-fit mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Stock</label>
                <input type="text" name="stock" id="stock" class="bg-gray-50 border border-gray-300 text-gray-500 placeholder-gray-300 text-sm rounded transition duration-300 focus:border-indigo-400 focus:ring-indigo-400 focus:outline-none block w-full px-2 py-1.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Product Name..." autofocus>
              </div>
            </div>

            <!-- Description -->
            <label for="editor" class="block w-fit mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
            <textarea id="editor"></textarea>
          </div>

          <!-- Category -->
          <div class="flex-1">
            <label for="category" class="block w-fit mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Category</label>
            <select class="bg-gray-50 border border-gray-300 text-gray-500 placeholder-gray-300 text-sm rounded transition duration-300 focus:border-indigo-400 focus:ring-indigo-400 focus:outline-none block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" name="category" id="category">
              <option selected disabled class="text-gray-400">-- Choose --</option>
              <option value="1">Style & Fashion</option>
              <option value="2">Accessories</option>
              <option value="3">Sports</option>
              <option value="3">Electronics</option>
              <option value="3">Toys & Outdoors</option>
              <option value="3">Tools</option>
              <option value="3">Furnitures</option>
              <option value="3">Personal Care</option>
            </select>
          </div>

          <!-- Product image -->
          <div class="mb-4">
            <label for="file-upload" class="block w-fit mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Main Image</label>
            <div class="flex flex-col items-center justify-center text-xs space-y-2 border-2 border-dashed text-gray-300 border-gray-300 rounded-md w-60 h-60 transition hover:border-indigo-400">
              <svg class="h-12 w-12" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
              <div for="file-upload" class="cursor-pointer py-1 px-3 rounded-full font-medium text-white bg-indigo-600 transition hover:bg-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                <span class="">Upload a file</span>
                <input id="file-upload" name="file-upload" type="file" class="sr-only">
              </div>
              <p class="text-gray-400">or drag and drop</p>
            </div>
          </div>
        </div>

        <button class="inline-flex items-start justify-start text-sm font-medium leading-none text-white rounded-md shadow shadow-indigo-300 mt-6 px-6 py-3 bg-indigo-600 transition focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 focus:outline-none hover:shadow-none hover:bg-indigo-700">
          Save
        </button>
      </form>
    </div>
  </div>
</div>