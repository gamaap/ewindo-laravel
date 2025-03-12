<x-users.layout>
  {{-- MAIN TOP CONTENT --}}
  <x-users.panel color="gray">
    <x-users.section>
      <section class="flex flex-col lg:flex-row items-center gap-8">
        <div class="lg:w-2/5 text-center lg:text-left">
          <h1
            class="text-balance text-4xl/12 font-semibold tracking-tight text-gold sm:text-6xl lg:text-4xl uppercase"
          >
            We Produce Any Cables & Wires that Deliver Electricity
          </h1>
          <p class="mt-8 text-base text-gray-700 leading-7 text-justify">
            PT EWINDO is a joint venture between Japan and Indonesia, established
            on May 10, 1974. Initially focused on producing Enamel Wire and
            Polyvinyl Formal Wire, we have rapidly expanded our capabilities to
            manufacture a wide range of products, including magnet wire, electric
            and automotive cables, power supply cords, and wiring harnesses.
          </p>
          <div class="mt-10 flex items-center gap-x-6">
            <a href="/company" class="text-sm/6 font-semibold text-gray-900"
              >See more <span aria-hidden="true">→</span></a
            >
          </div>
        </div>
    
        <div class="lg:w-3/5 w-full">
          <div class="relative rounded-2xl overflow-hidden col-span-3">
            <div class="w-full h-[400px]">
              <video
                class="absolute top-0 left-0 w-full h-[400px] object-cover"
                autoplay
                muted
                loop
              >
                <source src="{{ asset('storage/video/ewindo.mp4') }}" type="video/mp4" />
              </video>
            </div>
          </div>
        </div>
      </section>
    </x-users.section>
  </x-users.panel>

  {{-- SECOND MAIN CONTENT --}}
  <x-users.panel>
    <x-users.section>
      <section
        class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center"
      >
        <div class="relative rounded-2xl overflow-hidden shadow-lg">
          <div class="swiper swiper-plant">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img
                  src="{{ asset('storage/images/main/plant1.jpg') }}"
                  alt="Image 1"
                  class="object-cover w-full h-full rounded-lg shadow-lg"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="{{ asset('storage/images/main/plant2.png') }}"
                  alt="Image 1"
                  class="object-fill w-full h-full rounded-lg shadow-lg"
                />
              </div>
            </div>
            <div class="swiper-pagination swiper-pagination-plant"></div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev swiper-button-prev-plant"></div>
            <div class="swiper-button-next swiper-button-next-plant"></div>
          </div>
        </div>
    
        <div class="flex flex-col justify-center lg:justify-start">
          <p class="mt-2 text-base text-gray-700 leading-7 text-justify">
            We are proud to have a team of over 2,800 dedicated employees working
            across two plants:
          </p>
          <p class="mt-8 text-base text-gray-700 leading-7 text-justify">
            Plant1<br />Located at Jalan Cimuncang No. 68 in Bandung, specializes
            in producing magnet wire, a variety of cables (including electronic,
            automotive, and UL/c-UL), and power supply cords on a 2.4-hectare
            site.
          </p>
          <p class="mt-8 text-base text-gray-700 leading-7 text-justify">
            Plant 2<br />Situated on a 2.5-hectare plot at Jalan Rancaekek KM 24.5
            within the Dwipapuri Industrial Estate, focuses on wiring harnesses
            for both electronic and automotive applications.
          </p>
          <p class="mt-8 text-base text-gray-700 leading-7 text-justify">
            At PT EWINDO, we are committed to delivering high-quality products,
            supported by skilled personnel and reliable machinery. We invest
            significantly in employee training, as we believe that a knowledgeable
            and competent workforce is essential for enhancing productivity and
            improving product quality.
          </p>
        </div>
      </section>
    </x-users.section>
  </x-users.panel>

  {{-- VISION AND MISSION --}}
  <x-users.panel color="gray">
    <x-users.section>
      <x-users.heading>
        Vision and Mission
      </x-users.heading>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-12">
        <div
          class="bg-white p-8 lg:p-12 dark:text-gray-800 rounded-lg"
        >
          <h2
            class="text-2xl lg:text-3xl font-bold mb-4 lg:mb-6 text-center lg:text-center"
          >
            Our <br /><span
              class="text-2xl lg:text-3xl font-bold text-god mb-4 lg:mb-6 text-center lg:text-center"
              >Vision</span
            >
          </h2>
          <p class="text-base text-gray-700 leading-7 text-center lg:text-center">
            To be a leading and distinguished company in Magnet Wire, Electric &
            Automotive Cable, Power Supply Cord, and Wiring Harness Industry in
            Indonesia with international standard.
          </p>
        </div>
        <div
          class="bg-white p-8 lg:p-12 dark:text-gray-800 rounded-lg"
        >
          <h2
            class="text-2xl lg:text-3xl font-bold mb-4 lg:mb-6 text-center lg:text-center"
          >
            Our <br /><span
              class="text-2xl lg:text-3xl font-bold text-god mb-4 lg:mb-6 text-center lg:text-center"
              >Mission</span
            >
          </h2>
          <p class="text-base text-gray-700 leading-7 text-center lg:text-center">
            At PT. Ewindo, we are committed to guaranteeing the satisfaction of
            our customers, employees, and the public by delivering products that
            prioritize
            <span class="font-semibold"
              >quality, cost, delivery, safety, moral integrity, and environmental
              responsibility.</span
            >
          </p>
        </div>
      </div>
    </x-users.section>
  </x-users.panel>

  {{-- BOARD OF DIRECTOR --}}
  <x-users.panel>
    <x-users.section>
      <x-users.heading>
        Board of Director
      </x-users.heading>
      <div class="flex justify-center mt-10 space-x-6">
        <div class="text-center">
          <img
            alt="Portrait of COO Patrick Star"
            class="rounded-full mt-8"
            height="150"
            src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
            width="150"
          />
          <p class="mt-2 font-bold">Position</p>
          <p>Name</p>
        </div>
        <div class="text-center">
          <img
            alt="Portrait of COO Patrick Star"
            class="rounded-full"
            height="200"
            src="{{ asset('storage/images/board/corry.png') }}"
            width="200"
          />
          <p class="mt-2 font-bold">President Director</p>
          <p>Corry K. Djuwanta</p>
        </div>
        <div class="text-center">
          <img
            alt="Portrait of COO Patrick Star"
            class="rounded-full mt-8"
            height="150"
            src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
            width="150"
          />
          <p class="mt-2 font-bold">Position</p>
          <p>Name</p>
        </div>
      </div>
    </x-users.section>
  </x-users.panel>

  {{-- OUR CUSTOMERS --}}
  <x-users.panel color="gray">
    <x-users.section>
      <x-users.heading>
        Our Customers
      </x-users.heading>
        <div
          class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5"
        >
          <img
            class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
            src="{{ asset('storage/images/customers-logo/9.png') }}"
            alt="Transistor"
            width="158"
            height="48"
          />
          <img
            class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
            src="{{ asset('storage/images/customers-logo/2.png') }}"
            alt="Omron Logo"
            width="158"
            height="48"
          />
          <img
            class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
            src="{{ asset('storage/images/customers-logo/3.png') }}"
            alt="Polytron Logo"
            width="158"
            height="48"
          />
          <img
            class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
            src="{{ asset('storage/images/customers-logo/4.png') }}"
            alt="Sharp Logo"
            width="158"
            height="48"
          />
          <img
            class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
            src="{{ asset('storage/images/customers-logo/5.png') }}"
            alt="Panasonic Logo"
            width="158"
            height="48"
          />
        </div>
        <div
          class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5"
        >
          <img
            class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
            src="{{ asset('storage/images/customers-logo/6.png') }}"
            alt="Leoco Logo"
            width="158"
            height="48"
          />
          <img
            class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
            src="{{ asset('storage/images/customers-logo/7.png') }}"
            alt="Reform"
            width="158"
            height="48"
          />
          <img
            class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
            src="{{ asset('storage/images/customers-logo/8.png') }}"
            alt="Tuple"
            width="158"
            height="48"
          />
          <img
            class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
            src="{{ asset('storage/images/customers-logo/1.png') }}"
            alt="SavvyCal"
            width="158"
            height="48"
          />
          <img
            class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
            src="{{ asset('storage/images/customers-logo/10.png') }}"
            alt="Statamic"
            width="158"
            height="48"
          />
        </div>
        <div
          class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5"
        >
          <img
            class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
            src="{{ asset('storage/images/customers-logo/11.png') }}"
            alt="Transistor"
            width="158"
            height="48"
          />
          <img
            class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
            src="{{ asset('storage/images/customers-logo/12.png') }}"
            alt="Reform"
            width="158"
            height="48"
          />
          <img
            class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
            src="{{ asset('storage/images/customers-logo/13.png') }}"
            alt="Tuple"
            width="158"
            height="48"
          />
          <img
            class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
            src="{{ asset('storage/images/customers-logo/14.png') }}"
            alt="SavvyCal"
            width="158"
            height="48"
          />
          <img
            class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
            src="{{ asset('storage/images/customers-logo/15.png') }}"
            alt="Statamic"
            width="158"
            height="48"
          />
        </div>
        <p
          class="text base text-gray-700 font-semibold leading-7 text-center mt-12"
        >
          and more...
        </p>
    </x-users.section>
  </x-users.panel>

  {{-- AWARDS AND ACHIEVEMENTS --}}
  <x-users.panel>
    <x-users.section>
      <x-users.heading>
        Awards And Achievements
      </x-users.heading>
      <div
        class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20"
      ></div>
      <div
        class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center"
      ></div>
      <div class="swiper swiper-awards">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <figure class="mt-2">
              <blockquote
                class="text-center text-xl/8 text-gray-900 sm:text-2xl/9 cursor-pointer"
              >
                <p>“2007 Outstanding Performance Award .”</p>
                <p class="font-bold">SHARP</p>
              </blockquote>
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="mt-2">
              <blockquote
                class="text-center text-xl/8 text-gray-900 sm:text-2xl/9 mt-4 cursor-pointer"
              >
                <p>
                  “2011 Best Support of Production Recovery after Japan
                  Earthquake.”
                </p>
                <p class="font-bold">SANKEN</p>
              </blockquote>
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="mt-2">
              <blockquote
                class="text-center text-xl/8 text-gray-900 sm:text-2xl/9 mt-4 cursor-pointer"
              >
                <p>“2012 Supplier Appreciation (Best Delivery Supplier).”</p>
                <p class="font-bold">AHM</p>
              </blockquote>
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="mt-2">
              <blockquote
                class="text-center text-xl/8 text-gray-900 sm:text-2xl/9 mt-4 cursor-pointer"
              >
                <p>“2013 The Excellence Supplier 2013.”</p>
                <p class="font-bold">KOITO</p>
              </blockquote>
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="mt-2">
              <blockquote
                class="text-center text-xl/8 text-gray-900 sm:text-2xl/9 mt-4 cursor-pointer"
              >
                <p>“2014 3rd Winner Best Supplier on Fiscal 2013.”</p>
                <p class="font-bold">SHARP</p>
              </blockquote>
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="mt-2">
              <blockquote
                class="text-center text-xl/8 text-gray-900 sm:text-2xl/9 mt-4 cursor-pointer"
              >
                <p>“2014 Delivery Award Supplier.”</p>
                <p class="font-bold">KOITO</p>
              </blockquote>
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="mt-2">
              <blockquote
                class="text-center text-xl/8 text-gray-900 sm:text-2xl/9 mt-4 cursor-pointer"
              >
                <p>“2015 Suppliers Award (EPS PLATINUM).”</p>
                <p class="font-bold">AHM</p>
              </blockquote>
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="mt-2">
              <blockquote
                class="text-center text-xl/8 text-gray-900 sm:text-2xl/9 mt-4 cursor-pointer"
              >
                <p>“2015 Quality Best Supllier 2015.”</p>
                <p class="font-bold">PT.INDONESIA KOITO</p>
              </blockquote>
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="mt-2">
              <blockquote
                class="text-center text-xl/8 text-gray-900 sm:text-2xl/9 mt-4 cursor-pointer"
              >
                <p>
                  “2016 Appreciation for On Time Delivery (2016 Vendor Award).”
                </p>
                <p class="font-bold">EPSON</p>
              </blockquote>
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="mt-2">
              <blockquote
                class="text-center text-xl/8 text-gray-900 sm:text-2xl/9 mt-4 cursor-pointer"
              >
                <p>“2018 Support Supplier Performance Award .”</p>
                <p class="font-bold"></p>
              </blockquote>
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="mt-2">
              <blockquote
                class="text-center text-xl/8 text-gray-900 sm:text-2xl/9 mt-4 cursor-pointer"
              >
                <p>“2018 The Best Cost Improvement.”</p>
                <p class="font-bold">MITSUBA</p>
              </blockquote>
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="mt-2">
              <blockquote
                class="text-center text-xl/8 text-gray-900 sm:text-2xl/9 mt-4 cursor-pointer"
              >
                <p>“2018 Best Performance Delivery .”</p>
                <p class="font-bold">ASAHI DENSO INDONESIA</p>
              </blockquote>
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="mt-2">
              <blockquote
                class="text-center text-xl/8 text-gray-900 sm:text-2xl/9 mt-4 cursor-pointer"
              >
                <p>“Best Quality Performance Supplier 24F.”</p>
                <p class="font-bold">SHARP</p>
              </blockquote>
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="mt-2">
              <blockquote
                class="text-center text-xl/8 text-gray-900 sm:text-2xl/9 mt-4 cursor-pointer"
              >
                <p>“2022 The Best Supplier Seid 2022.”</p>
                <p class="font-bold">SHARP</p>
              </blockquote>
            </figure>
          </div>
          <div class="swiper-slide">
            <figure class="mt-2">
              <blockquote
                class="text-center text-xl/8 text-gray-900 sm:text-2xl/9 mt-4 cursor-pointer"
              >
                <p>“2023 Appreciation of Effort Delivery Performance.”</p>
                <p class="font-bold">MITSUBISHI</p>
              </blockquote>
            </figure>
          </div>
        </div>
        <div class="swiper-button-prev swiper-button-prev-awards"></div>
        <div class="swiper-button-next swiper-button-next-awards"></div>
      </div>
    </x-users.section>
  </x-users.panel>

  {{-- JOIN OUR TEAM --}}
  <x-users.panel color="gray">
    <x-users.section>
      <div class="max-w-4xl mx-auto p-14 bg-white flex flex-col md:flex-row items-center">
        <div class="md:w-1/2">
          <h1 class="text-3xl font-bold mb-4">Join Our Team</h1>
          <img
            alt="A group of diverse people working together on laptops"
            class="w-full rounded-lg h-48 object-cover"
            src="{{ asset('storage/images/hero/6.png') }}"
          />
        </div>
        <div class="md:w-1/2 md:pl-8 md:mt-0 flex flex-col justify-center">
          <p class="text-gray-700 leading-7 text-justify mt-8">
            Take the leap and become part of the PT Ewindo success story! We are looking for passionate, driven individuals to help shape the future of our industry. Your career journey starts here!
          </p>
          <a href="career.php" class="bg-gold text-white text-center px-6 py-2 rounded-lg mt-6">
            Apply
          </a>
        </div>
      </div>
    </x-users.section>
  </x-users.panel>

</x-users.layout>