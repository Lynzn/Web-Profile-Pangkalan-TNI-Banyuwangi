@extends('layouts.index')
@section('heading', 'Informasi petinggi di Pangkalan TNI AL Banyuwangi')
@section('page')
    <span class="current">Informasi Petinggi</span>
@endsection
@section('content')

    {{-- Informasi petinggi  begin --}}
    <section class="petinggi__lanal">
        <div class="container">
            <div class="row">
                @foreach ($petinggi as $item)
                    <div class="col-md-6 col-lg-4 py-3">
                        <div class="blog-entry">
                            <div class="course-1">
                                <div class="thumbnail">
                                    <a>
                                        <img src="{{ URL::asset($item->gambar)}}" alt="{{ $item->judul_petinggi }}" class="img-fluid">
                                    </a>
                                </div>
                                <div class="text bg-white petinggi p-4">
                                    <h3 class="heading"><a>{{ $item->judul_petinggi }}</a></h3>
                                    <p class="mb-4"><?= Str::limit(strip_tags($item->isi), 150, $end = '...') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Informasi petinggi  end --}}

<style>
/* Palet Warna */
.bg-navy {
    background-color: #3498db; /* Warna biru laut */
}

.text-white {
    color: white;
}

.bg-light-gray {
    background-color: #f9f9f9; /* Warna abu-abu muda */
}

.text-dark {
    color: #333; /* Warna hitam */
}

/* CSS untuk memberikan efek shadow pada kotak berita */
.blog-entry {
    border: none; /* Hapus border outline yang lama */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Tambahkan efek shadow */
    border-radius: 12px; /* Biarkan border-radius lebih besar untuk sudut yang lebih berdimensi */
    transition: transform 0.2s ease-in-out; /* Tambahkan efek scaling saat hover */
}

.blog-entry:hover {
    transform: scale(1.03); /* Efek scaling saat hover */
}


.text-muted {
    color: #666; /* Warna abu-abu terang */
}
</style>

@endsection
