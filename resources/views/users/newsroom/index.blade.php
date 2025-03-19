<x-users.layout>

    <x-users.panel>
        <x-users.section>
            <x-users.heading>Newsroom</x-users.heading>

            {{-- Banner Section --}}
            <div class="w-full rounded-xl overflow-hidden shadow-lg">
                <div class="w-full min-h-[400px] bg-center bg-cover relative flex items-end p-6"
                    style="background-image: url('{{ asset('/storage/images/hero/2.png') }}')">
                    <div class="flex items-start justify-items-start w-full h-full py-6">
                        <div class="text-left">
                            <div class="container mx-auto">
                                <div class="max-w-4xl mx-auto text-left">
                                    <h2 class="text-4xl font-extrabold tracking-wide text-gold shadow-text sm:text-4xl uppercase px-4 py-2 mt-8 rounded-lg"
                                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 1)">
                                        What's New
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-users.section>
    </x-users.panel>

    <x-users.panel>
        {{-- {{ dd($news) }} --}}

        <div class="bg-white py-24 sm:py-16">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4 mb-8 mx-64">

                    @foreach ($categories as $category)
                        <a href="/newsroom/{{ $category->slug }}"
                            class="category-button bg-gray-200 text-center py-4 px-13 rounded shadow hover:bg-gray-300 hover:text-yellow-500 focus:text-yellow-500 transitio">
                            <button class="n">
                                {{ $category->name }}
                            </button></a>
                    @endforeach

                </div>
                <div
                    class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    {{-- @for ($i = 0; $i < 9; $i++) --}}
                    @foreach ($articles as $article)
                        <div class="border border-gray-300 rounded-2xl p-4">
                            <article class="flex max-w-xl flex-col items-start justify-between">
                                @if ($article->image)
                                    <img src="{{ asset('storage/' . $article->image) }}" alt="Article Image"
                                        class="w-full h-48 rounded-lg mb-4" />
                                @else
                                    <img src="{{ asset('storage/images/newsroom/google-hq.png') }}" alt="Article Image"
                                        class="w-full h-48 rounded-lg mb-4" />
                                @endif
                                <div class="flex items-center gap-x-4 text-xs">
                                    <p>{{ $article->created_at->diffForHumans() }}</p>
                                    <a href="#"
                                        class="relative z-10 rounded-full bg-yellow-500 px-3 py-1.5 font-medium text-white hover:bg-yellow-400">{{ $article->category->name }}</a>
                                </div>
                                <div class="group relative">
                                    <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                                        <a href="/categories/{{ $article->slug }}">
                                            <span class="absolute inset-0"></span>
                                            {{ $article->title }}
                                        </a>
                                    </h3>
                                    <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">
                                        {{ $article->body }}
                                    </p>
                                    {{-- <a href="javascript:;"
                                        class="cursor-pointer text-md text-indigo-600 font-semibold">Read
                                        more</a> --}}
                                    <a href="/newsroom/{{ $article['id'] }}"
                                        class="hover:underline cursor-pointer text-md text-indigo-600 font-semibold">Read
                                        more &raquo;</a>
                                </div>
                                <div class="relative mt-8 flex items-center gap-x-4">
                                    <img src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                        alt="" class="size-10 rounded-full bg-gray-50" />
                                    <div class="text-sm/6">
                                        <p class="font-semibold text-gray-900">
                                            <a href="post.php">
                                                <span class="absolute inset-0"></span>
                                                IT
                                            </a>
                                        </p>
                                        <p class="text-gray-600">{{ $article->user->name }}</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach

                    {{-- @endfor --}}
                </div>
            </div>

            <!-- PAGINATION -->
            {{-- <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 mt-10 py-3 sm:px-6">
                <div class="flex flex-1 justify-between sm:hidden">
                    <a href="#"
                        class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                    <a href="#"
                        class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
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
                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-xs" aria-label="Pagination">
                            <a href="#"
                                class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                <span class="sr-only">Previous</span>
                                <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                    data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                            <a href="#" aria-current="page"
                                class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
                            <a href="#"
                                class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                            <a href="#"
                                class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                            <span
                                class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-gray-300 ring-inset focus:outline-offset-0">...</span>
                            <a href="#"
                                class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                            <a href="#"
                                class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                            <a href="#"
                                class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
                            <a href="#"
                                class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                <span class="sr-only">Next</span>
                                <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                    data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </nav>
                    </div>
                </div>
            </div> --}}
            {{-- {{ $news->links() }} --}}
        </div>

        </x-users-panel>

</x-users.layout>
