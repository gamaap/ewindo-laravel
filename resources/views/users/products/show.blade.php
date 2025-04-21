<x-users.layout>
  <x-slot:heading>
    Product Detail
  </x-slot:heading>
  {{-- Breadcrumb --}}
  <nav aria-label="Breadcrumb" class="mb-5">
    <ol
      role="list"
      class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8"
    >
      <li>
        <div class="flex items-center">
          <a href="/admin/products" class="mr-2 text-sm font-medium text-gray-900"
            >Products</a
          >
          <svg
            width="16"
            height="20"
            viewBox="0 0 16 20"
            fill="currentColor"
            aria-hidden="true"
            class="h-5 w-4 text-gray-300"
          >
            <path
              d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z"
            />
          </svg>
        </div>
      </li>
      <li>
        <div class="flex items-center">
          <a href="#" class="mr-2 text-sm font-medium text-gray-900"
            >{{ $product->type }}</a
          >
          <svg
            width="16"
            height="20"
            viewBox="0 0 16 20"
            fill="currentColor"
            aria-hidden="true"
            class="h-5 w-4 text-gray-300"
          >
            <path
              d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z"
            />
          </svg>
        </div>
      </li>

      <li class="text-sm">
        <a
          href="#"
          aria-current="page"
          class="font-medium text-gray-500 hover:text-gray-600"
          >{{ $product->type }} - {{ $product->cable_type }}</a
        >
      </li>
    </ol>
  </nav>
  {{-- Product Description --}}
  <div class="max-w-7xl px-4 mx-auto 2xl:px-0">
    <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
      <div class="shrink-0 max-w-md lg:max-w-lg mx-auto p-8 border-black/10 rounded-lg shadow-xl">
        {{-- image section (can be swiped when more than one) --}}
        <div class="swiper swiper-products">
          <div class="swiper-wrapper">
            @if ($product->product_images->isNotEmpty())
                @foreach ($product->product_images as $image)
                  <div class="swiper-slide bg-gray-100">
                    <img class="w-[500px] h-[500px] object-cover" src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $product->cable_type }}" />
                  </div>
                @endforeach
            @endif
          </div>
          <div class="swiper-pagination swiper-pagination-products"></div>
          <div class="swiper-button-prev swiper-button-prev-products"></div>
          <div class="swiper-button-next swiper-button-next-products"></div>
        </div>
      </div>

      {{-- Right side description --}}
      <div class="mt-6 sm:mt-8 lg:mt-0 relative">
        <h1
          class="text-xl font-semibold text-gray-900 sm:text-2xl"
        >
          {{ $product->type }} - {{ $product->cable_type }}
        </h1>
        {{-- Product Certificate --}}
          @if ($product->certificates->isNotEmpty())
            <div class="flex space-x-4 mt-4 mb-6">
              @foreach ($product->certificates as $certificate)
                <img class="w-12 h-12 border-2 border-gold rounded-lg object-contain" src="{{ asset('storage/' . $certificate->logo) }}" alt="{{ $certificate->name }}">
              @endforeach
            </div>
          @endif
        <x-forms.divider />
        <div>
          {!! $product->description !!}
        </div>
        {{-- Request a quotation (for non admin auth) --}}
        @guest
          <div class="mt-4 sm:gap-4 sm:items-center sm:flex sm:mt-8">
            <a
              href="#"
              title=""
              class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
              role="button"
            >
              <svg
                class="w-5 h-5 -ms-2 me-2"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="none"
                viewBox="0 0 24 24"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"
                />
              </svg>
              Request A Quotation
            </a>
          </div>
        @endguest
        @auth
          <div class="absolute bottom-0 right-0 flex space-x-3 p-4">
            <a href="#" class="bg-blue-500 text-white py-2 px-4 rounded">Edit</a>
            <form action="#" method="POST" onsubmit="return confirm('Are you sure?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded">Delete</button>
            </form>
          </div>
        @endauth
      </div>

      {{-- Bottom description detail --}}
      {{-- <div
        class="py-3 lg:col-span-2 lg:col-start-1 lg:border-gray-200 pl-8"
      >
        <div>
          <table class="table-auto max-w-full">
            <h3 class="text-sm font-medium text-gray-900 mb-4">Item Details</h3>
            <thead>
              <tr>
                <th colspan="2">Item Details</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Type</th>
                <td class="min-w-[320px]">{{ $product->type }}</td>
              </tr>
              <tr>
                <th>Cable Type</th>
                <td>{{ $product->cable_type }}</td>
              </tr>
              <tr>
                <th>Size (AWG/mm<sup>2</sup>)</th>
                <td>{{ $product->size }}</td>
              </tr>
              <tr>
                <th>Rated Voltage</th>
                <td>{{ $product->rated_voltage }}</td>
              </tr>
              <tr>
                <th>Colour</th>
                <td>{{ $product->colour }}</td>
              </tr>
              <tr>
                <th>Application to</th>
                <td>{{ $product->application }}</td>
              </tr>
              <tr>
                <th colspan="2">Technical Data</th>
              </tr>
              <tr>
                <th>Product Standard</th>
                <td>{{ $product->product_standard }}</td>
              </tr>
              <tr>
                <th>RoHS Compliance</th>
                <td>{{ $product->rohs === 1 ? 'Yes' : 'No' }}</td>
              </tr>
              <tr>
                <th>Heat Resistance Class</th>
                <td>{{ $product->heat_resistance }}</td>
              </tr>
              <tr>
                <th>Test</th>
                <td>{{ $product->test }}</td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div class="mt-10">
          <h2 class="text-sm font-medium text-gray-900">Download(s)</h2>

          <div class="mt-2 space-y-3">
            @if ($product->data_sheet)
              <a href="{{ asset('storage/' . $product->data_sheet) }}" download="data-sheet-{{ $product->type }}-{{ $product->cable_type }}" class="inline-block">
                <x-forms.button type="button">
                  Data Sheet {{ $product->type }}-{{ $product->cable_type }}
                </x-forms.button>
              </a>
            @else 
              <p class="text-gray-500 text-sm">No Data Sheet available.</p>
            @endif
          </div>
        </div>
      </div> --}}
    </div>
    <div class="mt-4 p-8">
      <div class="px-4 sm:px-0">
        <h3 class="text-base/7 font-semibold text-gray-900">Product Information</h3>
        <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Product details and application.</p>
      </div>
      <div class="mt-6 border-t border-gray-100">
        <dl class="divide-y divide-gray-100">
          <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm/6 font-medium text-gray-900">Type</dt>
            <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $product->type }}</dd>
          </div>
          <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm/6 font-medium text-gray-900">Cable Type</dt>
            <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $product->cable_type }}</dd>
          </div>
          <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm/6 font-medium text-gray-900">Size (AWG/mm<sup>2</sup>)</dt>
            <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $product->size }}</dd>
          </div>
          <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm/6 font-medium text-gray-900">Salary expectation</dt>
            <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">$120,000</dd>
          </div>
          <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm/6 font-medium text-gray-900">About</dt>
            <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</dd>
          </div>
          <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm/6 font-medium text-gray-900">Attachments</dt>
            <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
              <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                <li class="flex items-center justify-between py-4 pr-5 pl-4 text-sm/6">
                  <div class="flex w-0 flex-1 items-center">
                    <svg class="size-5 shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                      <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z" clip-rule="evenodd" />
                    </svg>
                    <div class="ml-4 flex min-w-0 flex-1 gap-2">
                      <span class="truncate font-medium">resume_back_end_developer.pdf</span>
                      <span class="shrink-0 text-gray-400">2.4mb</span>
                    </div>
                  </div>
                  <div class="ml-4 shrink-0">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                  </div>
                </li>
                <li class="flex items-center justify-between py-4 pr-5 pl-4 text-sm/6">
                  <div class="flex w-0 flex-1 items-center">
                    <svg class="size-5 shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                      <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z" clip-rule="evenodd" />
                    </svg>
                    <div class="ml-4 flex min-w-0 flex-1 gap-2">
                      <span class="truncate font-medium">coverletter_back_end_developer.pdf</span>
                      <span class="shrink-0 text-gray-400">4.5mb</span>
                    </div>
                  </div>
                  <div class="ml-4 shrink-0">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                  </div>
                </li>
              </ul>
            </dd>
          </div>
        </dl>
      </div>
    </div>    
  </div>
</x-users.layout>