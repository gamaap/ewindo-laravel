<x-admin.layout>
  <x-slot:heading>
    Create New Product
  </x-slot:heading>

  <x-forms.form method="POST" action="/admin/products" enctype="multipart/form-data">
    <div class="col-span-full">
      <x-forms.select label="Category" name="category">
        <option selected disabled>Pilih</option>
        <option>Cables</option>
        <option>Enamelled Wires</option>
        <option>Power Supply Cord and Cord Set</option>
      </x-forms.select>
    </div>
    <div class="col-span-full">
      <x-forms.select label="Category Type" name="category_type">
        <option selected disabled>Pilih</option>
        <option>Cables</option>
        <option>Enamelled Wires</option>
        <option>Power Supply Cord and Cord Set</option>
      </x-forms.select>
    </div>
    <x-forms.divider />
    <h2 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900">Display</h2>
    <div class="col-span-full">
      <label for="upload-product" class="block text-sm/6 font-medium text-gray-900">Upload Product</label>
      <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
        <div class="text-center">
          <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
          </svg>
          <div class="mt-4 flex text-sm/6 text-gray-600">
            <label for="upload-product" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
              <span>Upload a file</span>
              <input id="upload-product" name="upload-product" type="file" class="sr-only">
            </label>
            <p class="pl-1">or drag and drop</p>
          </div>
          <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
        </div>
      </div>
    </div>
    <div class="col-span-full">
      <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Certification 
      </label>
      <div class="grid grid-cols-5 gap-4">
        <div class="flex items-center gap-3">
          <div class="flex h-6 shrink-0 items-center">
            <div class="group grid size-4 grid-cols-1">
              <input id="cert-1" aria-describedby="cert-1-description" name="certifications[]" value="cert-1" type="checkbox" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
              <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
          </div>
          <div class="text-sm/6">
            <label for="cert-1" class="font-medium text-gray-900">
              <img src="{{ asset('storage/images/qa-small/1.png') }}" width="150" alt="">
            </label>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <div class="flex h-6 shrink-0 items-center">
            <div class="group grid size-4 grid-cols-1">
              <input id="cert-2" aria-describedby="cert-2-description" name="certifications[]" value="cert-2" type="checkbox" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
              <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
          </div>
          <div class="text-sm/6">
            <label for="cert-2" class="font-medium text-gray-900">
              <img src="{{ asset('storage/images/qa-small/2.png') }}" width="150" alt="">
            </label>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <div class="flex h-6 shrink-0 items-center">
            <div class="group grid size-4 grid-cols-1">
              <input id="cert-3" aria-describedby="cert-3-description" name="certifications[]" value="cert-3" type="checkbox" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
              <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
          </div>
          <div class="text-sm/6">
            <label for="cert-3" class="font-medium text-gray-900">
              <img src="{{ asset('storage/images/qa-small/3.png') }}" width="120" alt="">
            </label>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <div class="flex h-6 shrink-0 items-center">
            <div class="group grid size-4 grid-cols-1">
              <input id="cert-4" aria-describedby="cert-4-description" name="certifications[]" value="cert-4" type="checkbox" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
              <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
          </div>
          <div class="text-sm/6">
            <label for="cert-4" class="font-medium text-gray-900">
              <img src="{{ asset('storage/images/qa-small/4.png') }}" width="150" alt="">
            </label>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <div class="flex h-6 shrink-0 items-center">
            <div class="group grid size-4 grid-cols-1">
              <input id="cert-5" aria-describedby="cert-5-description" name="certifications[]" value="cert-5" type="checkbox" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
              <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
          </div>
          <div class="text-sm/6">
            <label for="cert-5" class="font-medium text-gray-900">
              <img src="{{ asset('storage/images/qa-small/5.png') }}" width="120" alt="">
            </label>
          </div>
        </div>
      </div>
    </div>
    <x-forms.divider />
    <h2 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900">Item Details</h2>
    <div class="col-span-full">
      <x-forms.input label="Type" name="type" />
    </div>
    <div class="col-span-full">
      <x-forms.input label="Plug Type" name="plug_type" />
    </div>
    <div class="col-span-full">
      <x-forms.input label="Connector Type" name="connector_type" />
    </div>
    <div class="col-span-full">
      <x-forms.input label="Cable Type" name="cable_type" />
    </div>
    <div class="col-span-full">
      <x-forms.input label="Size (AWG/mm2)" name="size" />
    </div>
    <div class="col-span-full">
      <x-forms.input label="Rated Voltage" name="rated_voltage" />
    </div>
    <div class="col-span-full">
      <x-forms.input label="Colour" name="colour" />
    </div>
    <div class="col-span-full">
      <x-forms.input label="Application" name="application" />
    </div>
    <x-forms.divider />
    <h2 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900">Technical Data</h2>
    <div class="col-span-full">
      <x-forms.input label="Product Standard" name="product_standard" />
    </div>
    <div class="col-span-full">
      <x-forms.fieldset>
        RoHS Compliance
        <div class="mt-2 flex gap-x-6">
          <x-forms.radio label="Yes" id="yes" name="rohs" value="Yes" />
          <x-forms.radio label="No" id="no" name="rohs" value="No"/>
        </div>
      </x-forms.fieldset>
    </div>
    <div class="col-span-full">
      <x-forms.input label="Heat Resistance Class" name="heat_resistance" />
    </div>
    <div class="col-span-full">
      <x-forms.input label="Test" name="test" />
    </div>
    <x-forms.divider />
    <h2 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900">Details</h2>
    <div class="col-span-full">
      <x-forms.textarea label="Product Description" name="description" id="description"/>
    </div>
    <div class="col-span-full">
      <x-forms.input label="Upload Data Sheet" name="data_sheet" type="file" />
    </div>
    <x-forms.divider />
    <x-forms.button>Publish</x-forms.button>
  </x-forms.form>
</x-admin.layout>