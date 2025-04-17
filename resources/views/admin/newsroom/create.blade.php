<x-admin.layout>
    <x-slot:heading>
        New Press
    </x-slot:heading>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <form method="POST" action="/admin/newsroom" enctype="multipart/form-data">
                @csrf
                <div class="space-y-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-4">
                        <div class="col-span-4">

                            <x-forms.input name="title" label="Title" />
                        </div>

                        <div class="mt-2">
                            <input id="slug" name="slug" type="hidden" autocomplete="slug"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                autofocus value="{{ old('slug') }}">
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="category_id" class="block text-sm/6 font-medium text-gray-900">Category
                            <span class="text-red-500">*
                            </span></label>
                        <div class="mt-2 grid grid-cols-1">
                            <select name="category_id"
                                class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                <option selected disabled>Choose</option>
                                @foreach ($categories as $category)
                                    @if (old('category_id') == $category->id)
                                        <option value="{{ $category->id }}"selected>{{ $category->name }}
                                        </option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <x-forms.textarea label="News Detail" name="body" id="description" />
                    </div>
                    <div class="col-span-full">
                        <label for="upload" class="block text-sm/6 font-medium text-gray-900">Upload
                            Photos</label>
                        <div
                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">
                                <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="flex justify-center items-center min-h-[200px]">
                                    <div
                                        class="mt-4 p-4 border-2 border-dashed rounded-lg text-sm/6 text-gray-600 flex flex-col sm:flex-row items-center justify-center gap-2">
                                        <label for="files"
                                            class="cursor-pointer font-semibold text-indigo-600 hover:text-indigo-500">
                                            Upload a file
                                            <input id="files" name="files[]" type="file" class="sr-only"
                                                accept="image/*" multiple>
                                        </label>
                                        <p class="text-sm text-gray-500"></p>
                                    </div>
                                </div>


                                <p class="text-xs/5 text-gray-600">PNG, JPG, GIF max 2MB/image(s)</p>
                            </div>
                        </div>

                        <div id="image-preview-container" class="grid grid-cols-10 gap-4 mt-4"></div>

                    </div>
                </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button"
                    class="rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer"
                    onclick="confirmCancel()">
                    Cancel
                </button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Post</button>
            </div>
            </form>
        </div>

        <script>
            function confirmCancel() {
                const confirmLeave = confirm('Perubahan tidak akan disimpan. Yakin ingin meninggalkan halaman ini?');
                if (confirmLeave) {
                    window.location.href = '/admin/newsroom';
                }
                // kalau tidak, tidak melakukan apa-apa, tetap di halaman ini
            }
        </script>

        <script>
            // Auto-generate slug
            const title = document.querySelector('#title');
            const slug = document.querySelector('#slug');

            title?.addEventListener('change', function() {
                fetch('/admin/newsroom/checkSlug?title=' + title.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug);
            });

            // Handle image preview upload
            const input = document.getElementById('files');
            const previewContainer = document.getElementById('image-preview-container');
            let filesArr = [];

            input?.addEventListener('change', function(event) {
                const newFiles = Array.from(event.target.files);

                newFiles.forEach((file) => {
                    if (!file.type.startsWith('image/')) return;

                    filesArr.push(file);
                    updateFileInput();

                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const imgContainer = document.createElement('div');
                        imgContainer.classList.add(
                            'relative', 'w-24', 'h-24', 'border', 'rounded-lg',
                            'overflow-hidden', 'shadow-sm', 'hover:shadow-md', 'transition-shadow'
                        );

                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.classList.add('w-full', 'h-full', 'object-cover');

                        const removeBtn = document.createElement('button');
                        removeBtn.innerHTML = '✖';
                        removeBtn.classList.add(
                            'absolute', 'top-1', 'right-1', 'bg-red-500', 'text-white',
                            'rounded-full', 'w-5', 'h-5', 'flex', 'items-center', 'justify-center',
                            'text-xs', 'hover:bg-red-600', 'transition-colors'
                        );

                        removeBtn.addEventListener('click', function() {
                            const index = filesArr.indexOf(file);
                            if (index !== -1) {
                                filesArr.splice(index, 1);
                                updateFileInput();
                                imgContainer.remove();
                            }
                        });

                        imgContainer.appendChild(img);
                        imgContainer.appendChild(removeBtn);
                        previewContainer.appendChild(imgContainer);
                    };
                    reader.readAsDataURL(file);
                });
            });

            // Simulate file input reset when removing file
            function removeFile(index) {
                filesArr.splice(index, 1);
                const dataTransfer = new DataTransfer();
                filesArr.forEach(file => dataTransfer.items.add(file));
                input.files = dataTransfer.files;
                previewFiles(); // If you have this function defined
            }

            // File limit checker
            function checkFilesLimit() {
                const input = document.getElementById('files');
                if (input?.files.length > 20) {
                    alert('You can only upload a maximum of 20 files.');
                    input.value = ""; // reset input file
                }
            }

            // Dummy updateFileInput to make sure it doesn't throw error
            function updateFileInput() {
                const dataTransfer = new DataTransfer();
                filesArr.forEach(file => dataTransfer.items.add(file));
                input.files = dataTransfer.files;
            }
        </script>

    </main>

</x-admin.layout>
