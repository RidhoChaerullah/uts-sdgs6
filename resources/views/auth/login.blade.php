<x-layout>
    <div class="flex justify-center">
        <div class="relative flex flex-col bg-white shadow-sm border border-slate-200 w-96 rounded-lg my-6">
            <div class="relative m-2.5 items-center flex justify-center text-white h-24 rounded-md bg-blend-overlay bg-black/20"
                style="background-image: url('/img/air.jpg')">
                <h3 class="text-2xl font-semibold">Login</h3>
            </div>

            {{-- ALERT --}}
            @if (session('success'))
                <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded mx-6 mb-2 text-sm">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded mx-6 mb-2 text-sm">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST" class="flex flex-col gap-4 p-6">
                @csrf

                <div class="w-full max-w-sm min-w-[200px]">
                    <label class="block mb-2 text-sm text-slate-600">Email</label>
                    <input type="email" name="email" placeholder="contoh@gmail.com" required
                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" />
                </div>

                <div class="w-full max-w-sm min-w-[200px]">
                    <label class="block mb-2 text-sm text-slate-600">Password</label>
                    <input type="password" name="password" placeholder="admin1234" required
                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" />
                </div>

                <div class="p-6 pt-8">
                    <button type="submit"
                        class="w-full rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        Login
                    </button>

                    <p class="flex justify-center mt-6 text-sm text-slate-600">
                        Belum punya akun?
                        <a href="{{ route('register') }}" class="ml-1 text-sm font-semibold text-slate-700 underline">
                            Daftar
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-layout>
