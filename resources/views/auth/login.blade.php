<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - S2E Logistics ERP</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* S2E Brand Colors - Login Page - Using ONLY Logo Colors */
        /* Buttons - Orange (#FF6B35) */
        .bg-blue-600 { background-color: #FF6B35 !important; }
        .bg-blue-700 { background-color: #E55A2B !important; }
        .hover\:bg-blue-700:hover { background-color: #E55A2B !important; }
        
        /* Links & Text - Orange (#FF6B35) */
        .text-blue-600 { color: #FF6B35 !important; }
        
        /* Focus States - Orange */
        .focus\:ring-blue-500:focus { --tw-ring-color: #FF6B35 !important; }
        .focus\:border-blue-500:focus { border-color: #FF6B35 !important; }
        .border-blue-500 { border-color: #FF6B35 !important; }
    </style>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <div class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('images/logo/s2e-logo.svg') }}" alt="S2E Logistics" class="h-20 w-auto">
                </div>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Sign in to your account
                </p>
            </div>
            <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="email" class="sr-only">Email address</label>
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                            placeholder="Email address" value="{{ old('email') }}">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                            placeholder="Password">
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-900">
                            Remember me
                        </label>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Global Footer -->
    @include('components.footer')
</body>
</html>

