<x-users.layout>
  <x-users.panel>
    <x-users.section>
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
          <div class="shrink-0 max-w-md lg:max-w-lg mx-auto rounded-xl p-8 border-black/10 bg-gray-100 shadow-lg">
            {{-- image section (can be swiped when more than one) --}}
            @if ($product->product_images->isNotEmpty())
                @foreach ($product->product_images as $image)
                  <img class="w-full hidden dark:block" src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $product->cable_type }}" />  
                @endforeach
            @endif
          </div>
  
          {{-- Right side description --}}
          <div class="mt-6 sm:mt-8 lg:mt-0">
            <h1
              class="text-xl font-semibold text-gray-900 sm:text-2xl"
            >
              {{ $product->type }} - {{ $product->cable_type }}
            </h1>
            {{-- Product Certificate --}}
            <div class="flex space-x-4 mt-4">
              <div
                class="w-12 h-12 border-2 border-gold rounded-lg"
              ></div>
              <div
                class="w-12 h-12 border-2 border-gold rounded-lg"
              ></div>
              <div
                class="w-12 h-12 border-2 border-gold rounded-lg"
              ></div>
              <div
                class="w-12 h-12 border-2 border-gold rounded-lg"
              ></div>
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
              <div class="mt-4 flex space-x-4">
                <a href="#" class="bg-blue-500 text-white py-2 px-4 rounded">Edit</a>
                <form action="" method="POST" onsubmit="return confirm('Are you sure?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded">Delete</button>
                </form>
              </div>
            @endauth
          </div>
          <div
            class="py-10 lg:col-span-2 lg:col-start-1 lg:border-gray-200 lg:pt-6 lg:pr-8 lg:pb-16"
          >
            <!-- Description and details -->
            <div>
              <h3 class="sr-only">Description</h3>
              {{-- My detail product here --}}
              {{-- <p class="text-gray-600">{{ $product->description }}</p> --}}
              {{-- <div class="space-y-6">
                <p class="text-base text-gray-900">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Error, voluptas, fugit sapiente nemo incidunt saepe
                  commodi sunt reprehenderit voluptatibus magni quis ipsa
                  fuga ipsum? Cupiditate aut quis nesciunt saepe sed! Id
                  repellat molestiae asperiores nihil fugit hic reiciendis,
                  autem ullam, tempore, neque saepe quod et velit ea sed
                  deleniti laboriosam.
                </p>
              </div> --}}
            </div>

            {{-- <div class="mt-10">
              <h3 class="text-sm font-medium text-gray-900">Features</h3>

              <div class="mt-4">
                <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                  <li class="text-gray-400">
                    <span class="text-gray-600"
                      >Lorem ipsum dolor sit amet</span
                    >
                  </li>
                  <li class="text-gray-400">
                    <span class="text-gray-600"
                      >Lorem ipsum dolor sit amet</span
                    >
                  </li>
                  <li class="text-gray-400">
                    <span class="text-gray-600"
                      >Lorem ipsum dolor sit amet</span
                    >
                  </li>
                  <li class="text-gray-400">
                    <span class="text-gray-600"
                      >Lorem ipsum dolor sit amet</span
                    >
                  </li>
                </ul>
              </div>
            </div>

            <div class="mt-10">
              <h2 class="text-sm font-medium text-gray-900">
                Applications
              </h2>

              <div class="mt-4 space-y-6">
                <p class="text-sm text-gray-600">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Sapiente inventore ab optio dignissimos necessitatibus,
                  aut libero totam, error velit sint dicta quisquam
                  accusamus quis voluptate rerum accusantium dolore delectus
                  pariatur.
                </p>
              </div>
            </div> --}}
            <div class="mt-10">
              <h2 class="text-sm font-medium text-gray-900">Downloads</h2>

              <div class="mt-2 space-y-3">
                <button
                  type="button"
                  class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16"
                    fill="currentColor"
                    class="size-4 mr-2"
                  >
                    <path
                      d="M8.75 2.75a.75.75 0 0 0-1.5 0v5.69L5.03 6.22a.75.75 0 0 0-1.06 1.06l3.5 3.5a.75.75 0 0 0 1.06 0l3.5-3.5a.75.75 0 0 0-1.06-1.06L8.75 8.44V2.75Z"
                    />
                    <path
                      d="M3.5 9.75a.75.75 0 0 0-1.5 0v1.5A2.75 2.75 0 0 0 4.75 14h6.5A2.75 2.75 0 0 0 14 11.25v-1.5a.75.75 0 0 0-1.5 0v1.5c0 .69-.56 1.25-1.25 1.25h-6.5c-.69 0-1.25-.56-1.25-1.25v-1.5Z"
                    />
                  </svg>
                  Data Sheet Product XXX
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </x-users.section>
  </x-users.panel>
</x-users.layout>