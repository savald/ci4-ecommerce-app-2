<?= $this->extend('\Modules\Dashboard\Views\Main') ?>

<?= $this->section('content') ?>

<div class="bg-white mt-7 px-5 py-6 rounded-lg shadow">
  <form action="<?= site_url('dashboard/add-product'); ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <div class="flex space-x-5">
      <div>
        <!-- Product name -->
        <div class="mb-4">
          <label for="product_name" class="block w-fit mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
          <input type="text" name="product_name" id="product_name" class="bg-gray-50 border border-gray-300 text-gray-500 placeholder-gray-300 text-sm rounded transition duration-300 focus:border-indigo-400 focus:ring-indigo-400 focus:outline-none block w-full px-2 py-1.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Product Name..." autofocus>
        </div>
        <!-- SKU & Price -->
        <div class="flex justify-between mb-4 space-x-2">
          <div>
            <label for="sku" class="block w-fit mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">SKU</label>
            <input type="text" name="sku" id="sku" class="bg-gray-50 border border-gray-300 text-gray-500 placeholder-gray-300 text-sm rounded transition duration-300 focus:border-indigo-400 focus:ring-indigo-400 focus:outline-none block w-full px-2 py-1.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Product Name..." autofocus>
          </div>
          <div>
            <label for="price" class="block w-fit mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Price</label>
            <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-500 placeholder-gray-300 text-sm rounded transition duration-300 focus:border-indigo-400 focus:ring-indigo-400 focus:outline-none block w-full px-2 py-1.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Product Name..." autofocus>
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
        <textarea id="editor" name="description" hidden></textarea>
      </div>

      <!-- Category -->
      <div x-data="getCategories()">
        <div class="mb-4">
          <label for="category" class="block w-fit mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Category</label>
          <select x-model="selectedCategory" class="bg-gray-50 py-1.5 border border-gray-300 text-gray-500 placeholder-gray-300 text-sm rounded transition duration-300 focus:border-indigo-400 focus:ring-indigo-400 focus:outline-none w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" name="category" id="category">
            <option selected class="text-gray-400">-- Choose --</option>
            <template x-for="(category, index) in parentCategories" :key="index">
              <option :value="category" x-text="category"></option>
            </template>
          </select>


        </div>

        <!-- Subcategory -->
        <div class="mb-4">
          <label for="subcategory" class="block w-fit mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subcategory</label>
          <select multiple class="bg-gray-50 py-1.5 border border-gray-300 text-gray-500 placeholder-gray-300 text-sm rounded transition duration-300 focus:border-indigo-400 focus:ring-indigo-400 focus:outline-none w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" name="subcategory" id="subcategory">
            <option disabled selected class="text-gray-400">-- Choose --</option>
            <template x-for="subcategory in subcategories[selectedCategory] || []" :key="index">
              <option :value="subcategory" x-text="Object.keys(subcategory)"></option>
            </template>
          </select>
        </div>

        <!-- Gender -->
        <div class="mb-4">
          <label for="gender" class="block w-fit mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gender</label>
          <select disabled class="bg-gray-50 py-1.5 border border-gray-300 text-gray-500 placeholder-gray-300 text-sm rounded transition duration-300 focus:border-indigo-400 focus:ring-indigo-400 focus:outline-none w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" name="gender" id="gender">
            <option disabled selected class="text-gray-400">-- Choose --</option>
            <option value="men">Men</option>
            <option value="women">Women</option>
            <option value="kids">Kids</option>
          </select>
        </div>
      </div>

      <!-- Product image -->
      <div class="mb-4">
        <label for="file-upload" class="block w-fit mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Main Image</label>
        <div class="flex flex-col items-center justify-center text-xs space-y-2 border-2 border-dashed text-gray-300 border-gray-300 rounded-md w-60 h-60 transition hover:border-indigo-400">
          <svg class="h-12 w-12" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
          <div for="file-upload" class="cursor-pointer py-1 px-3 rounded-full font-medium text-white bg-indigo-600 transition hover:bg-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500" onclick="upload()">
            <span class="">Upload a file</span>
            <input id="file-upload" name="main_image" type="file" class="sr-only">
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

<?= $this->endSection() ?>