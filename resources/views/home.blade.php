@extends('layouts.home')
@section('content')
    <!-- hero slider -->
    <section class="hero-section overlay bg-cover" data-background="{{ asset('assets/images/laut.png') }}">
        <div class="container">
            <div class="hero-slider">
            </div>
        </div>
    </section>
    <!-- /hero slider -->
    <div class="news-updates">
        <div class="container">
            <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                <div class="card-header news-title" style="background: white; font-family: Arial, sans-serif; font-size: 24px; font-weight: bold; text-transform: uppercase; color: #333;">
                    <h2>Komandan Lanal Bwi</h2>
                </div>
                    <div class="card-body">
                        @foreach ($petinggi as $file)
                        <div class="news">
                            <div class="news-image">
                                <a href="{{ URL::asset($file->gambar)}}" target="_blank">
                                    <img src="{{ URL::asset($file->gambar)}}" alt="Image" class="img-fluid" width="80%" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
                                </a>
                            </div>
                            <div class="news-content">
                                <h3 class="news-title">
                                    <a href="#">{{ Str::limit($file->judul_petinggi, 45, '...') }}</a>
                                </h3>
                                <p class="news-description">
                                    {!! Str::limit(strip_tags($file->isi), $limit = 50, $end = '...') !!}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


                <div class="col-lg-8 col-md-6">
                    <div class="card-pengumuman">
                        <div class="section-heading d-flex align-items-center justify-content-between">
                            <h2 class="text-black">Berita Lanal Banyuwangi</h2>
                            <a href="{{ route('berita') }}" class="btn btn-primary-outline">Selengkapnya<i
                                    class="fas fa-angle-double-right mx-2"></i></a>
                        </div>
                        <div class="owl-slide-3 owl-carousel">
                            @foreach ($berita as $item)
                                <div class="course-1-item">
                                    <figure class="thumbnail">
                                        <a href="{{ route('berita.detail', $item->slug_berita) }}">
                                            <img
                                                src="{{ URL::asset($item->gambar)}}"
                                                alt="Image"
                                                class="img-fluid"
                                            >
                                        </a>
                                    </figure>

                                    <div class="course-1-content">
                                        <h2>
                                            <a
                                                href="{{ route('berita.detail', $item->slug_berita) }}"
                                            >
                                                {{ Str::limit($item->judul_berita, 45, '...') }}
                                            </a>
                                        </h2>
                                        <p class="desc">
                                            {!! Str::limit(strip_tags($item->isi), $limit = 50, $end = '...') !!}
                                        </p>
                                        <div class="link mb-4">
                                            <a
                                                href="{{ route('berita.detail', $item->slug_berita) }}"
                                                class="btn btn-primary"
                                            >
                                                Baca Selanjutnya
                                            </a>
                                        </div>
                                    </div>  
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Pengumuman -->
    
<!-- Visi Misi & Sejarah -->
<section class="section">
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
            <div class="row align-items-center">
                <img src="https://webmediadigital.com/storage/images/about.png" class="img-fluid" alt="work-image">
            </div>
            <!--end row-->
        </div>
        <!--end col-->

        <div class="col-lg-6 col-md-6 mt-4 mt-lg-0 pt- pt-lg-0">
            <div class="ms-lg-4">
                <div class="section-title">
                    <span class="badge bg-soft-primary rounded-pill fw-bold">Kenali Perusahaan Kami Lebih
                        Dekat</span>
                    <h4 class="title mb-4 mt-3">Mengapa Memilih Kami ?</h4>
                    <p class="text-muted para-desc">Kenyamanan customer merupakan prioritas utama kami dalam
                        memberikan layanan, solusi dari permasalahan customer menjadi tanggung jawab yang penuh bagi
                        kami.</p>
                    <p class="text-muted para-desc mb-0">Dalam pembuatan dan pengembangan perangkat lunak, kami
                        selalu menjadikan permasalahan yang dihadapi customer sebagai landasan dan konsep dasar
                        dalam proses pengembangan. Selain itu kami juga mengutamakan kualitas diatas kuantitas, demi
                        menjaga kepercayaan customer terhadap kami.</p>
                </div>

                <div class="d-flex mt-4 pt-2">
                    <i class="uil uil-trophy h5 text-primary"></i>
                    <div class="flex-1 ms-2">
                        <h5>Professional</h5>
                        <p class="mb-0 text-muted">Kami bekerja dan berkolaborasi bersama tim profesional untuk
                            menciptakan perangkat lunak yang optimal, handal dan mudah digunakan.</p>
                    </div>
                </div>

                <div class="d-flex mt-4 pt-2">
                    <i class="uil uil-award-alt h5 text-primary"></i>
                    <div class="flex-1 ms-2">
                        <h5>Best Service </h5>
                        <p class="mb-0 text-muted">Kami menyediakan layanan terbaik dalam pengembangan perangkat
                            lunak guna menjawab semua kebutuhan digital Anda.</p>
                    </div>
                </div>
                <div class="d-flex mt-4 pt-2">
                    <i class="uil uil-comment-question h5 text-primary"></i>
                    <div class="flex-1 ms-2">
                        <h5>Online Support</h5>
                        <p class="mb-0 text-muted">Kami memberikan layanan online support yang responsif terhadap
                            pertanyaan dan permintaan bantuan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
