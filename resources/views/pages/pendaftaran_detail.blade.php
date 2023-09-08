@extends('layouts.index')
@section('heading', 'Informasi Pendaftaran Lanal')
@section('page')
    <a href="{{ route('pendaftaran') }}" class="text-capitalize">Informasi Pendaftaran</a>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">{{ $pendaftaran->judul_pendaftaran }} </span>
@endsection
@section('content')
    {{-- Informasi pendaftaran Detail begin --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row">
            <div class="col-lg-8">
                <div class="pendaftaran-detail">
                    <h2 class="article-title">{{ $pendaftaran->judul_pendaftaran }}</h2>
                    <div class="divider mx-auto mb-2"></div>
                    <ul class="list-inline text-center">
                        <li class="list-inline-item text-grey"><i class="fas fa-calendar-week me-2"></i>:
                            {{ tanggal('hari', $pendaftaran->created_at) }}
                        </li>
                        <li class="list-inline-item text-grey"><i class="fas fa-clock ms-2"></i>
                            {{ time_elapsed_string($pendaftaran->created_at) }}</li>
                    </ul>
                    <img src="{{ URL::asset($pendaftaran->gambar)}}" alt="" class="img-fluid">
                    <p class="mt-3">{!! $pendaftaran->isi !!}</p>
                </div>
            </div>

                <!-- .col-md-8 -->
                <div class="col-lg-6 sidebar">
                <div class="sidebar-box">
                    <h2 class="sidebar-heading pt-3" style="margin-bottom: 20px; font-family: 'Helvetica Neue', sans-serif; font-weight: bold;">Popular Articles</h2>
                    @foreach ($pendaftaran_populer as $item)
                        <div class="block-21 mb-4 d-flex">
                        <div class="sidebar">
                             <img src="{{ URL::asset($item->gambar)}}" alt="" class="sidebar-image">
                            <div class="text">
                                <h4 class="article-popular" style="margin-top: 2; font-size:medium"><a href="{{ route('pendaftaran.detail', $item->slug_pendaftaran) }}">{{ $item->judul_berita }}</a></h4>
                                <div class="meta">
                                    <div><span class="fas fa-calendar"></span>
                                        {{ tanggal('hari', $item->created_at) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    @endforeach
                </div>
                <style>
                .sidebar {
                    width: 400px; /* Atur lebar sesuai kebutuhan */
                    padding: 10px;
                    border: 1px solid #ddd;
                }

                .sidebar-image {
                    max-width: 100%;
                    height: auto;
                    display: block;
                    margin: 0 auto;
                }

                .article-title {
                    text-align: center;
                    font-size: 24px;
                    font-weight: bold;
                    margin: 20px 0;
                }

                .article-popular {
                    text-align: left;
                    font-size: 24px;
                    font-weight: bold;
                    margin: 20px 0;
                }
    
                </style>


            </div>
            
<!-- END COL -->
            </div>
        </div>
    </section>
    {{-- Informasi Detail  end --}}

@endsection
