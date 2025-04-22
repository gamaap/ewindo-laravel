<x-admin.layout>
  <x-slot:heading>
    Newsroom
  </x-slot:heading>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <div class="p-10">
        <!-- ADD BUTTON -->
        <div class="mt-6 flex items-center justify-center gap-x-6">
          <a href="/admin/newsroom/create" class="rounded-md bg-gold px-3 py-2 text-lg font-semibold text-white shadow-xs hover:bg-yellow-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-400">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="inline size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
          </svg>
          News Update
          </a>
        </div>
        <!-- Sorting & Search -->
        <div class="mt-12 flex justify-between items-center">
          <!-- Search Box -->
          <div class="relative w-1/2 max-w-sm">
            <input type="text" placeholder="Search news..." class="w-full px-4 py-2 border border-gray-300 focus:outline-2 focus:-outline-offset-1 focus:outline-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none">
            <svg class="absolute right-3 top-3 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M16.65 11a5.65 5.65 0 1 0-11.3 0 5.65 5.65 0 0 0 11.3 0Z" />
            </svg>
          </div>
          
          <!-- Sorting Dropdown -->
          <div>
            <label for="sort" class="text-gray-700 font-semibold">Sort by:</label>
            <select id="sort" class="ml-2 pr-10 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-2 focus:-outline-offset-1 focus:outline-yellow-500 focus:outline-none">
              <option value="newest">Newest</option>
              <option value="oldest">Oldest</option>
            </select>
          </div>
        </div>
        <div
          class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-3"
        >
          <?php for ($i = 0; $i < 9; $i++) : ?>
          <div class="border border-gray-300 rounded-2xl p-4 bg-white shadow-lg">
            <article class="flex max-w-xl flex-col items-start justify-between">
              <img
                src="/assets/google-hq.png"
                alt="Article Image"
                class="w-full h-48 rounded-lg mb-4"
              />
              <div class="flex items-center gap-x-4 text-xs">
                <time datetime="2020-03-16" class="text-gray-500"
                  >Feb 04, 2025</time
                >
                <a
                  href="#"
                  class="relative z-10 rounded-full bg-yellow-500 px-3 py-1.5 font-medium text-white hover:bg-yellow-400"
                  >Vacation</a
                >
              </div>
              <div class="group relative">
                <h3
                  class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600"
                >
                  <a href="/admin/press-edit.php">
                    <span class="absolute inset-0"></span>
                    Boost your conversion rate
                  </a>
                </h3>
                <p class="my-5 line-clamp-3 text-sm/6 text-gray-600">
                  Illo sint voluptas. Error voluptates culpa eligendi. Hic vel
                  totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed
                  exercitationem placeat consectetur nulla deserunt vel. Iusto
                  corrupti dicta.
                </p>
                <a
                  href="javascript:;"
                  class="cursor-pointer text-md text-yellow-600 font-semibold"
                  >Edit</a
                >
              </div>
            </article>
          </div>
          <?php endfor ?>
        </div>

        <!-- PAGINATION -->
        <div
          class="flex items-center justify-between border-t border-gray-200 pt-8 px-4 mt-10 py-3 sm:px-6"
        >
          <div class="flex flex-1 justify-between sm:hidden">
            <a
              href="#"
              class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50"
              >Previous</a
            >
            <a
              href="#"
              class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50"
              >Next</a
            >
          </div>
          <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
            <div>
              <p class="text-sm text-gray-700">
                Showing
                <span class="font-medium">1</span>
                to
                <span class="font-medium">10</span>
                of
                <span class="font-medium">97</span>
                results
              </p>
            </div>
            <div>
              <nav
                class="isolate inline-flex -space-x-px rounded-md shadow-xs"
                aria-label="Pagination"
              >
                <a
                  href="#"
                  class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
                >
                  <span class="sr-only">Previous</span>
                  <svg
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                    data-slot="icon"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
                <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                <a
                  href="#"
                  aria-current="page"
                  class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                  >1</a
                >
                <a
                  href="#"
                  class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
                  >2</a
                >
                <a
                  href="#"
                  class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex"
                  >3</a
                >
                <span
                  class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-gray-300 ring-inset focus:outline-offset-0"
                  >...</span
                >
                <a
                  href="#"
                  class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex"
                  >8</a
                >
                <a
                  href="#"
                  class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
                  >9</a
                >
                <a
                  href="#"
                  class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
                  >10</a
                >
                <a
                  href="#"
                  class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
                >
                  <span class="sr-only">Next</span>
                  <svg
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                    data-slot="icon"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</x-admin.layout>