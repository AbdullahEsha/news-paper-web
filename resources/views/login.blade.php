<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <title>Login</title>
</head>

<body class="bg-gray-50">
    <div class="flex min-h-screen items-center justify-center p-4">
        <div class="w-full max-w-md rounded-lg bg-white p-8 shadow-md">
            <h2 class="mb-6 text-center text-2xl font-bold text-gray-900">Login</h2>

            <!-- Success Message -->
            @if(session('msg'))
            <div class="mb-4 rounded-md bg-green-50 p-3 text-sm text-green-600">
                {{ session('msg') }}
            </div>
            @endif

            <!-- Error Messages -->
            @if(session('error'))
            <div class="mb-4 rounded-md bg-red-50 p-3 text-sm text-red-600">
                {{ session('error') }}
            </div>
            @endif

            @if ($errors->any())
            <div class="mb-4 rounded-md bg-red-50 p-3 text-sm text-red-600">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <!-- Email/Phone Field -->
                <div class="space-y-2">
                    <label for="email" class="text-sm font-medium text-gray-700">Email or Phone</label>
                    <div class="relative h-11 flex items-center rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <input
                            type="text"
                            id="email"
                            name="email"
                            placeholder="Enter your email or phone number"
                            class="w-full rounded-md focus:outline-none focus:ring-0 p-0 bg-transparent autofill:bg-transparent" />
                        <span class="text-gray-400">
                            <!-- User Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- Password Field -->
                <div class="space-y-2">
                    <label for="password" class="text-sm font-medium text-gray-700">Password</label>
                    <div class="relative h-11 flex items-center rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter your password"
                            class="w-full rounded-md focus:outline-none focus:ring-0 p-0 bg-transparent autofill:bg-transparent" />
                        <button
                            type="button"
                            onclick="togglePasswordVisibility('password')"
                            class="text-gray-400">
                            <!-- Eye Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye">
                                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Submit Button -->
                <button
                    type="submit"
                    class="mt-6 h-11 w-full rounded-md bg-blue-500 font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Login
                </button>
            </form>

            <!-- Register Link -->
            <div class="mt-4 text-center text-sm text-gray-600">
                Don't have an account? <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500">Register</a>
            </div>

            <!-- Separator -->
            <div class="mt-6 flex items-center">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="mx-4 text-sm text-gray-500">or</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>

            <!-- Google Sign-In Button -->
            <button
                type="button"
                class="mt-4 flex h-11 w-full items-center justify-center gap-2 rounded-md border border-gray-300 bg-white font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500"
                onclick="handleGoogleSignIn()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
                    <path
                        fill="#4285F4"
                        d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                    <path
                        fill="#34A853"
                        d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                    <path
                        fill="#FBBC05"
                        d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                    <path
                        fill="#EA4335"
                        d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                </svg>
                Sign in with Google
            </button>
        </div>
    </div>

    <!-- JavaScript for Toggle Password Visibility -->
    <script>
        function togglePasswordVisibility(fieldId) {
            const field = document.getElementById(fieldId);
            if (field.type === "password") {
                field.type = "text";
            } else {
                field.type = "password";
            }
        }

        function handleGoogleSignIn() {
            // Handle Google Sign-In logic here
            console.log("Google Sign-In clicked");
        }
    </script>
</body>

</html>
