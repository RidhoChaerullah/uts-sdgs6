<nav class="block w-10/12 max-w-screen-lg px-4 py-2 mx-auto bg-blend-overlay bg-black/20 shadow-md rounded-md lg:px-8 lg:py-3 mt-10"
    style="background-image: url('/img/air.jpg')" x-data="{ open: false }">
    <div class="container flex flex-wrap items-center justify-between mx-auto text-slate-800">
        <a href="/" class="mr-4 block cursor-pointer py-1.5 text-base text-white font-semibold">
            <span class="text-secondary" id="auto-type">Air</span> Bersih
        </a>

        <!-- Mobile menu toggle -->
        <button class="relative ml-auto h-6 w-6 text-inherit lg:hidden" @click="open = !open" type="button">
            <span class="absolute inset-0 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </span>
        </button>

        <!-- Desktop menu -->
        <div class="hidden lg:block">
            <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                <li><a href="/"
                        class="text-slate-50 font-semibold text-sm transition ease-in-out hover:text-secondary">Beranda</a>
                </li>
                <li><a href="{{ route('articles.index') }}"
                        class="text-slate-50 font-semibold text-sm transition ease-in-out hover:text-secondary">Artikel</a>
                </li>
                <li><a href="/kontak"
                        class="text-slate-50 font-semibold text-sm transition ease-in-out hover:text-secondary">Kontak
                        kami</a></li>
                @auth
                    <li>
                        <a href="{{ route('profile') }}"
                            class="text-slate-50 font-semibold text-sm transition ease-in-out hover:text-secondary">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                @else
                    <li>
                        <a href="/login"
                            class="text-slate-50 font-semibold text-sm transition ease-in-out hover:text-secondary">
                            Login →
                        </a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>

    <!-- Mobile menu dropdown -->
    <div class="lg:hidden mt-4" x-show="open" x-transition>
        <ul class="flex flex-col gap-2">
            <li><a href="/" class="text-slate-50 font-semibold text-sm">Beranda</a></li>
            <li><a href="{{ route('articles.index') }}" class="text-slate-50 font-semibold text-sm">Artikel</a></li>
            <li><a href="/kontak" class="text-slate-50 font-semibold text-sm">Kontak kami</a></li>
            @auth
                <li>
                    <a href="{{ route('profile') }}"
                        class="text-slate-50 font-semibold text-sm transition ease-in-out hover:text-secondary">
                        {{ Auth::user()->name }}
                    </a>
                </li>
            @else
                <li>
                    <a href="/login"
                        class="text-slate-50 font-semibold text-sm transition ease-in-out hover:text-secondary">
                        Login →
                    </a>
                </li>
            @endauth
        </ul>
    </div>
</nav>

<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

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
