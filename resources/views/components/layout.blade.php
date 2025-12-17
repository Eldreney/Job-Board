<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job Board - {{$title ?? "Onboarding Top Talent"}} </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* Your inline Tailwind fallback (same as you pasted) */
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */
                @layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";/* ...snip... */}}
                /* Keep the rest of your CSS here exactly */
            </style>
        @endif
         <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>

   <body class="min-h-screen bg-[#FDFDFC] text-[#1b1b18] dark:bg-[#0a0a0a] dark:text-[#EDEDEC]">
    <!-- page shell -->
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-6 lg:py-10">

        <!-- Top bar -->
        <div class="flex items-center justify-between gap-4">
            <a href="{{ url('/') }}" class="flex items-center gap-2">
                <span class="inline-flex h-9 w-9 items-center justify-center rounded-xl border border-[#e3e3e0] bg-white shadow-sm
                             dark:border-[#3E3E3A] dark:bg-[#161615]">
                    <!-- simple logo dot -->
                    <span class="h-2.5 w-2.5 rounded-full bg-[#1b1b18] dark:bg-[#eeeeec]"></span>
                </span>
                <div class="leading-tight">
                    <div class="text-sm font-semibold">Job Board</div>
                    <div class="text-xs text-[#706f6c] dark:text-[#A1A09A]">Onboarding Top Talent</div>
                </div>
            </a>

            <nav class="flex items-center gap-1 rounded-2xl border border-[#e3e3e0] bg-white p-1 shadow-sm
                        dark:border-[#3E3E3A] dark:bg-[#161615]">
                @php
                    $link = "px-3 py-1.5 text-sm rounded-xl transition";
                    $active = "bg-[#1b1b18] text-white dark:bg-[#eeeeec] dark:text-[#1C1C1A]";
                    $idle = "text-[#1b1b18]/80 hover:bg-black/5 dark:text-[#EDEDEC]/80 dark:hover:bg-white/10";
                @endphp

                <a class="{{ $link }} {{ request()->is('/') ? $active : $idle }}" href="{{ url('/') }}">Home</a>
                <a class="{{ $link }} {{ request()->is('about') ? $active : $idle }}" href="{{ url('/about') }}">About</a>
                <a class="{{ $link }} {{ request()->is('contact') ? $active : $idle }}" href="{{ url('/contact') }}">Contact</a>
            </nav>
        </div>

        <!-- Page header (stacked) -->
        <header class="mt-8">
            <div class="rounded-3xl border border-[#e3e3e0] bg-white p-6 shadow-sm
                        dark:border-[#3E3E3A] dark:bg-[#161615]">
                <h1 class="text-2xl sm:text-3xl font-semibold tracking-tight">
                    @yield('heading', 'Job Board')
                </h1>

                <p class="mt-2 text-sm text-[#706f6c] dark:text-[#A1A09A]">
                    @yield('subheading', 'Find your next role or post a new opportunity.')
                </p>

                {{-- IMPORTANT: slot/content should NOT live inside header nav only; this is optional header actions --}}
                @isset($slot)
                    <div class="mt-4">
                        {{ $slot }}
                    </div>
                @endisset
            </div>
        </header>

        <!-- Main content -->
        <main class="mt-6">
            <div class="rounded-3xl border border-[#e3e3e0] bg-white p-6 shadow-sm
                        dark:border-[#3E3E3A] dark:bg-[#161615]">
                @yield('content')
            </div>
        </main>

        <!-- Footer -->
        <footer class="mt-8 text-center text-xs text-[#706f6c] dark:text-[#A1A09A]">
            © {{ date('Y') }} Job Board
        </footer>
    </div>
</body>
</html>