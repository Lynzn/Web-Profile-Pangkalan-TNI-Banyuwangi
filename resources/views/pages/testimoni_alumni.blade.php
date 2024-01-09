@extends('layouts.index')
@section('heading', 'Dokumentasi Kegiatan')
@section('page')
    <span class="current">{{ 'Galeri' }} </span>
@endsection
@section('content')

    {{-- ALumni  begin --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <!-- course item -->
                @foreach ($alumni as $item)
                <div class="testimoni-alumni hover-shadow">
                    <a href="{{ $item->gambar }}" target="_blank">
                        <div class="img-wrap d-flex align-items-stretch">
                            <img src="{{$item->gambar}}" alt="Gambar Dokumentasi" class="img-landscape">
                        </div>
                    </a>
                    <h3 class="nama-alumni">{{ $item->nama_alumni}}</a></h3>
                </div>
                @endforeach
                <!-- course item -->
            </div>
            {{ $alumni->links('vendor.pagination.bootstrap-4') }}
            <!-- /course list -->
        </div>
    </section>
    {{-- ALumni   end --}}

@endsection

<style>
/* Tambahkan kelas CSS untuk gambar landscape */
.img-landscape {
    width: 100%;
    height: auto;
    object-fit: cover;
}

/* CSS untuk kelas "nama-alumni" */
.nama-alumni {
    color: grey; /* Warna teks awal (misalnya, abu-abu) */
    font-size: 16px; /* Ukuran font */
    font-weight: bold; /* Ketebalan font */
    padding: 8px 12px; /* Ruang padding di sekitar teks */
    text-align: center; /* Teks di tengah */
    border-bottom: none;
    transition: color 0.3s; /* Transisi warna selama 0.3 detik */
}

/* Saat elemen hover, ubah warna teks menjadi misalnya biru */
.nama-alumni:hover {
    color: #FFA500; /* Warna teks ketika di hover (misalnya, biru) */
}


</style>
