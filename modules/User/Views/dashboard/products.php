<?= $this->extend('\Modules\User\Views\Main') ?>

<?= $this->section('content') ?>

<div class="mx-auto w-full h-full flex flex-col items-center justify-center">
  <div x-data="dataTable()" x-init="
        initData()
        $watch('searchInput', value => {
          search(value)
        })" class="bg-white p-5 shadow-md w-full flex flex-col">

    <!-- Button Show & Search -->
    <div class="flex justify-between items-center">
      <div class="flex space-x-2 items-center">
        <p>Show</p>
        <select x-model="view" @change="changeView()">
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="25">25</option>
          <option value="50">50</option>
          <option value="100">100</option>
        </select>
      </div>
      <div>
        <input x-model="searchInput" type="text" class="px-2 py-1 border rounded focus:outline-none" placeholder="Search...">
      </div>
    </div>

    <!-- Table -->
    <table class="mt-5">
      <thead class="border-b-2">
        <th>
          <div class="flex space-x-2">
            <span>
              #
            </span>
            <div class="flex flex-col">
              <svg @click="sort('name', 'asc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="h-3 w-3 cursor-pointer text-gray-500 fill-current" x-bind:class="{'text-blue-500': sorted.field === 'name' && sorted.rule === 'asc'}">
                <path d="M5 15l7-7 7 7"></path>
              </svg>
              <svg @click="sort('name', 'desc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="h-3 w-3 cursor-pointer text-gray-500 fill-current" x-bind:class="{'text-blue-500': sorted.field === 'name' && sorted.rule === 'desc'}">
                <path d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </div>
        </th>
        <th width="20%">
          <div class="flex space-x-2">
            <span>
              Product
            </span>
            <div class="flex flex-col">
              <svg @click="sort('name', 'asc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="h-3 w-3 cursor-pointer text-gray-500 fill-current" x-bind:class="{'text-blue-500': sorted.field === 'name' && sorted.rule === 'asc'}">
                <path d="M5 15l7-7 7 7"></path>
              </svg>
              <svg @click="sort('name', 'desc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="h-3 w-3 cursor-pointer text-gray-500 fill-current" x-bind:class="{'text-blue-500': sorted.field === 'name' && sorted.rule === 'desc'}">
                <path d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </div>
        </th>
        <th width="20%">
          <div class="flex space-x-2">
            <span>
              SKU
            </span>
            <div class="flex flex-col">
              <svg @click="sort('name', 'asc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="h-3 w-3 cursor-pointer text-gray-500 fill-current" x-bind:class="{'text-blue-500': sorted.field === 'name' && sorted.rule === 'asc'}">
                <path d="M5 15l7-7 7 7"></path>
              </svg>
              <svg @click="sort('name', 'desc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="h-3 w-3 cursor-pointer text-gray-500 fill-current" x-bind:class="{'text-blue-500': sorted.field === 'name' && sorted.rule === 'desc'}">
                <path d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </div>
        </th>
        <th width="20%">
          <div class="flex items-center space-x-2">
            <span class="">
              Category
            </span>
            <div class="flex flex-col">
              <svg @click="sort('job', 'asc')" fill="none" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'job' && sorted.rule === 'asc'}">
                <path d="M5 15l7-7 7 7"></path>
              </svg>
              <svg @click="sort('job', 'desc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'job' && sorted.rule === 'desc'}">
                <path d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </div>
        </th>
        <th width="30%">
          <div class="flex items-center space-x-2">
            <span class="">
              Description
            </span>
            <div class="flex flex-col">
              <svg @click="sort('email', 'asc')" fill="none" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'email' && sorted.rule === 'asc'}">
                <path d="M5 15l7-7 7 7"></path>
              </svg>
              <svg @click="sort('email', 'desc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'email' && sorted.rule === 'desc'}">
                <path d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </div>
        </th>
        <th width="10%">
          <div class="flex items-center space-x-2">
            <span>
              Stock
            </span>
            <div class="flex flex-col">
              <svg @click="sort('year', 'asc')" fill="none" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'year' && sorted.rule === 'asc'}">
                <path d="M5 15l7-7 7 7"></path>
              </svg>
              <svg @click="sort('year', 'desc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'year' && sorted.rule === 'desc'}">
                <path d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </div>
        </th>
        <th width="10%">
          <div class="flex items-center space-x-2">
            <span>
              Value
            </span>
            <div class="flex flex-col">
              <svg @click="sort('year', 'asc')" fill="none" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'year' && sorted.rule === 'asc'}">
                <path d="M5 15l7-7 7 7"></path>
              </svg>
              <svg @click="sort('year', 'desc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'year' && sorted.rule === 'desc'}">
                <path d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </div>
        </th>
        <th width="10%">
          <div class="flex items-center space-x-2">
            <span>
              Date
            </span>
            <div class="flex flex-col">
              <svg @click="sort('year', 'asc')" fill="none" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'year' && sorted.rule === 'asc'}">
                <path d="M5 15l7-7 7 7"></path>
              </svg>
              <svg @click="sort('year', 'desc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'year' && sorted.rule === 'desc'}">
                <path d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </div>
        </th>
        <th width="15%">
          <div class="flex items-center space-x-2">
            <span class="">
              Action
            </span>
            <div class="flex flex-col">
              <svg @click="sort('country', 'asc')" fill="none" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'country' && sorted.rule === 'asc'}">
                <path d="M5 15l7-7 7 7"></path>
              </svg>
              <svg @click="sort('country', 'desc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 h-3 w-3 cursor-pointer fill-current" x-bind:class="{'text-blue-500': sorted.field === 'country' && sorted.rule === 'desc'}">
                <path d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </div>
        </th>
      </thead>
      <tbody>
        <template x-for="(item, index) in items" :key="index">
          <tr x-show="checkView(index + 1)" class="hover:bg-gray-200 text-gray-900 text-xs">
            <td class="py-3">
              <span x-text="item.no"></span>
            </td>
            <td class="py-3">
              <span x-text="item.product"></span>
            </td>
            <td class="py-3">
              <span x-text="item.sku"></span>
            </td>
            <td class="py-3">
              <span x-text="item.category"></span>
            </td>
            <td class="py-3">
              <span x-text="item.description"></span>
            </td>
            <td class="py-3">
              <span x-text="item.stock"></span>
            </td>
            <td class="py-3">
              <span x-text="item.value"></span>
            </td>
            <td class="py-3">
              <span x-text="item.date"></span>
            </td>
            <td class="py-3">
              <span>Action</span>
            </td>
          </tr>
        </template>
        <tr x-show="isEmpty()">
          <td colspan="5" class="text-center py-3 text-gray-900 text-sm">No matching records found.</td>
        </tr>
      </tbody>
    </table>

    <!-- Pagination -->
    <div class="flex mt-5">
      <div class="border px-2 cursor-pointer" @click.prevent="changePage(1)">
        <span class="text-gray-700">First</span>
      </div>
      <div class="border px-2 cursor-pointer" @click="changePage(currentPage - 1)">
        <span class="text-gray-700">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
          </svg>
        </span>
      </div>
      <template x-for="item in pages">
        <div @click="changePage(item)" class="border px-2 cursor-pointer" x-bind:class="{ 'bg-gray-300': currentPage === item }">
          <span class="text-gray-700" x-text="item"></span>
        </div>
      </template>
      <div class="border px-2 cursor-pointer" @click="changePage(currentPage + 1)">
        <span class="text-gray-700">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
          </svg>
        </span>
      </div>
      <div class="border px-2 cursor-pointer" @click.prevent="changePage(pagination.lastPage)">
        <span class="text-gray-700">Last</span>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>