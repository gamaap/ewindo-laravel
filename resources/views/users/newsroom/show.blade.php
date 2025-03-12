<x-users.layout>
  <x-users.panel>
    <x-users.section>
      <div class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert pl-5">
        <header class="mb-4 lg:mb-6 not-format">
          <x-users.heading>Best practices for creating nice catchy title</x-users.heading>
        </header>
      </div>
      <div class="flex flex-col items-center gap-4">
        <!-- Centered main image with reduced size -->
        <div class="w-3/5">
          <img class="w-full h-auto rounded-lg" 
                src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg" 
                alt="Main Image">
        </div>
        <!-- Smaller images grid with total width equal to main image -->
        <div class="w-3/5 grid grid-cols-4 gap-4">
          <div>
            <img class="w-full h-auto rounded-lg" 
                  src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" 
                  alt="">
          </div>
          <div>
            <img class="w-full h-auto rounded-lg" 
                  src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" 
                  alt="">
          </div>
          <div>
            <img class="w-full h-auto rounded-lg" 
                  src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" 
                  alt="">
          </div>
          <div>
            <img class="w-full h-auto rounded-lg" 
                  src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" 
                  alt="">
          </div>
        </div>
      </div>
      <!-- Article Below Images -->
      <article class="mx-auto w-3/5 text-base/7 text-justify leading-relaxed text-gray-800 mt-8">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero aliquid delectus itaque error, ducimus at ipsam deserunt, a ex, vel repellendus iusto obcaecati. Ad hic, quas voluptatem consequuntur error facilis, sequi cupiditate fuga numquam non similique? Veniam fugit dolore corrupti quia, ratione harum atque voluptatum id debitis sapiente explicabo neque.
        </p>
        <p class="mt-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero aliquid delectus itaque error, ducimus at ipsam deserunt, a ex, vel repellendus iusto obcaecati. Ad hic, quas voluptatem consequuntur error facilis, sequi cupiditate fuga numquam non similique? Veniam fugit dolore corrupti quia, ratione harum atque voluptatum id debitis sapiente explicabo neque.
        </p>
        <p class="mt-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero aliquid delectus itaque error, ducimus at ipsam deserunt, a ex, vel repellendus iusto obcaecati. Ad hic, quas voluptatem consequuntur error facilis, sequi cupiditate fuga numquam non similique? Veniam fugit dolore corrupti quia, ratione harum atque voluptatum id debitis sapiente explicabo neque.
        </p>
      </article>
      <div class="flex flex-col gap-4 items-end mt-12">
        <address class="flex items-end not-italic">
          <div class="inline-flex items-end mr-72 text-sm text-gray-900 dark:text-white">
            <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
            <div>
              <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-gray-800">John Doe</a>
              <p class="text-base text-gray-700 dark:text-gray-600">Administrator</p>
              <p class="text-base text-gray-700 dark:text-gray-600"><time pubdate datetime="2025-02-04">Feb. 4, 2025</time></p>
            </div>
          </div>
        </address>
      </div>
      <div class="mx-auto mt-10 w-3/5 border-t border-gray-300 pt-10"></div>
      <section class="bg-gray-100 py-4">
        <div class="text-center mb-6">
          <h2 class="text-3xl font-bold">Newsroom</h2>
          <p class="text-gray-500">The latest news and updates, direct from EWINDO</p>
        </div>
        <div class="text-center">
          <a href="newsroom.php">
            <button class="py-2 px-6 rounded-full hover:bg-yellow-600 bg-yellow-500 text-white font-semibold">Read More</button>
          </a>
        </div>
      </section>
    </x-users.section>
  </x-users.panel>
</x-users.layout>