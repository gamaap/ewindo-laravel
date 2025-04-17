<x-users.layout>

    <x-users.panel>

        <x-users.section>
            <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>




            <main class="mb-auto pt-20">
                <section class="container mx-auto sm:px-44 my-32">
                    <h2 class="text-pretty text-center text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                        <span class="text-yellow-500">{{ $job->job_name }}</span> <br> Registration Form
                    </h2>
                    <form>
                        <div class="space-y-12 mt-8">
                            <!-- DATA DIRI SECTION -->
                            <div class="border-b border-gray-900/10 pb-6">
                                <h2 class="text-base/7 font-semibold text-gray-900">Data Diri</h2>

                                <div class="grid gap-4 mb-4 grid-cols-12 mt-10">

                                    <div class="col-span-12">
                                        <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900">ID
                                            JOB
                                            <span class="text-red-500">*</span></label>
                                        <input type="text" name="first-name" id="first-name"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                            value="{{ $job->id }}">
                                    </div>

                                    <!-- NO KTP -->
                                    <div class="col-span-12">
                                        <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900">No.
                                            KTP
                                            <span class="text-red-500">*</span></label>
                                        <input type="text" name="first-name" id="first-name"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                            required>
                                    </div>
                                    <!-- NAMA LENGKAP -->
                                    <div class="col-span-12">
                                        <label for="first-name"
                                            class="block mb-2 text-sm font-medium text-gray-900">Nama
                                            Lengkap
                                            <span class="text-red-500">*</span></label>
                                        <input type="text" name="first-name" id="first-name"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                            required>
                                    </div>
                                    <div class="col-span-12">
                                        <label for="agama"
                                            class="block text-sm/6 font-medium text-gray-900">Agama</label>
                                        <div class="mt-2 grid grid-cols-1">
                                            <select id="agama" name="agama"
                                                class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                <option selected disabled>Pilih</option>
                                                <option>Islam</option>
                                                <option>Kristen</option>
                                                <option>Katolik</option>
                                                <option>Hindu</option>
                                                <option>Budha</option>
                                                <option>Konghucu</option>
                                            </select>
                                            <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4"
                                                viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"
                                                data-slot="icon">
                                                <path fill-rule="evenodd"
                                                    d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- JENIS KELAMIN -->
                                    <div class="col-span-12">
                                        <fieldset>
                                            <legend class="text-sm/6 font-semibold text-gray-900">Jenis Kelamin
                                                <span class="text-red-500">*</span>
                                            </legend>
                                            <div class="mt-2 flex gap-x-6">
                                                <div class="flex items-center gap-x-3">
                                                    <input id="push-everything" name="gender" type="radio"
                                                        class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                                                not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                                                 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                    <label for="push-everything"
                                                        class="block text-sm/6 font-medium text-gray-900">Pria</label>
                                                </div>
                                                <div class="flex items-center gap-x-3">
                                                    <input id="push-email" name="gender" type="radio"
                                                        class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                                                not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                                                 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                    <label for="push-email"
                                                        class="block text-sm/6 font-medium text-gray-900">Wanita</label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <!-- NO HANDPHONE -->
                                    <div class="col-span-12">
                                        <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900">No.
                                            Handphone 1
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="first-name" id="first-name"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                            required>
                                        <p class="mt-3 text-sm/6 text-gray-600 text-bold"><span
                                                class="text-extrabold">Wajib</span>
                                            aktif WhatsApp.</p>
                                    </div>
                                    <!-- EMAIL ADDRESS -->
                                    <div class="col-span-12">
                                        <label for="first-name"
                                            class="block mb-2 text-sm font-medium text-gray-900">Email
                                            Address
                                            <span class="text-red-500">*</span></label>
                                        <input type="email" name="first-name" id="first-name"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                            required>
                                    </div>
                                    <!-- TANGGAL LAHIR -->
                                    <div class="col-span-12">
                                        <label for="first-name"
                                            class="block mb-2 text-sm font-medium text-gray-900">Tanggal
                                            Lahir
                                            (Sesuai KTP) <span class="text-red-500">*</span></label>
                                        <input type="date" name="first-name" id="first-name"
                                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                            required>
                                    </div>
                                    <!-- ALAMAT KTP -->
                                    <div class="col-span-12">
                                        <label for="street-address"
                                            class="block text-sm/6 font-medium text-gray-900">Alamat
                                            KTP
                                            <span class="text-red-500">*</span></label>
                                        <div class="mt-2">
                                            <input type="text" name="street-address" id="street-address"
                                                autocomplete="street-address"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>
                                    <div class="col-span-3">
                                        <label for="city"
                                            class="block text-sm/6 font-medium text-gray-900">Kota/Kabupaten
                                            <span class="text-red-500">*</span></label>
                                        <div class="mt-2">
                                            <input type="text" name="city" id="city"
                                                autocomplete="address-level2"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>
                                    <div class="col-span-3">
                                        <label for="city"
                                            class="block text-sm/6 font-medium text-gray-900">Provinsi
                                            <span class="text-red-500">*</span></label>
                                        <div class="mt-2">
                                            <input type="text" name="city" id="city"
                                                autocomplete="address-level2"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>
                                    <div class="col-span-3">
                                        <label for="region"
                                            class="block text-sm/6 font-medium text-gray-900">Kecamatan
                                            <span class="text-red-500">*</span></label>
                                        <div class="mt-2">
                                            <input type="text" name="region" id="region"
                                                autocomplete="address-level1"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>
                                    <div class="col-span-3">
                                        <label for="postal-code"
                                            class="block text-sm/6 font-medium text-gray-900">Kelurahan
                                            <span class="text-red-500">*</span></label>
                                        <div class="mt-2">
                                            <input type="text" name="postal-code" id="postal-code"
                                                autocomplete="postal-code"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>
                                    <div class="col-span-12">
                                        <div class="flex gap-3">
                                            <div class="flex h-6 shrink-0 items-center">
                                                <div class="group grid size-4 grid-cols-1">
                                                    <input id="candidates" aria-describedby="candidates-description"
                                                        name="candidates" type="checkbox"
                                                        class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                                    <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25"
                                                        viewBox="0 0 14 14" fill="none">
                                                        <path class="opacity-0 group-has-checked:opacity-100"
                                                            d="M3 8L6 11L11 3.5" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path class="opacity-0 group-has-indeterminate:opacity-100"
                                                            d="M3 7H11" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="text-sm/6">
                                                <label for="candidates" class="font-medium text-gray-900">Alamat
                                                    sesuai
                                                    dengan
                                                    KTP</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ALAMAT DOMISILI -->
                                    <div class="col-span-12">
                                        <label for="street-address"
                                            class="block text-sm/6 font-medium text-gray-900">Alamat
                                            Domisili</label>
                                        <div class="mt-2">
                                            <input type="text" name="street-address" id="street-address"
                                                autocomplete="street-address"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>
                                    <div class="col-span-3">
                                        <label for="city"
                                            class="block text-sm/6 font-medium text-gray-900">Kota/Kabupaten</label>
                                        <div class="mt-2">
                                            <input type="text" name="city" id="city"
                                                autocomplete="address-level2"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>
                                    <div class="col-span-3">
                                        <label for="city"
                                            class="block text-sm/6 font-medium text-gray-900">Provinsi</label>
                                        <div class="mt-2">
                                            <input type="text" name="city" id="city"
                                                autocomplete="address-level2"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>
                                    <div class="col-span-3">
                                        <label for="region"
                                            class="block text-sm/6 font-medium text-gray-900">Kecamatan</label>
                                        <div class="mt-2">
                                            <input type="text" name="region" id="region"
                                                autocomplete="address-level1"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>
                                    <div class="col-span-3">
                                        <label for="postal-code"
                                            class="block text-sm/6 font-medium text-gray-900">Kelurahan</label>
                                        <div class="mt-2">
                                            <input type="text" name="postal-code" id="postal-code"
                                                autocomplete="postal-code"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>
                                    <!-- AGAMA -->
                                    <div class="col-span-12">
                                        <label for="country"
                                            class="block text-sm/6 font-medium text-gray-900">Country</label>
                                        <div class="mt-2 grid grid-cols-1">
                                            <select id="country" name="country" autocomplete="country-name"
                                                class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                <option selected disabled>Pilih</option>
                                                <option>Islam</option>
                                                <option>Kristen</option>
                                                <option>Katolik</option>
                                                <option>Hindu</option>
                                                <option>Budha</option>
                                                <option>Konghucu</option>
                                            </select>
                                            <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4"
                                                viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"
                                                data-slot="icon">
                                                <path fill-rule="evenodd"
                                                    d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- STATUS MARITAL -->
                                    <div class="col-span-12">
                                        <fieldset>
                                            <legend class="text-sm/6 font-semibold text-gray-900">Menikah <span
                                                    class="text-red-500">*</span></legend>
                                            <div class="mt-2 flex gap-x-6">
                                                <div class="flex items-center gap-x-3">
                                                    <input id="lajang" name="status-marital" type="radio"
                                                        class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                      not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                      disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                    <label for="lajang"
                                                        class="block text-sm/6 font-medium text-gray-900">Lajang</label>
                                                </div>
                                                <div class="flex items-center gap-x-3">
                                                    <input id="menikah" name="status-marital" type="radio"
                                                        class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                      not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                      disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                    <label for="menikah"
                                                        class="block text-sm/6 font-medium text-gray-900">Menikah</label>
                                                </div>
                                                <div class="flex items-center gap-x-3">
                                                    <input id="cerai-duda" name="status-marital" type="radio"
                                                        class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                      not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                      disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                    <label for="cerai-duda"
                                                        class="block text-sm/6 font-medium text-gray-900">Cerai</label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <!-- PENDIDIKAN SECTION -->
                            <div class="border-b border-gray-900/10 pb-6">
                                <h2 class="text-base/7 font-semibold text-gray-900">Pendidikan</h2>

                                <div class="grid gap-4 mb-4 grid-cols-12 mt-10">
                                    <!-- PENDIDIKAN TERAKHIR -->
                                    <div class="col-span-12">
                                        <label for="country"
                                            class="block text-sm/6 font-medium text-gray-900">Pendidikan
                                            Terakhir</label>
                                        <div class="mt-2 grid grid-cols-1">
                                            <select id="country" name="country" autocomplete="country-name"
                                                class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                <option selected disabled>Pilih</option>
                                                <option>SD</option>
                                                <option>SMP</option>
                                                <option>SMA</option>
                                                <option>SMK</option>
                                                <option>S1</option>
                                                <option>S2</option>
                                                <option>S3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- INSTITUSI -->
                                    <div class="col-span-12">
                                        <label for="street-address"
                                            class="block text-sm/6 font-medium text-gray-900">Nama
                                            Institusi / Universitas</label>
                                        <div class="mt-2">
                                            <input type="text" name="street-address" id="street-address"
                                                autocomplete="street-address"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                                        </div>
                                    </div>
                                    <!-- PROGRAM STUDI -->
                                    <div class="col-span-12 mt-2">
                                        <label for="street-address"
                                            class="block text-sm/6 font-medium text-gray-900">Program
                                            Studi / Jurusan</label>
                                        <div class="mt-2">
                                            <input type="text" name="street-address" id="street-address"
                                                autocomplete="street-address"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                                        </div>
                                    </div>
                                    <!-- PROGRAM STUDI -->
                                    <div class="col-span-12 mt-2">
                                        <label for="street-address"
                                            class="block text-sm/6 font-medium text-gray-900">Tahun
                                            Kelulusan</label>
                                        <div class="mt-2">
                                            <input type="text" name="street-address" id="street-address"
                                                autocomplete="street-address"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                                        </div>
                                    </div>
                                    <!-- PROGRAM STUDI -->
                                    <div class="col-span-12 mt-2">
                                        <label for="street-address"
                                            class="block text-sm/6 font-medium text-gray-900">Nilai /
                                            IPK
                                            Akhir</label>
                                        <div class="mt-2">
                                            <input type="text" name="street-address" id="street-address"
                                                autocomplete="street-address"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PENGALAMAN KERJA SECTION -->
                            <div x-data="experienceForm()" class="border-b border-gray-900/10 pb-6">
                                <h2 class="text-base/7 font-semibold text-gray-900">Pengalaman Kerja</h2>

                                <div class="grid gap-4 mb-4 grid-cols-12 mt-10">
                                    <!-- Pilihan Ada/Tidak Ada Pengalaman -->
                                    <div class="col-span-12">
                                        <fieldset>
                                            <legend class="text-sm/6 font-semibold text-gray-900">Pengalaman Kerja
                                                <span class="text-red-500">*</span>
                                            </legend>
                                            <div class="mt-2 flex gap-x-6">
                                                <div class="flex items-center gap-x-3">
                                                    <input id="ada-pengalaman" name="pengalaman-kerja" type="radio"
                                                        value="1" x-model="hasExperience"
                                                        class="relative size-4 appearance-none rounded-full border-gray-300 bg-white checked:bg-indigo-600 focus:outline-none">
                                                    <label for="ada-pengalaman"
                                                        class="block text-sm/6 font-medium text-gray-900">Ya,
                                                        Ada</label>
                                                </div>
                                                <div class="flex items-center gap-x-3">
                                                    <input id="tidak-ada-pengalaman" name="pengalaman-kerja"
                                                        type="radio" value="0" x-model="hasExperience"
                                                        class="relative size-4 appearance-none rounded-full border-gray-300 bg-white checked:bg-indigo-600 focus:outline-none">
                                                    <label for="tidak-ada-pengalaman"
                                                        class="block text-sm/6 font-medium text-gray-900">Tidak
                                                        Ada</label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <!-- Formulir Pengalaman -->
                                    <div class="col-span-12 mt-6" x-show="hasExperience == 1" x-transition>
                                        <template x-for="(experience, index) in experiences" :key="index">
                                            <div class="p-4 mb-4 rounded-md  relative">
                                                <div class="grid gap-4 grid-cols-12">
                                                    <div class="col-span-12">
                                                        <label class="text-sm font-medium text-gray-700">Nama
                                                            Perusahaan</label>
                                                        <input type="text" x-model="experience.nama_perusahaan"
                                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                                    </div>
                                                    <div class="col-span-12">
                                                        <label class="text-sm font-medium text-gray-700">Posisi</label>
                                                        <input type="text" x-model="experience.posisi"
                                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                                    </div>
                                                    <div class="col-span-12">
                                                        <label class="text-sm font-medium text-gray-700">Jenis
                                                            Pekerjaan</label>
                                                        <input type="text" x-model="experience.jenis_pekerjaan"
                                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                                    </div>
                                                    <!-- Tambah input lain kalau mau -->
                                                </div>

                                                <!-- Tombol Hapus Form -->
                                                <button type="button" @click="removeExperience(index)"
                                                    class="absolute top-2 right-2 text-red-500 hover:text-red-700">
                                                    <span
                                                        class="flex items-center justify-center w-6 h-6 rounded-full bg-red-500 text-white text-sm hover:bg-red-600">X</span>
                                                </button>
                                            </div>
                                        </template>

                                        <!-- Tombol Tambah Form -->
                                        <button type="button" @click="addExperience()"
                                            class="mt-4 inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                                            Tambah Pengalaman
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Alpine.js script -->
                            <script>
                                function experienceForm() {
                                    return {
                                        hasExperience: null, // 0 = tidak ada, 1 = ada
                                        experiences: [],
                                        addExperience() {
                                            this.experiences.push({
                                                nama_perusahaan: '',
                                                posisi: '',
                                                jenis_pekerjaan: '',
                                                // tambah field lain kalau perlu
                                            });
                                        },
                                        removeExperience(index) {
                                            this.experiences.splice(index, 1);
                                        }
                                    }
                                }
                            </script>


                            <!-- INFORMASI TAMBAHAN SECTION -->
                            <div class="border-b border-gray-900/10 pb-6">
                                <h2 class="text-base/7 font-semibold text-gray-900">Informasi Tambahan</h2>

                                <div class="grid gap-4 mb-4 grid-cols-12 mt-10">
                                    <!-- KEAHLIAN KHUSUS -->
                                    <div class="col-span-12">
                                        <label for="about"
                                            class="block text-sm/6 font-medium text-gray-900">Keahlian
                                            Khusus</label>
                                        <div class="mt-2">
                                            <textarea name="about" id="about" rows="3"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                                            <p class="mt-3 text-sm/6 text-gray-600">Bersifat teknis.</p>
                                        </div>
                                    </div>
                                    <!-- RIWAYAT KESEHATAN -->
                                    <div class="col-span-12">
                                        <fieldset>
                                            <legend class="text-sm/6 font-semibold text-gray-900">Riwayat
                                                Kesehatan<span class="text-red-500">*</span></legend>
                                            <div class="mt-2 flex gap-x-6">
                                                <div class="flex items-center gap-x-3">
                                                    <input id="ada-riwayat" name="riwayat-kesehatan" type="radio"
                                                        class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                      not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                      disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                    <label for="ada-riwayat"
                                                        class="block text-sm/6 font-medium text-gray-900">Ada</label>
                                                </div>
                                                <div class="flex items-center gap-x-3">
                                                    <input id="tidak-ada-riwayat" name="riwayat-kesehatan"
                                                        type="radio"
                                                        class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                      not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                      disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                    <label for="tidak-ada-riwayat"
                                                        class="block text-sm/6 font-medium text-gray-900">Tidak
                                                        Ada</label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <!-- RIWAYAT KESEHATAN TEXTBOX -->
                                    <div class="col-span-12">
                                        <label for="about"
                                            class="block text-sm/6 font-medium text-gray-900">Riwayat
                                            Kesehatan</label>
                                        <div class="mt-2">
                                            <textarea name="about" id="about" rows="3"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                                placeholder="Contoh: Buta Warna, Bronkitis, Hepatitis, HIV/AIDS"></textarea>
                                            <p class="mt-3 text-sm/6 text-gray-600">Penyakit Bawaan.</p>
                                        </div>
                                    </div>
                                    <!-- SEDIA KERJA -->
                                    <div class="col-span-12">
                                        <fieldset>
                                            <legend class="text-sm/6 font-semibold text-gray-900">Ketersediaan
                                                Bekerja
                                                di
                                                Seluruh
                                                Plant PT Ewindo<span class="text-red-500">*</span></legend>
                                            <div class="mt-2 flex gap-x-6">
                                                <div class="flex items-center gap-x-3">
                                                    <input id="bersedia-kerja" name="bersedia-kerja" type="radio"
                                                        class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                      not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                      disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                    <label for="bersedia-kerja"
                                                        class="block text-sm/6 font-medium text-gray-900">Ya</label>
                                                </div>
                                                <div class="flex items-center gap-x-3">
                                                    <input id="tidak-bersedia-kerja" name="bersedia-kerja"
                                                        type="radio"
                                                        class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white 
                      not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0 
                      disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                                                    <label for="tidak-bersedia-kerja"
                                                        class="block text-sm/6 font-medium text-gray-900">Tidak</label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <!-- INFO LOWONGAN -->
                                    <div class="col-span-12">
                                        <label label label label for="about"
                                            class="block text-sm/6 mb-2 font-medium text-gray-900">Info
                                            Lowongan</label>
                                        <div class="flex gap-3">
                                            <div class="flex h-6 shrink-0 items-center">
                                                <div class="group grid size-4 grid-cols-1">
                                                    <input id="candidates" aria-describedby="candidates-description"
                                                        name="candidates" type="checkbox"
                                                        class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                                    <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25"
                                                        viewBox="0 0 14 14" fill="none">
                                                        <path class="opacity-0 group-has-checked:opacity-100"
                                                            d="M3 8L6 11L11 3.5" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path class="opacity-0 group-has-indeterminate:opacity-100"
                                                            d="M3 7H11" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="text-sm/6">
                                                <label for="candidates" class="font-medium text-gray-900">Website
                                                    PT
                                                    Ewindo</label>
                                            </div>
                                        </div>
                                        <div class="flex gap-3">
                                            <div class="flex h-6 shrink-0 items-center">
                                                <div class="group grid size-4 grid-cols-1">
                                                    <input id="candidates" aria-describedby="candidates-description"
                                                        name="candidates" type="checkbox"
                                                        class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                                    <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25"
                                                        viewBox="0 0 14 14" fill="none">
                                                        <path class="opacity-0 group-has-checked:opacity-100"
                                                            d="M3 8L6 11L11 3.5" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path class="opacity-0 group-has-indeterminate:opacity-100"
                                                            d="M3 7H11" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="text-sm/6">
                                                <label for="candidates"
                                                    class="font-medium text-gray-900">Instagram</label>
                                            </div>
                                        </div>
                                        <div class="flex gap-3">
                                            <div class="flex h-6 shrink-0 items-center">
                                                <div class="group grid size-4 grid-cols-1">
                                                    <input id="candidates" aria-describedby="candidates-description"
                                                        name="candidates" type="checkbox"
                                                        class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                                    <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25"
                                                        viewBox="0 0 14 14" fill="none">
                                                        <path class="opacity-0 group-has-checked:opacity-100"
                                                            d="M3 8L6 11L11 3.5" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path class="opacity-0 group-has-indeterminate:opacity-100"
                                                            d="M3 7H11" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="text-sm/6">
                                                <label for="candidates" class="font-medium text-gray-900">Rekan /
                                                    Kerabat</label>
                                            </div>
                                        </div>
                                        <div class="flex gap-3">
                                            <div class="flex h-6 shrink-0 items-center">
                                                <div class="group grid size-4 grid-cols-1">
                                                    <input id="candidates" aria-describedby="candidates-description"
                                                        name="candidates" type="checkbox"
                                                        class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                                    <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25"
                                                        viewBox="0 0 14 14" fill="none">
                                                        <path class="opacity-0 group-has-checked:opacity-100"
                                                            d="M3 8L6 11L11 3.5" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path class="opacity-0 group-has-indeterminate:opacity-100"
                                                            d="M3 7H11" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="text-sm/6">
                                                <label for="candidates"
                                                    class="font-medium text-gray-900">Lainnya</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ATTACHMENTS SECTION -->
                            <div class="border-b border-gray-900/10 pb-6">
                                <h2 class="text-base/7 font-semibold text-gray-900">Attachments</h2>

                                <div class="grid gap-4 mb-4 grid-cols-12 mt-10">
                                    <div class="col-span-12">
                                        <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900">Pas
                                            Photo</label>
                                        <div
                                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <div class="text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="mx-auto size-12 text-gray-300">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                                </svg>
                                                <div class="mt-4 flex text-sm/6 text-gray-600">
                                                    <label for="file-upload"
                                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="file-upload" type="file"
                                                            class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs/5 text-gray-600">PNG, JPG, JPEG, PDF up to 1 MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12">
                                        <label for="cover-photo"
                                            class="block text-sm/6 font-medium text-gray-900">Curriculum
                                            Vitae (CV)</label>
                                        <div
                                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <div class="text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="mx-auto size-12 text-gray-300">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                                </svg>
                                                <div class="mt-4 flex text-sm/6 text-gray-600">
                                                    <label for="file-upload"
                                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="file-upload" type="file"
                                                            class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs/5 text-gray-600">PNG, JPG, JPEG, PDF up to 1 MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12">
                                        <label for="cover-photo"
                                            class="block text-sm/6 font-medium text-gray-900">Kartu
                                            Tanda
                                            Penduduk (KTP)</label>
                                        <div
                                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <div class="text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="mx-auto size-12 text-gray-300">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                                </svg>
                                                <div class="mt-4 flex text-sm/6 text-gray-600">
                                                    <label for="file-upload"
                                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="file-upload" type="file"
                                                            class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs/5 text-gray-600">PNG, JPG, JPEG, PDF up to 1 MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12">
                                        <label for="cover-photo"
                                            class="block text-sm/6 font-medium text-gray-900">Kartu
                                            Keluarga
                                            (KK)</label>
                                        <div
                                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <div class="text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="mx-auto size-12 text-gray-300">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                                </svg>
                                                <div class="mt-4 flex text-sm/6 text-gray-600">
                                                    <label for="file-upload"
                                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="file-upload" type="file"
                                                            class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs/5 text-gray-600">PNG, JPG, JPEG, PDF up to 1 MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12">
                                        <label for="cover-photo"
                                            class="block text-sm/6 font-medium text-gray-900">Ijazah
                                            Terakhir</label>
                                        <div
                                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <div class="text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="mx-auto size-12 text-gray-300">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                                </svg>
                                                <div class="mt-4 flex text-sm/6 text-gray-600">
                                                    <label for="file-upload"
                                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="file-upload" type="file"
                                                            class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs/5 text-gray-600">PNG, JPG, JPEG, PDF up to 1 MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12">
                                        <label for="cover-photo"
                                            class="block text-sm/6 font-medium text-gray-900">Sertifikasi
                                            Pendukung</label>
                                        <div
                                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <div class="text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="mx-auto size-12 text-gray-300">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                                </svg>
                                                <div class="mt-4 flex text-sm/6 text-gray-600">
                                                    <label for="file-upload"
                                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="file-upload" type="file"
                                                            class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs/5 text-gray-600">PNG, JPG, JPEG, PDF up to 1 MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- BUTTON -->
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="submit"
                                class="rounded-md bg-yellow-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-yellow-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">Apply</button>
                        </div>
                    </form>
                </section>
            </main>

        </x-users.section>

    </x-users.panel>

</x-users.layout>
