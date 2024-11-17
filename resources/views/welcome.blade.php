<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased bg-gradient-to-r from-[#7b5e57] via-[#b89f91] to-[#d7c6bf] text-white">

    <div class="relative min-h-screen flex flex-col items-center justify-center">
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <div class="relative z-10 w-full max-w-7xl px-6">
            <!-- Navbar -->
            <header class="flex justify-between items-center py-6">
               
                <nav class="space-x-6">
                    @if (Route::has('login'))
                         <!-- Login and Register Buttons -->
                <div class="space-x-4 mt-8">
                    <a href="{{ route('login') }}" class="bg-transparent border-2 text-[#FF2D20] py-2 px-6 rounded-md hover:bg-[#FF2D20] hover:text-white transition duration-300">Login</a>
                    <a href="{{ route('register') }}" class="bg-transparent border-2 border-white  py-2 px-6 rounded-md hover:bg-white hover:text-[#FF2D20] transition duration-300">Register</a>
                </div>
                    @endif
                </nav>
            </header>

            <!-- Main Content -->
            <main class="flex flex-col items-center justify-center py-16 space-y-6">
                <h1 class="text-5xl font-bold text-center animate__animated animate__fadeIn animate__delay-1s">Welcome!</h1>
                
            </main>
        </div>
    </div>
</body>
</html>
