<x-users.layout>
  <x-users.panel>
    <x-users.section>
      <x-users.heading>Careers</x-users.heading>
      {{-- Banner Section --}}
      <div class="w-full rounded-xl overflow-hidden shadow-lg">
        <div
          class="w-full min-h-[400px] bg-center bg-cover relative flex items-end p-6"
          style="background-image: url('{{ asset('/storage/images/hero/joinus2.png') }}')"
        >
          <div class="flex items-start justify-items-start w-full h-full py-6">
            <div class="text-left">
              <div class="container mx-auto">
                <div class="max-w-4xl mx-auto text-left">
                  <h2
                    class="text-4xl font-extrabold tracking-wide text-gold shadow-text sm:text-4xl uppercase px-4 py-2 mt-8 rounded-lg"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 1)"
                  >
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

  <x-users.section>
    <div class="text-center mt-14">
      <h1 class="text-3xl font-bold">Available Jobs</h1>
      <p class="text-gray-500 mt-4">Placement will be adjusted based on the results of the test and interview.</p>
    </div>
    <div class="mt-12 space-y-8 max-w-4xl mx-auto mb-14">
      <div class="mt-6 space-y-6">
          <x-users.job-card />
          <x-users.job-card />
          <x-users.job-card />
          <x-users.job-card />
          <x-users.job-card />
          <x-users.job-card />
      </div>
    </div>
  </x-users.section>

</x-users.layout>