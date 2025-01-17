<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Student Management Portal</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
  <!-- Login Page -->
  <div class="max-w-md w-full bg-white shadow-md rounded-lg p-6">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Sign in to your account</h2>
    <p class="text-center text-gray-500 mb-6">Enter your email & password to login</p>
    <form method="post" action="{{url('post-login')}}">@csrf
      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
        <input id="email" type="email" name="email" value="{{old('email')}}"
          placeholder="example@test.com"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"/>
        @error('email')
          <span class="text-red-500 text-sm">{{$message}}</span>
        @enderror
      </div>

      <div class="mb-4">
        <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
        <input id="password" type="password" name="password" placeholder="********"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"/>
        @error('password')
          <span class="text-red-500 text-sm">{{$message}}</span>
        @enderror
      </div>

      <!-- Remember Me -->
      <div class="flex items-center justify-between mb-6">
        <label class="inline-flex items-center">
          <input
            type="checkbox"
            id="remember"
            class="form-checkbox text-blue-600"
          />
          <span class="ml-2 text-gray-700">Remember Me</span>
        </label>
      </div>
      <div>
        <button type="submit"
          class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
          Sign In
        </button>
      </div>
    </form>
  </div>
</body>
</html>
