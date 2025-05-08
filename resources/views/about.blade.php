@extends('layouts.myapp')

@section('content')

<!-- Hero Section -->
<section class="flex justify-center md:py-28 py-12 mx-auto max-w-screen-xl">
  <div class="container px-6 mr-70 text-left">
    <h1 class="text-5xl text-black font-bold mb-10">About us</h1>
    <p class="text-xl text-justify text-gray-700 mb-6">A trusted car rental platform - easy, affordable, and reliable. We offer a wide range of well-maintained vehicles – from budget-friendly compact cars to luxurious SUVs – all available at competitive prices. Whether you're planning a business trip, family vacation, or a weekend getaway, we've got the perfect car for you.</p>
  </div>
  <div class="w-1/2 bg-no-repeat px-24 bg-cover bg-center">
    <img src="{{ asset('images/about-hero.svg') }}" alt="about img">
  </div>
</section>


<!-- Why Choose Us -->
<section class="bg-gray-50 py-16">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-10">Why Choose Us?</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="{{ asset('images/support.svg') }}" class="mx-auto h-16 mb-4" />
        <h4 class="text-xl font-semibold mb-2">24/7 Support</h4>
        <p class="text-gray-600">Our helpline is always ready to assist you.</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="{{ asset('images/price.png') }}" class="mx-auto h-16 mb-4" />
        <h4 class="text-xl font-semibold mb-2">Affordable Pricing</h4>
        <p class="text-gray-600">We offer car rentals at the most competitive prices.</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="{{ asset('images/car.png') }}" class="mx-auto h-16 mb-4" />
        <h4 class="text-xl font-semibold mb-2">Variety of Cars</h4>
        <p class="text-gray-600">Sedan, SUV, or hatchback – we’ve got it all based on your needs.</p>
      </div>
    </div>
  </div>
</section>

<!-- Video Section -->
<section class="py-16 bg-white text-center">
  <div class="max-w-4xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Service at a Glance</h2>
    <div class="aspect-w-16 aspect-h-9">
      <iframe class="rounded-lg w-full h-96" src="https://www.youtube.com/embed/36Kt8KcB4LQ" allowfullscreen></iframe>
    </div>
  </div>
</section>

<!-- Team Section -->
<section class="bg-gray-50 py-16">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-10">Meet Our Team</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="{{ asset('images/avatars/avatar_3.jpg') }}" class="rounded-full h-32 w-32 mx-auto mb-4" />
        <h4 class="text-xl font-semibold">Sabiha Rahman</h4>
        <p class="text-gray-600">Marketing Lead</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="{{ asset('images/founder.jpg') }}" class="rounded-full h-32 w-32 mx-auto mb-4" />
        <h4 class="text-xl font-semibold">Sumon Prodhan</h4>
        <p class="text-gray-600">CEO & Founder</p>
      </div> 
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="{{ asset('images/avatars/avatar_6.jpg') }}" class="rounded-full h-32 w-32 mx-auto mb-4" />
        <h4 class="text-xl font-semibold">Abir Islam</h4>
        <p class="text-gray-600">Operations Manager</p>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="py-16 bg-gray-50">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-10">Customer Testimonials</h2>
    <div class="grid md:grid-cols-2 gap-8">
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <p class="text-gray-700 italic mb-4">"Very fast and hassle-free service. I’m completely satisfied."</p>
        <img src="{{ asset('images/avatars/avatar_3.jpg') }}" class="rounded-full h-12 w-12 mx-auto mb-4" />
        <h4 class="font-semibold text-sm text-gray-800">Mahin Khan</h4>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <p class="text-gray-700 italic mb-4">"Used it for the first time, and it was an excellent experience!"</p>
        <img src="{{ asset('images/avatars/avatar_3.jpg') }}" class="rounded-full h-12 w-12 mx-auto mb-4" />
        <h4 class="font-semibold text-sm text-gray-800">Sharmin Akter</h4>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-white">
  <div class="max-w-4xl mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-10">Frequently Asked Questions (FAQ)</h2>
    <div class="space-y-6">
      <div class="bg-gray-100 p-6 rounded-lg shadow">
        <h4 class="font-semibold text-gray-700">How will I receive booking confirmation?</h4>
        <p class="text-gray-600">"You will receive a confirmation email after booking."</p>
      </div>
      <div class="bg-gray-100 p-6 rounded-lg shadow">
        <h4 class="font-semibold text-gray-700">Can I cancel a booking?</h4>
        <p class="text-gray-600">"Yes, you can cancel your booking before the rental starts."</p>
      </div>
    </div>
  </div>
</section>

@endsection
