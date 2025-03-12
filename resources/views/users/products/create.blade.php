<x-users.layout>
  <x-users.section>
    <x-users.heading>Request A Quotation</x-users.heading>
    <p class="mt-1 text-sm/6 text-gray-600">For a more accurate and tailored quotation, kindly provide your detailed requirements when contacting us.</p>
    <p class="mt-1 text-sm/6 text-gray-600">This will enable us to better understand your needs and offer a precise proposal.</p>
    <x-forms.form method="POST" action="/products/slug">
      <div class="grid gap-4 mb-4 grid-cols-10">
        <div class="col-span-2">
          <x-forms.select label="Title" name="title">
            <option>Mr.</option>
            <option>Mrs.</option>
            <option>Miss.</option>
            <option>Ms.</option>
          </x-forms.select>
        </div>
        <div class="col-span-4">
          <x-forms.input label="First Name" name="first_name" />
        </div>
        <div class="col-span-4">
          <x-forms.input label="Last Name" name="last_name" />
        </div>
        <div class="col-span-10">
          <x-forms.input label="Email" name="email" type="email" />
        </div>
        <div class="col-span-10">
          <x-forms.input label="Company Name" name="company" />
        </div>
        <div class="col-span-5">
          <x-forms.input label="Phone Number" name="phone" />
        </div>
        <div class="col-span-5">
          <x-forms.input label="Country" name="country" />
        </div>
        <div class="col-span-5">
          <x-forms.input label="Subject" name="subject" value="Request A Quotation" disabled />
        </div>
        <div class="col-span-5">
          <x-forms.input label="Product" name="product" />
        </div>
        <div class="col-span-10">
          <x-forms.textarea label="Message" name="message" />
        </div>
      </div>
      <x-forms.divider />
      <div class="text-center">
        <x-forms.button>Request</x-forms.button>
      </div>
    </x-forms.form>
  </x-users.section>
</x-users.layout>