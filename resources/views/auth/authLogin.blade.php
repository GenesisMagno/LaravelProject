<x-layout>
    <!-- component -->
<div class="bg-gray-100 flex justify-center items-center h-screen w-screen">
  <!-- Left: Image -->
<div class="w-1/2 h-screen hidden lg:block">
<img src="{{ asset('images/gengen.jpg') }}" alt="Placeholder Image" class="object-cover w-full h-full">
</div>
<!-- Right: Login Form -->
<div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
<h1 class="text-2xl font-semibold mb-4">Login</h1>
<form action="{{ route('login.store') }}" method="POST">
  @csrf

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

  <!-- Remember Me Checkbox -->
  <div class="mb-4 flex items-center">
    <input type="checkbox" id="remember" name="remember" class="text-blue-500">
    <label for="remember" class="text-gray-600 ml-2">Remember Me</label>
  </div>

  <!-- Forgot Password Link -->
  <div class="mb-6 text-blue-500">
    <a href="#" class="hover:underline">Forgot Password?</a>
  </div>

  <!-- Login Button -->
  <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full mb-4">Login</button>
  <hr class="border-none  bg-gray-300 h-[1px]">
  <!-- Google Login Button -->
  <button type="button" class="w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-2 border border-gray-300 mt-4">
    <div class="flex items-center justify-center">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 48 48"><defs><path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"/><path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"/><path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"/><path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"/></svg>
    <span class="ml-4">
    Log in
    with
    Google</span>
    </div>
  </button>
</form>

<!-- Sign up  Link -->
<div class="mt-6 text-blue-500 text-center">
  <a href="{{ route('signup') }}" class="hover:underline">Sign up Here</a>
</div>

</div>
</div>
</x-layout>