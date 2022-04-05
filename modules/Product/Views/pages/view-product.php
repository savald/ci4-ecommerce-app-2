<?= $this->extend('\Modules\Product\Views\Main') ?>

<?= $this->section('content') ?>

<section class="bg-white">
  <div class="viewport">

    <div class=" lg:grid lg:grid-cols-2 lg:gap-x-8">
      <!-- Product Image -->
      <div x-data="{ image: 'image1' }" class="flex gap-x-4 h-96 md:h-[28rem] lg:block ">
        <!-- Main Image -->
        <div class=" mb-4 w-full h-full rounded-md overflow-hidden">
          <img x-show="image === 'image1'" src="<?= base_url(); ?>/img/products/1.jpg" alt="" class="w-full h-full object-cover object-center" />
          <img x-show="image === 'image2'" src="<?= base_url(); ?>/img/products/2.jpg" alt="" class="w-full h-full object-cover object-center" />
          <img x-show="image === 'image3'" src="<?= base_url(); ?>/img/products/3.jpg" alt="" class="w-full h-full object-cover object-center" />
          <img x-show="image === 'image4'" src="<?= base_url(); ?>/img/products/4.jpg" alt="" class="w-full h-full object-cover object-center" />
        </div>

        <!-- Other Image -->
        <div class="hidden md:flex md:flex-col md:gap-2 lg:flex-row justify-between">
          <button @click.prevent="image = 'image1'" class="group w-32 h-32 border-2 rounded-md overflow-hidden cursor-pointer transition hover:border-indigo-600 md:w-32 md:h-32" :class="{'border-indigo-600' : image === 'image1'}">
            <img src="<?= base_url(); ?>/img/products/1.jpg" alt="" class="w-full h-full object-cover object-center transition group-hover:scale-105" />
          </button>
          <button @click.prevent="image = 'image2'" class="group w-32 h-32 border-2 rounded-md overflow-hidden cursor-pointer transition hover:border-indigo-600 md:w-32 md:h-32" :class="{'border-indigo-600' : image === 'image2'}">
            <img src="<?= base_url(); ?>/img/products/2.jpg" alt="" class="w-full h-full object-cover object-center transition group-hover:scale-105" />
          </button>
          <button @click.prevent="image = 'image3'" class="group w-32 h-32 border-2 rounded-md overflow-hidden cursor-pointer transition hover:border-indigo-600 md:w-32 md:h-32" :class="{'border-indigo-600' : image === 'image3'}">
            <img src="<?= base_url(); ?>/img/products/3.jpg" alt="" class="w-full h-full object-cover object-center transition group-hover:scale-105" />
          </button>
          <button @click.prevent="image = 'image4'" class="group w-32 h-32 border-2 rounded-md overflow-hidden cursor-pointer transition hover:border-indigo-600 md:w-32 md:h-32" :class="{'border-indigo-600' : image === 'image4'}">
            <img src="<?= base_url(); ?>/img/products/4.jpg" alt="" class="w-full h-full object-cover object-center transition group-hover:scale-105" />
          </button>
        </div>

        <hr class="hidden lg:block my-8" />
      </div>

      <!-- Product Detail -->
      <div class="mt-5 lg:mt-0">
        <h1 class="text-2xl text-slate-800 font-bold lg:text-3xl">Zip Tote Basket</h1>
        <h2 class="text-xl text-slate-800 my-3">$140</h2>
        <div class="text-sm text-indigo-600 mb-4">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <div class="text-sm text-slate-700 lg:text-base">
          The Basic Tee 6-Pack allows you to fully express your vibrant personality with three grayscale options. Feeling adventurous? Put on a heather gray tee. Want to be a trendsetter? Try our exclusive colorway: "Black". Need to add
          an extra pop of color to your outfit? Our white tee has you covered.
        </div>

        <!-- color -->
        <div class="flex space-x-4 my-5">
          <h5 class="text-sm w-14 text-slate-700 lg:text-base">Color</h5>
          <div class="flex space-x-3">
            <button class="rounded-full h-8 w-8 bg-slate-600 cursor-pointer focus:ring-2 focus:ring-offset-2 focus:ring-slate-800"></button>
            <button class="rounded-full h-8 w-8 bg-blue-600 cursor-pointer focus:ring-2 focus:ring-offset-2 focus:ring-slate-800"></button>
            <button class="rounded-full h-8 w-8 bg-purple-600 cursor-pointer focus:ring-2 focus:ring-offset-2 focus:ring-slate-800"></button>
          </div>
        </div>

        <!-- Size -->
        <div class="flex space-x-4">
          <h5 class="text-sm w-14 text-slate-700 lg:text-base">Size</h5>
          <div class="flex space-x-3">
            <button class="w-9 h-9 p-2 text-xs sm:w-full sm:h-11 sm:text-sm sm:px-5 font-medium text-slate-800 transition-colors duration-200 rounded-md block border border-slate-300 focus:bg-indigo-700 focus:text-white focus:outline-none hover:bg-indigo-500 hover:text-white">
              XL
            </button>
            <button class="w-9 h-9 p-2 text-xs sm:w-full sm:h-11 sm:text-sm sm:px-5 font-medium text-slate-800 transition-colors duration-200 rounded-md block border border-slate-300 focus:bg-indigo-700 focus:text-white focus:outline-none hover:bg-indigo-500 hover:text-white">
              L
            </button>
            <button class="w-9 h-9 p-2 text-xs sm:w-full sm:h-11 sm:text-sm sm:px-5 font-medium text-slate-800 transition-colors duration-200 rounded-md block border border-slate-300 focus:bg-indigo-700 focus:text-white focus:outline-none hover:bg-indigo-500 hover:text-white">
              M
            </button>
            <button class="w-9 h-9 p-2 text-xs sm:w-full sm:h-11 sm:text-sm sm:px-5 font-medium text-slate-800 transition-colors duration-200 rounded-md block border border-slate-300 focus:bg-indigo-700 focus:text-white focus:outline-none hover:bg-indigo-500 hover:text-white">
              S
            </button>
          </div>
        </div>

        <!-- Button -->
        <div class="flex space-x-5 basis-1/2 mt-5">
          <button class="w-full lg:w-1/2 bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none transition-colors duration-100">
            Add to bag
          </button>
          <button class="text-xl text-slate-500">
            <i class="fa-regular fa-heart"></i>
          </button>
        </div>

        <!-- Features -->
        <div class="py-5 mt-7 border-t">
          <h3 class="mb-3 font-semibold text-indigo-700">Features</h3>
          <ul class="list-disc list-inside text-slate-500">
            <li>Multiple strap configurations</li>
            <li>Spacious interior with top zip</li>
            <li>Leather handle and tabs</li>
            <li>Interior dividers</li>
            <li>Stainless strap loops</li>
            <li>Double stitched construction</li>
            <li>Water-resistant</li>
          </ul>
        </div>

        <!-- Social Media -->
        <div class="py-5 flex space-x-5 border-t">
          <div class="mb-5 font-semibold text-indigo-700">Share</div>
          <div class="flex space-x-6 text-2xl text-slate-500">
            <a href="#" class="transition hover:text-indigo-500"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="transition hover:text-indigo-500"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="transition hover:text-indigo-500"><i class="fa-brands fa-twitter"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Reviews & FAQ -->
    <div class="lg:w-1/2">
      <div class="" x-data="{ tab: 'tab1' }">
        <!-- Tabs -->
        <ul class="flex">
          <li class="">
            <a href="#" class="inline-block py-3 px-6 border-x-0 border-t-0 border-b-2 border-transparent font-semibold hover:bg-gray-100" :class="{'text-indigo-600 border-indigo-700  bg-white' : tab === 'tab1'}" @click.prevent=" tab = 'tab1'">Customer Reviews</a>
          </li>
          <li class="">
            <a href="#" class="inline-block py-3 px-6 border-x-0 border-t-0 border-b-2 border-transparent font-semibold hover:bg-gray-100" :class="{'text-indigo-600 border-indigo-700  bg-white' : tab === 'tab2'}" @click.prevent=" tab = 'tab2'">FAQ</a>
          </li>
        </ul>

        <!-- Content -->
        <div class="">
          <div x-show="tab === 'tab1'" class="flex space-x-3 py-4 mt-7 bg-white">
            <div class="w-10 h-10 border rounded-full overflow-hidden">
              <img src="<?= base_url(); ?>/img/users/1.png" alt="" class="object-cover object-center" />
            </div>
            <div class="w-full">
              <p class="font-semibold text-sm text-slate-800">Kim Sejeong</p>
              <p class="text-sm text-slate-600">July 16, 2022</p>
              <div class="text-sm text-yellow-500 my-4">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <p class="text-sm text-slate-600">
                I have been fighting with acne for almost five years. I have tried many acne products and even went to dermatologist. But it seems like my acnes just get worse. Until I find tamanu oil, the magic oil.
              </p>
              <hr class="my-7" />
            </div>
          </div>
          <div x-show="tab === 'tab2'" class="py-4 mt-7 bg-white">
            <h3 class="font-bold mb-4 text-slate-700">Zwift Shop FAQ</h3>
            <div class="text-sm">
              <p class="font-semibold -indent-6 ml-6 text-slate-700">
                <span>Q:&nbsp;</span>
                When will my order ship?
              </p>
              <p class="-indent-6 ml-6 text-slate-600 mb-4">
                <span>A:&nbsp;</span>
                Typically, orders placed before 12 pm EST—Monday through Friday (excluding holidays) will ship the same day. If your order is placed after 12 pm EST on Friday, it will be processed the following Monday.
              </p>
              <p class="font-semibold -indent-6 ml-6 text-slate-700">
                <span>Q:&nbsp;</span>
                How do I track my order?
              </p>
              <p class="-indent-6 ml-6 text-slate-600 mb-4">
                <span>A:&nbsp;</span>
                To track an item, go to zwift.com/shop/order-status-form and enter your Order ID and the email address you used to place the order. If you can’t find this info—or want to learn more about this process—check out this
                article.
              </p>
              <p class="font-semibold -indent-6 ml-6 text-slate-700">
                <span>Q:&nbsp;</span>
                What is the return policy for items purchased on the Zwift Shop?
              </p>
              <p class="-indent-6 ml-6 text-slate-600 mb-4">
                <span>A:&nbsp;</span>
                You can return most purchases up to 30 days from the date you receive them. Please keep in mind that if you're returning a trainer or smart bike—a return shipping fee will be deducted from your refund, based on your
                region. To find out more, check out this article.
              </p>
              <p class="font-semibold -indent-6 ml-6 text-slate-700">
                <span>Q:&nbsp;</span>
                How do I return an item?
              </p>
              <p class="-indent-6 ml-6 text-slate-600 mb-4">
                <span>A:&nbsp;</span>
                For most items purchased through the Zwift Shop, you can use our self-service return portal based on your region, check out this article for more info.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?= $this->endSection() ?>