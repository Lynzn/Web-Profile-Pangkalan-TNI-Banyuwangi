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
<!-- sambutan komandan dan visi misi -->
<section class="section" style="background-color: #070C4E; padding: 50px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="row align-items-center">
                    <div class="image-container">
                        <img src="https://mitratnipolri.com/wp-content/uploads/2023/06/IMG-20230614-WA0113-780x470.jpg" 
                            class="img-fluid" alt="work-image" style="width: 90%; height: auto; border-radius: 5%;">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-4 mt-lg-0 pt- pt-lg-0">
                <div class="ms-lg-4">
                    <div class="section" style="margin-top: 20px;">
                        <h4 class="title mb-4 mt-3" style="color: white; text-align: center;">Sambutan Komandan</h4>
                        <p class="text-muted para-desc" style="color: white; text-align: justify;">Kenyamanan customer merupakan prioritas utama kami dalam memberikan layanan, solusi dari permasalahan customer menjadi tanggung jawab yang penuh bagi kami.</p>
                        <p class="text-muted para-desc" style="color: white; text-align: justify;">Dalam pembuatan dan pengembangan perangkat lunak, kami selalu menjadikan permasalahan 
                        yang dihadapi customer sebagai landasan dan konsep dasar dalam proses pengembangan. Selain itu kami juga mengutamakan kualitas di atas kuantitas, demi menjaga kepercayaan customer terhadap kami.</p>
                    </div>
                </div>
            </div>
            <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 mt-4 mt-lg-0 pt- pt-lg-0">
            <div class="ms-lg-4">
                <div class="section" style="margin-top: 40px; text-align: left;">
                    <h4 style="color: white;">Visi</h4>
                    <p class="mb-0 text-muted" style="color: black; text-align: justify;">Visi Pangkalan TNI AL Banyuwangi adalah :
                        “MENJADI CENTER OF EXCELLENCE (COE) PRAJURIT KESEHATAN MATRA LAUT“ </p>
                    <h4 style="color: white;">Misi</h4>
                    <p class="mb-0 text-muted" style="color: black; text-align: justify;"> 1. Menanamkan dan membentuk prajurit kesahatan TNI AL yang bermental juang tinggi dan berjiwa Sapta Marga </p>
                    <p> 2. Membekali dan menumbuhkan prajurit kesehatan TNI AL kemampuan teknis, taktis dan profesional dalam dukungan kesehatan lapangan serta berkarakter kenyal, ulet dan dinamis.</p>
                    <p> 3. Menumbuhkan dan mengembangkan sikap profesionalisme prajurit kesehatan TNI AL sesuai bidang tugas dan profesinya.</p>
                    <p> 4. Menanamkan dan menumbuhkan prajurit kesehatan TNI AL sikap bertanggung jawab dan berintegritas tinggi dalam tugas.</p>
                    <p> 5. Membentuk prajurit kesehatan TNI AL berkesamaptaan jasmani yang prima dan operable dalam tugas operasi dan latihan.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="image-container" style="text-align: center; padding: 35px 0;">
                <img src="https://mitratnipolri.com/wp-content/uploads/2023/06/IMG-20230614-WA0113-780x470.jpg" 
                    class="img-fluid" alt="work-image" style="width: 90%; height: auto; border-radius: 5%; margin-top: 20px;">
            </div>
        </div>

    </div>
</div>

        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>

<!-- /sambutan komandan -->

<!-- simbol-->
<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5" style="padding: 40px; margin-bottom: 40px; font-weight: bold;">SIMBOL TNI ANGKATAN LAUT</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0" style="padding: 40px; margin-bottom: -60px;">
                    <img class="img-fluid rounded-circle mb-3" src="assets/images/fjabatan/simbol3.jpeg" alt="..." style="width: 200px; height: 200px;">
                    <h5>Jalesveva Jayamahe</h5>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0" style="padding: 40px; margin-bottom: -60px;">
                    <img class="img-fluid rounded-circle mb-3" src="assets/images/fjabatan/simbol1.jpeg" alt="..." style="width: 200px; height: 200px;">
                    <h5>Samapta Rumeksa</h5>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0" style="padding: 40px; margin-bottom: -60px;">
                    <img class="img-fluid rounded-circle mb-3" src="assets/images/fjabatan/simbol2.jpeg" alt="..." style="width: 200px; height: 200px;">
                    <h5>Agrapana Jalakaskaya</h5>
                </div>
            </div>
        </div>
        </div>
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
