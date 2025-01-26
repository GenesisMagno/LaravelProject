<x-layout>
    <!-- component -->
<div class="bg-gray-100 flex justify-center items-center h-screen w-screen">
  <!-- Left: Image -->
<div class="w-1/2 h-screen hidden lg:block">
<img src="{{ asset('images/gengen.jpg') }}" alt="Placeholder Image" class="object-cover w-full h-full">
</div>
<!-- Right: Login Form -->
<div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
<h1 class="text-2xl font-semibold mb-4">Signup</h1>
<form action="{{ route('signup.store') }}" method="POST">
    @csrf
  <!-- Username Input -->
  <div class="mb-4">
    <label for="name" class="block text-gray-600">Username</label>
    <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
    @error('name')
        <span class="text-red-700">{{ $message }}</span>
    @enderror
  </div>
  <!-- Email Input -->
  <div class="mb-4">
    <label for="email" class="block text-gray-600">Email</label>
    <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
    @error('email')
        <span class="text-red-700">{{ $message }}</span>
    @enderror
  </div>
  <!-- Password Input -->
  <div class="mb-4">
    <label for="password" class="block text-gray-600">Password</label>
    <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
    @error('password')
        <span class="text-red-700">{{ $message }}</span>
    @enderror
</div>

<div class="mb-6">
    <label for="password-confirmed" class="block text-gray-600">Confirm Password</label>
    <input type="password" id="password-confirmed" name="password_confirmation" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
    @error('password')
        <span class="text-red-700">{{ $message }}</span>
    @enderror
</div>
  
 
  <!-- Signup Button -->
  <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">Signup</button>
</form>

</div>
</div>
</x-layout>