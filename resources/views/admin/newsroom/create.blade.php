<x-admin.layout>
  <x-slot:heading>
    Create New Post
  </x-slot:heading>

  <x-forms.form method="POST" action="/admin/newsroom" enctype="multipart/form-data">
    <div class="col-span-4">
      <x-forms.input label="Title" name="title" />
    </div>
    <div class="sm:col-span-3">
      <x-forms.select label="Category" name="newsroom_category_id">
        <option selected disabled>Pilih</option>
        @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </x-forms.select>
    </div>
    <div class="col-span-full">
      <x-forms.textarea label="Body" name="body" id="description"/>
      <p class="mt-3 text-sm/6 text-gray-600">Write some sentences about the event.</p>
    </div>
    <div class="col-span-full">
      <label for="upload-product" class="block text-sm/6 font-medium text-gray-900">Upload Media (Up to 20)</label>
      <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
        <div class="text-center">
          <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
          </svg>
          <div class="mt-4 flex text-sm/6 text-gray-600">
            <label for="images" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
              <span>Upload a file</span>
              <input id="images" name="images[]" type="file" class="sr-only" accept="image/*" multiple>
            </label>
            <p class="pl-1">or drag and drop</p>
          </div>
          <p class="text-xs/5 text-gray-600">PNG, JPG, GIF max 2MB/image(s)</p>
        </div>
      </div>
    </div>
    <div id="image-preview-container" class="grid grid-cols-10 gap-4 mt-4"></div>
    <x-forms.divider />
    <x-forms.button>Publish</x-forms.button>
  </x-forms.form>
</x-admin.layout>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Handle image preview upload
    const input = document.getElementById('images');
    const previewContainer = document.getElementById('image-preview-container')
    let imagesArr = []

    input.addEventListener('change', function(event) {
      const newFiles = Array.from(event.target.files)

      newFiles.forEach((file) => {
        if (!file.type.startsWith('image/')) return

        imagesArr.push(file)
        updateFileInput()

        const reader = new FileReader()
        reader.onload = function (e) {
          const imgContainer = document.createElement('div')
          imgContainer.classList.add('relative', 'w-24', 'h-24', 'border', 'rounded-lg', 'overflow-hidden')

          const img = document.createElement('img')
          img.src = e.target.result
          img.classList.add('w-full', 'h-full', 'object-cover')

          const removeBtn = document.createElement('button')
          removeBtn.innerHTML = '✖'
          removeBtn.classList.add('absolute', 'top-1', 'right-1', 'bg-red-50', 'text-white', 'rounded-full', 'w-5', 'h-5', 'flex', 'items-center', 'justify-center', 'text-xs')

          removeBtn.addEventListener('click', function() {
            const index = imagesArr.indexOf(file)
            if (index !== -1) {
              imagesArr.splice(index, 1)
              updateFileInput()
              imgContainer.remove()
            }
          })

          imgContainer.appendChild(img)
          imgContainer.appendChild(removeBtn)
          previewContainer.appendChild(imgContainer)
        }
        reader.readAsDataURL(file)
      })
    })

    function updateFileInput()
    {
      const newFileList = new DataTransfer()
      imagesArr.forEach(f => newFileList.items.add(f))
      input.files = newFileList.files
    }
  })
</script>