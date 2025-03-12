<x-admin.layout>
  <x-slot:heading>
    Products
  </x-slot:heading>

  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div>
      <!-- ADD BUTTON -->
      <div class="mt-6 flex items-center justify-center gap-x-6">
        <a href="/admin/products/create" class="rounded-md bg-gold px-3 py-2 text-lg font-semibold text-white shadow-xs hover:bg-yellow-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-400">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="inline size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        Product
        </a>
      </div>
      <!-- Sorting & Search -->
      <div class="mt-12 flex justify-between items-center">
        <!-- Search Box -->
        <div class="relative w-1/2 max-w-sm">
          <input type="text" placeholder="Search product..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none">
          <svg class="absolute right-3 top-3 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M16.65 11a5.65 5.65 0 1 0-11.3 0 5.65 5.65 0 0 0 11.3 0Z" />
          </svg>
        </div>
        
        <!-- Sorting Dropdown -->
        <div>
          <label for="sort" class="text-gray-700 font-semibold">Filter by:</label>
          <select id="sort" class="ml-2 pr-10 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:outline-none">
            <option value="newest">Automotive</option>
            <option value="oldest">Electronic</option>
            <option value="oldest">Power Supply</option>
          </select>
        </div>
      </div>
    </div>
    @for ($i = 0; $i < 3; $i++)
      <section class="container mx-auto py-6">
        <div
          class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 mt-8"
        >
          @for ($j = 0; $j < 5; $j++)
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
                  href="product-detail.php"
                  class="mt-4 bg-yellow-500 text-white py-2 px-4 rounded"
                >
                  Edit
                </a>
              </div>
            </div>
          @endfor
        </div>
      </section>
    @endfor
  </div>
</x-admin.layout>