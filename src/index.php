<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Wheelz</title>
    <meta name="viewport" content="width=device-width, initial-scale='1.0'" />
    <link rel="stylesheet" href="./output.css" />
    <link
      rel="shortcut icon"
      href="./asset/WHEELZ FULL.png"
      type="image/x-icon"
    />
  </head>
  <body class="">
    <!-- Header -->
    <!--Header-->
    <?php include("layout/navbar.php") ?>
    <!--Header End-->

    <!-- End Header -->

    <!--Home Section-->
    <section class="flex flex-wrap mx-auto lg:mb-10">
      <div class="w-1/2 pt-20 ps-12">
        <img class="ms-8 w-[600px]" src="asset/WHEELZ%20FULL.png" alt="" />
        <p class="font-bold text-5xl ps-24 text-red-500">
          Wherever You Go, <span class="text-secondary">Go With Us!</span>
        </p>

        <?php if (!isset($_SESSION['user'])) : ?>
        <button
          class="ms-24 mt-8 py-4 px-16 bg-btncol font-bold text-white tracking-wider rounded-2xl hover:opacity-75"
        >
          DAFTAR
        </button>

        <?php else : ?>
        <button
          class="ms-24 mt-8 py-4 px-16 bg-btncol font-bold text-white tracking-wider rounded-2xl hover:opacity-75"
        >
          <a href="car.php">Get Started</a>
        </button>
        <?php endif; ?>
      </div>
      <div class="w-1/2 pt-16">
        <img class="w-1400" src="./asset/Luxury-Car-PNG-HD%201.png" alt="" />
      </div>
    </section>

    <section class="flex justify-center gap-8 lg:px-8">
      <div
        class="flex flex-col bg-card border shadow-sm rounded-xl w-[580px] dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70"
      >
        <div class="p-4 md:p-5">
          <h3 class="text-3xl font-bold text-white dark:text-white">
            Syarat & Ketentuan
          </h3>
          <p class="mt-2 text-slate-400 text-xl dark:text-neutral-400">
            Apa yang harus diperlukan dan dilakukan untuk menyewa mobil kami
          </p>
          <button
            class="2xl:mt-3 inline-flex items-center bg-secondary gap-x-1 text-sm font-semibold rounded-full border border-transparent text-white py-2 px-3 lg:mt-10 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400"
          >
            Read More
            <svg
              class="flex-shrink-0 size-4"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="m9 18 6-6-6-6"></path>
            </svg>
          </button>
        </div>
      </div>
      <div
        class="flex flex-col bg-card border shadow-sm rounded-xl w-[580px] dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70"
      >
        <div class="p-4 md:p-5">
          <h3 class="text-3xl font-bold text-white dark:text-white">Lokasi</h3>
          <p class="mt-2 text-slate-400 text-xl dark:text-neutral-400">
            RentCar menjangkau lokasi pada satu kota
          </p>
          <button
            class="2xl:mt-10 inline-flex items-center bg-secondary gap-x-1 text-sm font-semibold rounded-full border border-transparent text-white py-2 px-3 lg:mt-10 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400"
          >
            <a href="syarat.html">Read More</a>
            <svg
              class="flex-shrink-0 size-4"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="m9 18 6-6-6-6"></path>
            </svg>
          </button>
        </div>
      </div>
      <div
        class="flex flex-col bg-card border shadow-sm rounded-xl w-[580px] dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70"
      >
        <div class="p-4 md:p-5">
          <h3 class="text-3xl font-bold text-white dark:text-white">
            Informasi & Booking Kendaraan
          </h3>
          <p class="mt-2 text-slate-400 text-xl dark:text-neutral-400">
            Booking kendaraan anda segera
          </p>
          <button
            class="2xl:mt-10 inline-flex items-center bg-secondary gap-x-1 text-sm font-semibold rounded-full border border-transparent text-white py-2 px-3 lg:mt-8 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400"
          >
            Read More
            <svg
              class="flex-shrink-0 size-4"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="m9 18 6-6-6-6"></path>
            </svg>
          </button>
        </div>
      </div>
    </section>
    <!--End Home Section-->

    <!--About Section-->
    <section id="about" class="mt-10">
      <h2 class="text-3xl font-bold text-center">About</h2>
      <div class="flex mt-4 max-w-[90%] mx-auto lg:mb-10">
        <div class="w-1/2 pt-16">
          <h3 class="font-semibold text-2xl">Kenali Kami Lebih Dekat</h3>
          <p class="text-xl mt-5 leading-normal">
            Wheelz adalah perusahaan rental mobil yang berkomitmen untuk
            menyediakan layanan transportasi berkualitas tinggi bagi pelanggan
            kami. Dengan pengalaman bertahun-tahun di industri ini, RentCar
            telah menjadi pilihan utama bagi individu dan perusahaan yang
            membutuhkan kendaraan untuk keperluan pribadi, bisnis, atau liburan.
            Kami menawarkan beragam pilihan kendaraan mulai dari sedan, SUV,
            hingga van, yang semuanya terawat dengan baik dan siap mengantar
            Anda dalam perjalanan Anda. Kualitas armada mobil kami menjadi
            prioritas utama, sehingga Anda dapat mengandalkan kenyamanan dan
            keamanan saat menggunakan layanan kami.
          </p>
        </div>

        <div class="w-1/2 flex justify-center">
          <img
            class="2xl:w-[40rem] 2xl:h-[25rem] lg:w-[30rem] lg:h-[20rem] lg:mt-24 2xl:mt-0"
            src="./asset/Luxury-Car-Free-PNG-Image%201.png"
            alt=""
          />
        </div>
      </div>

      <div
        class="flex flex-col bg-white border shadow-sm max-w-[95%] mx-auto mb-20"
      >
        <div>
          <nav class="flex divide-x-2 divide-fourth">
            <button
              class="group relative min-w-0 flex-1 bg-third py-8 px-4 font-bold rounded-ss-xl text-sm text-secondary text-center overflow-hidden hover:bg-gray-50"
            >
              Statistics
            </button>
            <button
              class="group relative min-w-0 flex-1 bg-third py-8 px-4 text-gray-900 text-sm font-bold text-center overflow-hidden hover:bg-gray-50"
            >
              Services
            </button>
            <button
              class="group relative min-w-0 flex-1 bg-third py-8 px-4 text-gray-900 rounded-tr-xl text-sm font-bold text-center overflow-hidden hover:bg-gray-50 focus:z-10 dark:bg-neutral-800 dark:border-blue-500 dark:text-neutral-300"
            >
              FAQ
            </button>
          </nav>
        </div>

        <div class="p-4 text-center md:py-7 md:px-5">
          <h3 class="text-lg font-bold text-gray-800 dark:text-white">
            Card title
          </h3>
          <p class="mt-2 text-gray-500 dark:text-neutral-400">
            With supporting text below as a natural lead-in to additional
            content.
          </p>
          <a
            class="mt-3 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
            href="#"
          >
            Go somewhere
          </a>
        </div>
      </div>

      <section class="container mx-auto m-20" id="car">
        <h1 class="text-center font-bold text-3xl mb-20">Best Seller</h1>
        <!-- Slider -->
        <div
          data-hs-carousel='{
    "loadingClasses": "opacity-0",
    "isAutoPlay": true
  }'
          class="relative"
        >
          <div
            class="hs-carousel relative overflow-hidden w-full min-h-96 rounded-lg"
          >
            <div
              class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0"
            >
              <div class="hs-carousel-slide">
                <div class="flex justify-center h-full p-6 dark:bg-neutral-900">
                  <img
                    src="asset/Download%20Car%20Png%20Hd%20HQ%20PNG%20Image%20_%20FreePNGImg%201.png"
                    alt=""
                  />
                </div>
              </div>
              <div class="hs-carousel-slide">
                <div class="flex justify-center h-full p-6 dark:bg-neutral-800">
                  <img
                    src="asset/Download%20Car%20Png%20Hd%20HQ%20PNG%20Image%20_%20FreePNGImg%201.png"
                    alt=""
                  />
                </div>
              </div>
              <div class="hs-carousel-slide">
                <div class="flex justify-center h-full p-6 dark:bg-neutral-700">
                  <img
                    src="asset/Download%20Car%20Png%20Hd%20HQ%20PNG%20Image%20_%20FreePNGImg%201.png"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>

          <div
            class="hs-carousel-pagination flex justify-center absolute bottom-5 start-0 end-0 space-x-2"
          >
            <span
              class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500"
            ></span>
            <span
              class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500"
            ></span>
            <span
              class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500"
            ></span>
          </div>
        </div>
        <!-- End Slider -->
      </section>

      <!--    Card-->
      <section class="lg:px-12">
        <div class="flex gap-10 justify-center">
          <div
            class="flex flex-col bg-primary border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70"
          >
            <div class="p-4 md:p-7">
              <div class="w-full">
                <img
                  class="mx-auto"
                  src="./asset/kindpng_133215%201.png"
                  alt=""
                />
              </div>
              <h2 class="font-semibold text-2xl text-white mt-5">Terios</h2>
              <div class="flex mt-1">
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
              </div>

              <div class="mt-3">
                <span class="py-1 px-6 bg-rate rounded-full">5.0</span>
              </div>

              <div class="flex justify-between mt-8">
                <h3 class="text-white text-2xl font-bold">$ 599</h3>
                <button
                  class="text-white font-semibold px-6 bg-secondary rounded-full"
                >
                  Show
                </button>
              </div>
            </div>
          </div>
          <div
            class="flex flex-col bg-primary border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70"
          >
            <div class="p-4 md:p-7">
              <div class="w-full">
                <img
                  class="mx-auto"
                  src="./asset/kindpng_133215%201.png"
                  alt=""
                />
              </div>

              <h2 class="font-semibold text-2xl text-white mt-5">Terios</h2>
              <div class="flex mt-1">
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
              </div>

              <div class="mt-3">
                <span class="py-1 px-6 bg-rate rounded-full">5.0</span>
              </div>

              <div class="flex justify-between mt-8">
                <h3 class="text-white text-2xl font-bold">$ 599</h3>
                <button
                  class="text-white font-semibold px-6 bg-secondary rounded-full"
                >
                  Show
                </button>
              </div>
            </div>
          </div>
          <div
            class="flex flex-col bg-primary border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70"
          >
            <div class="p-4 md:p-7">
              <div class="w-full">
                <img
                  class="mx-auto"
                  src="./asset/kindpng_133215%201.png"
                  alt=""
                />
              </div>

              <h2 class="font-semibold text-2xl text-white mt-5">Terios</h2>
              <div class="flex mt-1">
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
              </div>

              <div class="mt-3">
                <span class="py-1 px-6 bg-rate rounded-full">5.0</span>
              </div>

              <div class="flex justify-between mt-8">
                <h3 class="text-white text-2xl font-bold">$ 599</h3>
                <button
                  class="text-white font-semibold px-6 bg-secondary rounded-full"
                >
                  Show
                </button>
              </div>
            </div>
          </div>
          <div
            class="flex flex-col bg-primary border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70"
          >
            <div class="p-4 md:p-7">
              <div class="w-full">
                <img
                  class="mx-auto"
                  src="./asset/kindpng_133215%201.png"
                  alt=""
                />
              </div>

              <h2 class="font-semibold text-2xl text-white mt-5">Terios</h2>
              <div class="flex mt-1">
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
              </div>

              <div class="mt-3">
                <span class="py-1 px-6 bg-rate rounded-full">5.0</span>
              </div>

              <div class="flex justify-between mt-8">
                <h3 class="text-white text-2xl font-bold">$ 599</h3>
                <button
                  class="text-white font-semibold px-6 bg-secondary rounded-full"
                >
                  Show
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--    End Card-->
    </section>

    <!--contact us-->
    <section id="contact" class="container mx-auto" id="">
      <h1 class="text-center mt-14 text-3xl font-bold">Contact Us</h1>
      <div class="flex justify-between">
        <div class="w-1/2">
          <div class="flex ms-28">
            <div class="max-w-sm mt-10">
              <label
                for="input-contact"
                class="block font-semibold text-lg mb-2 ms-4 dark:text-white"
                >Our Contact</label
              >
              <input
                type="text"
                id="input-contact"
                value="+62858 - 3889 - 2275"
                readonly
                class="py-3 px-4 bg-input block w-full border-gray-200 font-semibold text-center rounded-full text-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                placeholder="you@site.com"
              />

              <label
                for="input-email"
                class="block font-semibold text-lg mt-8 mb-2 ms-4 dark:text-white"
                >Our Email</label
              >
              <input
                type="email"
                id="input-email"
                value="wheelz1@gmail.com"
                readonly
                class="py-3 px-4 bg-input block w-full border-gray-200 font-semibold text-center rounded-full text-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                placeholder="you@site.com"
              />
            </div>
          </div>

          <div class="flex justify-center ms-28 mt-14">
            <div class="flex flex-col">
              <h3 class="mt-14 text-xl font-semibold text-center">
                Or Fast To Get More About Us
              </h3>
              <button
                class="mt-4 px-4 py-1 w-80 flex text-center items-center gap-x-2 text-lg font-semibold rounded-lg border border-transparent bg-input text-black hover:bg-blue-700"
              >
                <span class="me-9"><img src="./asset/wa.svg" alt="" /></span>
                Click Here !
              </button>
            </div>
          </div>
        </div>

        <div class="w-1/2">
          <div class="flex justify-center">
            <img src="./asset/OIP%201.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!--End contact us-->

    <!-- ========== FOOTER ========== -->
    <footer class="mt-16 w-full grid mx-auto py-10 px-4 bg-primary mb-20">
      <!-- Grid -->
      <div class="grid grid-cols-4 mb-10 mx-auto lg:gap-32 2xl:gap-80">
        <!-- End Col -->

        <div>
          <h4
            class="text-lg font-semibold text-white uppercase dark:text-neutral-100"
          >
            Company
          </h4>

          <div class="mt-3 grid space-y-3 text-sm">
            <p>
              <a
                class="inline-flex text-lg gap-x-2 text-white hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                href="#"
                >About</a
              >
            </p>
            <p>
              <a
                class="inline-flex text-lg gap-x-2 text-white hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                href="#"
                >Career</a
              >
            </p>
            <p>
              <a
                class="inline-flex text-lg gap-x-2 text-white hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                href="#"
                >Brand Center</a
              >
            </p>
            <p>
              <a
                class="inline-flex text-lg gap-x-2 text-white hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                href="#"
                >Blog</a
              >
            </p>
          </div>
        </div>
        <!-- End Col -->

        <div>
          <h4
            class="text-lg font-semibold text-white uppercase dark:text-neutral-100"
          >
            Help Center
          </h4>

          <div class="mt-3 grid space-y-3 text-sm">
            <p>
              <a
                class="inline-flex gap-x-2 text-lg text-white hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                href="#"
                >Discord Server</a
              >
            </p>
            <p>
              <a
                class="inline-flex gap-x-2 text-lg text-white hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                href="#"
                >Twitter</a
              >
            </p>
            <p>
              <a
                class="inline-flex gap-x-2 text-lg text-white hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                href="#"
                >Facebook</a
              >
            </p>
            <p>
              <a
                class="inline-flex gap-x-2 text-lg text-white hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                href="#"
                >Contact Us</a
              >
            </p>
          </div>
        </div>
        <!-- End Col -->

        <div>
          <h4 class="text-lg font-semibold text-white dark:text-neutral-100">
            Legal
          </h4>

          <div class="mt-3 grid space-y-3 text-sm">
            <p>
              <a
                class="inline-flex text-lg gap-x-2 text-white hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                href="#"
                >Privacy Police</a
              >
            </p>
            <p>
              <a
                class="inline-flex gap-x-2 text-lg text-white hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                href="#"
                >Licensing</a
              >
            </p>
            <p>
              <a
                class="inline-flex gap-x-2 text-lg text-white hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                href="#"
                >Terms & Conditions</a
              >
            </p>
          </div>
        </div>
        <!-- End Col -->

        <div>
          <h4
            class="text-lg font-semibold text-white uppercase dark:text-neutral-100"
          >
            Download
          </h4>

          <div class="mt-3 grid space-y-3 text-sm">
            <p>
              <a
                class="inline-flex gap-x-2 text-lg text-white hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                href="#"
                >IOS</a
              >
            </p>
            <p>
              <a
                class="inline-flex gap-x-2 text-lg text-white hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                href="#"
                >Android</a
              >
            </p>
            <p>
              <a
                class="inline-flex gap-x-2 text-lg text-white hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                href="#"
                >Windows</a
              >
            </p>
            <p>
              <a
                class="inline-flex gap-x-2 text-lg text-white hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200"
                href="#"
                >MacOS</a
              >
            </p>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Grid -->
    </footer>
    <!-- ========== END FOOTER ========== -->

    <script src="./../node_modules/preline/dist/preline.js"></script>
  </body>
</html>
