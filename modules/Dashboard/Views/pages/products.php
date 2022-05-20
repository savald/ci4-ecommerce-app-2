<?= $this->extend('\Modules\Dashboard\Views\Main') ?>

<?= $this->section('content') ?>

<!-- Add Product Modal -->
<?= $this->include('Modules\Dashboard\Views\Layouts\_add-product-modal') ?>

<div x-data="dataTable()" x-init="
        initData()
        $watch('searchInput', value => {
          search(value)
        })" class="w-full">

  <!-- Show & Search Button -->
  <div class="flex justify-between space-x-2 mt-7 mb-4">
    <div class="flex space-x-1 items-center text-sm text-gray-500 p-1 px-2 w-32 bg-white rounded-lg shadow">
      <p>Show</p>
      <select x-model="view" @change="changeView()" class="bg-gray-100 py-0 rounded border-transparent w-full transition duration-100 focus:border-indigo-400 focus:ring-indigo-400">
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
      </select>
    </div>

    <!-- Search -->
    <div class="relative">
      <input x-model="searchInput" type="text" class="w-full pl-9 pr-4 py-2 text-sm text-gray-500 placeholder-gray-300 font-medium rounded-lg shadow border-transparent transition duration-300 focus:border-indigo-400 focus:ring-indigo-400" placeholder="Search...">

      <div class="absolute top-0 left-0 inline-flex items-center p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
          <circle cx="10" cy="10" r="7" />
          <line x1="21" y1="21" x2="15" y2="15" />
        </svg>
      </div>
    </div>
  </div>

  <!-- Table -->
  <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative h-96">
    <table>
      <thead class="sticky z-20 top-0 bg-white shadow">
        <th class="p-3">
          <label class="inline-flex justify-between items-center hover:bg-gray-200 p-1 rounded-lg cursor-pointer">
            <input type="checkbox" class="rounded border-gray-200 h-4 w-4 cursor-pointer text-indigo-400 focus:ring-indigo-300 focus:ring-offset-0">
          </label>
        </th>
        <template x-for="(heading, index) in headings" :key="index">
          <th :width="heading.width + '%'" class="p-3">
            <div class="flex space-x-2">
              <span x-text="heading.value" class="text-sm uppercase text-gray-900"></span>
              <div class="flex flex-col">
                <svg @click="sort('no', 'asc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="h-3 w-3 cursor-pointer text-gray-500 fill-current" x-bind:class="{'text-blue-500': sorted.field === 'no' && sorted.rule === 'asc'}">
                  <path d="M5 15l7-7 7 7"></path>
                </svg>

                <svg @click="sort('no', 'desc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="h-3 w-3 cursor-pointer text-gray-500 fill-current" x-bind:class="{'text-blue-500': sorted.field === 'no' && sorted.rule === 'desc'}">
                  <path d="M19 9l-7 7-7-7"></path>
                </svg>
              </div>
            </div>
          </th>
        </template>
      </thead>
      <tbody>
        <template x-for="(item, index) in items" :key="index">
          <tr x-show="checkView(index + 1)" class="hover:bg-gray-100 text-gray-500 text-xs">
            <td class="p-3">
              <label class="inline-flex justify-between items-center hover:bg-gray-200 p-1 rounded-lg cursor-pointer">
                <input type="checkbox" class="rounded border-gray-200 h-4 w-4 cursor-pointer text-indigo-400 focus:ring-indigo-300 focus:ring-offset-0">
              </label>
            </td>
            <td class="p-3">
              <span x-text="item.no"></span>
            </td>
            <td class="p-3">
              <span x-text="item.product"></span>
            </td>
            <td class="p-3">
              <span x-text="item.sku"></span>
            </td>
            <td class="p-3">
              <span x-text="item.category"></span>
            </td>
            <td class="p-3">
              <span x-text="item.description" class="text-ellipsis overflow-hidden "></span>
            </td>
            <td class="p-3">
              <span x-text="item.stock"></span>
            </td>
            <td class="p-3">
              <span x-text="item.value"></span>
            </td>
            <td class="p-3">
              <span x-text="item.date"></span>
            </td>
            <td class="p-3">
              <div x-data="{ action: false }" x-cloak @mouseover.outside="action = false" class="flex items-center justify-center relative text-gray-400">
                <button @mouseover="action = true" class="px-1 rounded transition hover:bg-white" role="button" aria-label="option">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                  </svg>
                </button>

                <!-- Button menus -->
                <div x-show="action" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="flex bg-white rounded shadow-lg overflow-hidden absolute z-30 top-5 right-0 mr-6">
                  <div class="flex flex-col items-center text-xxs space-y-1 p-3 cursor-pointer transition focus:outline-none  hover:bg-indigo-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <p>View</p>
                  </div>
                  <div class="flex flex-col items-center text-xxs space-y-1 p-3 cursor-pointer transition focus:outline-none  hover:bg-indigo-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                    </svg>
                    <p>Edit</p>
                  </div>
                  <div class="flex flex-col items-center text-xxs space-y-1 p-3 cursor-pointer transition focus:outline-none  hover:bg-indigo-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                    <p>Delete</p>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </template>
        <tr x-show="isEmpty()">
          <td colspan="10" class="text-center py-5 text-gray-500 text-sm">No matching records found.</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Pagination -->
  <div class="flex justify-center mt-5 text-xs text-gray-500 select-none sm:text-sm">
    <div class="hidden bg-white shadow rounded-full px-4 cursor-pointer sm:flex justify-center items-center" @click.prevent="changePage(1)">
      <span>First</span>
    </div>
    <div class="px-2 cursor-pointer" @click="changePage(currentPage - 1)">
      <div class="h-8 w-8 mr-1 flex justify-center items-center shadow rounded-full bg-white cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-6 h-6">
          <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
      </div>
    </div>
    <div class="flex h-8 font-medium shadow rounded-full bg-white">
      <template x-for="item in pages">
        <div @click="changePage(item)" class="w-8 flex justify-center items-center rounded-full px-2 cursor-pointer" x-bind:class="{ 'bg-indigo-400': currentPage === item }">
          <span class="" x-bind:class="{ 'text-white': currentPage === item }" x-text="item"></span>
        </div>
      </template>
    </div>
    <div class="px-2 cursor-pointer" @click="changePage(currentPage + 1)">
      <div class="h-8 w-8 ml-1 flex justify-center items-center shadow rounded-full bg-white cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right w-6 h-6">
          <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
      </div>
    </div>
    <div class="hidden bg-white shadow rounded-full px-4 cursor-pointer sm:flex justify-center items-center" @click.prevent="changePage(pagination.lastPage)">
      <span>Last</span>
    </div>
  </div>
</div>

<?= $this->endSection() ?>