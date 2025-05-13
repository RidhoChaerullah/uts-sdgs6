<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SDGs 6 - Air Bersih</title>
    <link rel="icon" type="image/x-icon" href="img/favicon-32x32.png">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
</head>

<body class="h-full">

    <div class="bg-white" x-data="{ isOpen: false }">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <!-- logo atau konten lainnya -->
                </div>
                <div class="flex lg:hidden">
                    <button type="button" @click="isOpen = true"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white">
                        <span class="sr-only">Open main menu</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="/"
                        class="text-sm font-semibold text-white hover:text-secondary transition ease-in-out duration-100">Beranda</a>
                    <a href="{{ route('articles.index') }}"
                        class="text-sm font-semibold text-white hover:text-secondary transition ease-in-out duration-100">Artikel</a>
                    <a href="/kontak"
                        class="text-sm font-semibold text-white hover:text-secondary transition ease-in-out duration-100">Kontak
                        kami</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    @auth
                        
                        <a href="{{ route('profile') }}"
                            class="text-slate-50 font-semibold text-sm transition ease-in-out hover:text-secondary">
                            {{ Auth::user()->name }}
                        </a>
                        
                    @else
                        
                        <a href="/login"
                            class="text-slate-50 font-semibold text-sm transition ease-in-out hover:text-secondary">
                            Login →
                        </a>
                        
                    @endauth
                </div>
            </nav>

            <!-- Mobile menu (backdrop) -->
            <div x-show="isOpen" x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" @click="isOpen = false" class="fixed inset-0 z-40 bg-black/50"></div>

            <!-- Mobile menu (panel) -->
            <div x-show="isOpen" x-transition:enter="transition ease-out duration-200 transform"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in duration-150 transform" x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full"
                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <img class="h-8 w-auto"
                            src="img/android-chrome-192x192.png" alt="Logo" />
                    </a>
                    <button @click="isOpen = false" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="/"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Beranda</a>
                            <a href="{{ route('articles.index') }}"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Artikel</a>
                            <a href="/kontak"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Kontak
                                kami</a>
                        </div>
                        @auth
                            
                            <a href="{{ route('profile') }}"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">
                                {{ Auth::user()->name }}
                            </a>
                            
                        @else
                            
                            <a href="/login"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">
                                Login →
                            </a>
                            
                        @endauth
                    </div>
                </div>
            </div>
        </header>
        <!-- Hero section -->
        <div class="relative isolate min-h-screen px-6 pt-14 lg:px-8 bg-center bg-cover bg-blend-overlay bg-black/50"
            style="background-image: url('/img/air.jpg')">
            <div class="mx-auto max-w-xl py-32 sm:py-48 lg:py-16">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div
                        class="relative rounded-full px-3 py-1 text-sm text-slate-200 ring-1 ring-slate-100/50 hover:ring-slate-100/80">
                        Klik untuk membaca artikel. <a href="{{ route('articles.index') }}" class="font-semibold text-secondary"><span
                                class="absolute inset-0" aria-hidden="true"></span>Mulai baca<span
                                aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
                <div class="text-center">
                    <h1 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">Ayo jaga</h1>
                    <h1 class="text-5xl py-5 font-semibold tracking-tight text-white sm:text-7xl"><span
                            class="text-secondary" id="auto-type"></span></h1>
                    <h1 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">bersih kita</h1>
                    <p class="mt-8 text-lg font-medium text-slate-200 sm:text-xl">Air bersih sangat penting untuk kesehatan, kehidupan, dan lingkungan.
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="{{ route('articles.index') }}" class="text-sm font-semibold text-white hover:text-secondary">Lebih lanjut
                            <span aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script>
    var typed = new Typed('#auto-type', {
        strings: ['Air', 'Water', '水', 'น้ำ', 'Banyu', 'Cai', 'Wasser', 'Voda', 'Aqua', 'Aigua', 'Vatten',
            'Woda', 'Oluwa'
        ],
        typeSpeed: 100,
        backSpeed: 100,
        loop: true
    });
</script>

</html>