</div>
<!--end container-->
</section>
<!-- /Alumni -->
<section class="mb-3 testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4">Student Says About Us</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                    necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img me-4"
                                style="background-image: url({{ asset('assets/images/alumni/teacher-4.jpg') }})">
                            </div>
                            <div class="text ml-2">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fas fa-quote-left"></i>
                                </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                                <p class="name">Racky Henderson</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video -->
<section class="section-sm">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center section-title justify-content-between">
                    <h2 class="mb-0 text-nowrap me-3">Video Kampus</h2>
                </div>
            </div>
        </div>
        <!-- course list -->
        <div class="row justify-content-between">
            <!-- course item -->
            <div class="col-lg-6 col-md-6 mb-3 position-relative">

                <iframe width="100%" height="310" src="https://www.youtube.com/embed/tEZbNT1Z0xs?controls=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

            </div>
            <div class="col-lg-6 col-md-6 mb-3 position-relative">
                <iframe width="100%" height="310" src="https://www.youtube.com/embed/yNgKENznK_c?controls=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <!-- course item -->
        </div>
        <!-- /course list -->
    </div>
</section>
<!-- /Video -->
@endsection

<style>
/* CSS */
.card {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    height: 100%;
    box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.2); /* Menambahkan efek 3D menggunakan box-shadow */
    transition: box-shadow 0.3s ease-in-out; /* Efek transisi saat hover */
    background-color: white;
}

.card:hover {
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3); /* Mengubah bayangan saat hover */
}

.card-title {
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.news {
    margin: 20px 0;
}

.news-image {
    margin: 10px 0;
}

.news-content {
    margin: 10px 0;
}

.news-title {
    font-size: 1.25rem;
    margin-bottom: 10px;
}

.news-description {
    text-align: center;
}


.announcement {
    margin: 20px 0; /* Jarak antara pengumuman */
}

.announcement-title {
    font-size: 1.25rem; /* Ukuran font judul pengumuman */
    margin-bottom: 10px; /* Jarak antara judul dan deskripsi */
}

.announcement-description {
    text-align: center; /* Mengatur teks pengumuman ke tengah horizontal */
}

/* Kustomisasi tampilan tombol "Baca Selanjutnya" */
.btn-primary {
    border-radius: 10px;
    padding: 10px 20px;
    font-size: 16px;
    background-color: #3498db; /* Warna latar belakang biru laut */
    color: white; /* Warna teks putih */
    transition: transform 0.2s;
    width:max-content;
}

.btn-primary:hover {
    transform: scale(1.05); /* Efek membesar saat tombol di-hover */
}

/* Kustomisasi box berita */
.course-1-item {
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek bayangan yang lebih berdimensi */
    transition: transform 0.2s ease-in-out;
}

.course-1-item:hover {
    transform: scale(1.03);
}

</style>
@push('script')
    <script>
        AOS.init();
    </script>
@endpush
