@extends('layouts.index')
@section('heading', 'Dokumentasi Kegiatan')
@section('page')
    <a href="{{ route('alumni') }}" class="text-capitalize">Dokumentasi Kegiatan</a>
    <span class="mx-3 fas fa-angle-right"></span>
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
                            <div class="img" style="background-image: url({{$item->gambar}});"></div>
                        </div>
                    </a>
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
