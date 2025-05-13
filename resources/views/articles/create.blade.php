<x-layout>
    <x-title>
        <h1 class="font-semibold text-3xl text-white">Buat Artikel Baru</h1>
    </x-title>

    <div class="bg-white rounded-2xl p-6 pt-2 ring-gray-200">
        <form method="POST" action="{{ route('articles.store') }}">
            @csrf

            <div class="mb-6">
                <label class="block text-slate-800 font-bold text-xl mb-2">Judul</label>
                <input type="text" name="title"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition duration-200"
                    required>
            </div>

            <div class="mb-6">
                <label class="block text-slate-800 font-bold text-xl mb-2">Konten</label>
                <textarea name="content" rows="6" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition duration-200"></textarea>
            </div>

            <div class="flex justify-between items-center">
                <button type="submit"
                    class="bg-primary hover:bg-primary/90 text-white px-6 py-2 rounded-lg transition font-medium shadow">
                    Buat!
                </button>
                <a href="{{ route('articles.index') }}"
                    class="text-slate-200 bg-slate-800 hover:text-white border border-slate-300 hover:border-slate-500 px-5 py-2 rounded-lg transition font-medium">
                    ← Kembali
                </a>
            </div>
        </form>
    </div>
</x-layout>
