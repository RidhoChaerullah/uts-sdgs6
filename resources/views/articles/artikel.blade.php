
<x-layout>
    <div class="mx-auto">

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

        <x-title>Artikel</x-title>
        <a href="{{ route('articles.create') }}"
            class="fixed bottom-6 right-6 z-50 bg-slate-800 hover:bg-slate-800/80 text-white w-16 h-16 rounded-full shadow-lg text-3xl flex items-center justify-center transition-all duration-300 font-semibold">
            +
        </a>


        @forelse ($articles as $article)
            <div class="bg-white rounded-xl p-6 mb-4 max-w-2xl">
                <h2 class="text-3xl font-semibold text-gray-800 mb-2">{{ $article->title }}</h2>
                <p class="text-sm text-gray-600 mb-4">{{ Str::limit($article->content, 200) }}</p>
                <div class="flex gap-2">
                    <a href="{{ route('articles.show', $article->id) }}"
                        class="text-sm bg-primary hover:bg-primary/90 text-white px-3 py-1.5 rounded-md transition">
                        Lihat
                    </a>
                    <a href="{{ route('articles.edit', $article->id) }}"
                        class="text-sm bg-slate-800 hover:bg-slate-800/90 text-white px-3 py-1.5 rounded-md transition">
                        Edit
                    </a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                        onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button onclick="confirmDelete({{ $article->id }})" class="text-sm bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded-md transition">
                            Hapus Artikel
                        </button>
                        
                    </form>
                </div>
            </div>
        @empty
            <div class="text-center text-transparant p-16">Belum ada artikel.</div>
        @endforelse

    </div>
</x-layout>

