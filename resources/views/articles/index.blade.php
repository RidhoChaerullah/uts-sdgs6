@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Artikel</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">+ Buat Artikel</a>
    @foreach ($articles as $article)
        <div class="card mb-2">
            <div class="card-body">
                <h4>{{ $article->title }}</h4>
                <a href="{{ route('articles.show', $article->id) }}" class="btn btn-sm btn-info">Lihat</a>
                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
