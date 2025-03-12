<x-users.layout>
  {{-- PRODUCT INFO --}}
  <x-users.panel>
    <x-users.section>
      <x-users.heading>Products</x-users.heading>
      <p class="mt-6 text-base text-gray-700 leading-7 text-center">
        PT EWINDO offers a diverse range of products, including bare
        conductors such as Enameled Round Copper Wires, Annealed and
        Tin-Annealed Copper Wires, Electric Cables, Automotive Cables, Power
        Supply Cords and Cord sets, Telecommunication Cables (Coaxial),
        Audio Cables, and Wiring Harnesses. Our products meet various
        industry standards and certifications, including SII/LMK/SPLN, UL,
        ULC/UL, CSA, DENTORI, -F- Mark, CEE, and AS Approved.
      </p>
      <p class="mt-4 text-base text-gray-700 leading-7 text-center">
        We are committed to the principles of customer satisfaction and
        quality excellence, continuously enhancing our quality management
        system. Our commitment is reflected in our certifications, which
        include ISO 9001, ISO 14001, ISO 45001, CE, and UL.
      </p>

      <div
        class="flex rounded-full border-2 border-gold outline-none overflow-hidden max-w-lg mx-auto mt-10"
      >
        <input
          type="text"
          placeholder="Search Products..."
          class="w-full outline-none bg-white text-sm px-5 py-3"
        />
        <button
          type="button"
          class="flex items-center justify-center bg-gold hover:bg-yellow-400 px-6"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 192.904 192.904"
            width="18px"
            class="fill-white"
          >
            <path
              d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z"
            ></path>
          </svg>
        </button>
      </div>

      <section class="text-center my-8">
        <div class="flex justify-center space-x-4">
          <a class="text-gold hover:text-yellow-400" href="#">CAT</a>
          <a class="text-gold hover:text-yellow-400" href="#">CAT</a>
          <a class="text-gold hover:text-yellow-400" href="#">CAT</a>
          <a class="text-gold hover:text-yellow-400" href="#">CAT</a>
        </div>
        <hr class="mt-4 border-gray-300" />
      </section>
    </x-users.section>
  </x-users.panel>

  <x-users.panel>
    @for ($i = 0; $i < 4; $i++)
      <section class="container max-w-7xl mx-auto py-8">
        <x-users.heading>Product Category</x-users.heading>
        <p class="text-center text-gray-600 -mt-14">Overall Description</p>
        <div
          class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-8 p-14"
        >
          @for ($j = 0; $j < 4; $j++)
            <div class="rounded-lg overflow-hidden shadow-lg">
              <img
                alt="Product image of enameled round copper wires"
                class="w-full"
                height="300"
                src="https://storage.googleapis.com/a1aa/image/IYQ51UHtj3a9OtwfsW8Xy5TGiGR3WMh7U2fxVS5aBIEZO2HUA.jpg"
                width="300"
              />
              <div class="p-4">
                <h3 class="font-bold">Product Name</h3>
                <p class="text-gray-600 mb-6">Product Code</p>
                <a
                  href="products/slug"
                  class="mt-4 bg-gold text-white py-2 px-4 rounded"
                >
                  Details
                </a>
              </div>
            </div>
          @endfor
        </div>
      </section>
    @endfor
  </x-users.panel>
</x-users.layout>