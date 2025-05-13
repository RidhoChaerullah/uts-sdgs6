<x-layout>
    <x-title>
        <h1 class="font-semibold text-3xl text-white">{{ $article->title }}</h1>
    </x-title>
    <div class="bg-white rounded-xl p-6 mb-4 ">

        <p class="text-xl font-normal text-gray-800 mb-20">{!! nl2br(e($article->content)) !!}</p>

        <a class="text-md font-normal bg-slate-800 hover:bg-slate-800/90 text-white px-5 py-3 rounded-md transition"
            href="{{ route('articles.index') }}" class="btn btn-secondary">← Kembali</a>

    </div>

    <button id="backToTop" onclick="scrollToTop()"
        class="fixed bottom-6 right-6 z-40 hidden bg-slate-800 hover:bg-slate-800/90 text-white w-12 h-12 rounded-full shadow-lg text-2xl flex items-center justify-center transition-all duration-300">
        ↑
    </button>
</x-layout>

<script>
    const backToTop = document.getElementById('backToTop');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            backToTop.classList.remove('hidden');
        } else {
            backToTop.classList.add('hidden');
        }
    });

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>
