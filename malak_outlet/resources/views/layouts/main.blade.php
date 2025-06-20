<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MalakOutlet - Ultimate Toy & LEGO Store')</title>
    
    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.0/cdn.min.js" defer></script>
    
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
        @media (max-width: 768px) {
            .mobile-menu {
                transform: translateX(100%);
                transition: transform 0.3s ease-in-out;
            }
            .mobile-menu.open {
                transform: translateX(0);
            }
        }
    </style>
    
    @stack('styles')
</head>

<body class="text-gray-700 bg-white m-0 p-0" x-data="{ mobileMenuOpen: false }">
    <!-- Header Component -->
    @include('components.header')
    
    <!-- Navigation Component -->
    @include('components.navigation')
    
    <!-- Mobile Menu Component -->
    @include('components.mobile-menu')
    
    <!-- Main Content -->
    <main class="container mx-auto px-4" style="max-width: 1400px;">
        @yield('content')
    </main>
    
    <!-- Footer Component -->
    @include('components.footer')
    
    @stack('scripts')
</body>
</html>