<x-admin.layout>
    <x-slot:heading>
        New Press
    </x-slot:heading>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <form method="POST" action="/admin/newsroom" enctype="multipart/form-data">
                @csrf
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="col-span-4">
                                {{-- <label for="title" class="block text-sm/6 font-medium text-gray-900">Title <span
                                        class="text-red-500">*</span></label>
                                <div class="mt-2">
                                    <input id="title" name="title" type="text"
                                        class=" @error('title') is-invalid @enderror block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                        autofocus value="{{ old('title') }}">

                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div> --}}
                                <x-forms.input name="title" label="Title" />
                            </div>
                            <div class="col-span-4">
                                <label for="slug"
                                    class="@error('slug') is-invalid @enderror block text-sm/6 font-medium text-gray-900">Slug
                                    <span class="text-red-500">*</span></label>
                                <div class="mt-2">
                                    <input id="slug" name="slug" type="text" autocomplete="slug"
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
                                    <span class="text-red-500">*</span></label>
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
                                <label for="body"
                                    class="@error('body') is-invalid @enderror block text-sm/6 font-medium text-gray-900">News
                                    Detail
                                    <span class="text-red-500">*</span></label>
                                <div class="mt-2">
                                    <textarea name="body" id="body" rows="3"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('body') }}</textarea>
                                    @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- <p class="mt-3 text-sm/6 text-gray-600">Write some sentences about the event.</p> --}}
                            </div>
                            {{-- upload image --}}
                            {{-- <div class="col-span-full">
                                <label for="image" class="block text-sm/6 font-medium text-gray-900">Upload
                                    Media</label>
                                <div
                                    class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                    <div class="text-center">
                                        <img class="image_preview mt-2" style="display:none; width:200px;" />
                                        <div
                                            class="mt-4 flex text-sm/6 text-gray-600 @error('image') is-invalid @enderror">

                                            <label for="image"
                                                class="relative cursor-pointer rounded-md font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="image" name="image" type="file"
                                                    onchange="previewImage()">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror


                                        <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB and max 20
                                            files.
                                        </p>

                                    </div>
                                </div>
                            </div> --}}


                            <input id="files" name="files[]" type="file" multiple onchange="previewFiles()">

                            <div id="preview-container" class="mt-4 grid grid-cols-4 gap-4"></div>

                            {{-- <button type="submit"
                                class="mt-4 bg-indigo-600 text-white px-4 py-2 rounded">Upload</button> --}}

                        </div>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button"></button>
                    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>
        </div>

        <script>
            const title = document.querySelector('#title');
            const slug = document.querySelector('#slug');

            title.addEventListener('change', function() {
                fetch('/admin/newsroom/checkSlug?title=' + title.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug)
            });
        </script>

        {{-- script dari sandhika galih --}}
        {{-- <script>
            function previewImage() {
                const image = document.querySelector('#image');
                const imgPreview = document.querySelector('.image_preview');

                imgPreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);
                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                }
            }
        </script> --}}

        <script>
            let filesArray = [];

            function previewFiles() {
                const fileInput = document.getElementById('files');
                const container = document.getElementById('preview-container');
                container.innerHTML = '';
                filesArray = Array.from(fileInput.files);

                filesArray.forEach((file, index) => {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        container.innerHTML += `
                            <div class="relative">
                                <img src="${e.target.result}" class="rounded-lg shadow w-full h-32 object-cover"/>
                                <button type="button" class="absolute top-1 right-1 bg-red-500 text-white rounded-full p-1 text-xs" onclick="removeFile(${index})">X</button>
                            </div>`;
                    };
                    reader.readAsDataURL(file);
                });
            }

            function removeFile(index) {
                filesArray.splice(index, 1);
                // Simulate re-assign file input
                const dataTransfer = new DataTransfer();
                filesArray.forEach(file => dataTransfer.items.add(file));
                document.getElementById('files').files = dataTransfer.files;
                previewFiles(); // re-render preview
            }
        </script>

        <script>
            < script >
                function checkFilesLimit() {
                    const input = document.getElementById('files');
                    if (input.files.length > 20) {
                        alert('You can only upload a maximum of 20 files.');
                        input.value = ""; // reset input file
                    }
                } <
                />
        </script>
    </main>

</x-admin.layout>
