@extends('layouts.home')
@section('content')
<!-- hero slider -->
<section class="hero-section overlay bg-cover" style="background-image: url('assets/images/laut.png');">
    <div class="container">
        <div class="row">
            <!-- Box on top of the background image -->
            <div class="col-lg-6" style="position: relative; z-index: 1;">
            <marquee direction="left" height="20" width="1200" style="color: white; background-color: transparent;">Selamat Datang di Markas Komando Pangkalan TNI Angkatan Laut Banyuwangi</marquee>
            </div>

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
                    <h2>DANLANAL BWI</h2>
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
<section class="section" style="background-color: #4E6766; padding: 40px 0; ">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-lg-6 col-md-6">
                <div class="image-container">
                    <img src="https://mitratnipolri.com/wp-content/uploads/2023/06/IMG-20230614-WA0113-780x470.jpg" 
                    class="img-fluid" alt="work-image" style="width: 100%;  height: 100%; object-fit: cover;">
                </div>
            </div>
            
            <!-- Text Section -->
            <div class="col-lg-6 col-md-6 mt-4 mt-lg-0 pt- pt-lg-0">
                <div class="ms-lg-4">
                    <div class="section text-center" style="margin-top: 20px;">
                        <h4 class="title mb-4 mt-3" style="color: white; text-align: center;">Sambutan Komandan</h4>
                        <p style="color: white; text-align: justify;">Kenyamanan customer merupakan prioritas utama kami dalam memberikan layanan, solusi dari permasalahan customer menjadi tanggung jawab yang penuh bagi kami.</p>
                        <p style="color: white; text-align: justify;">Dalam pembuatan dan pengembangan perangkat lunak, kami selalu menjadikan permasalahan 
                        yang dihadapi customer sebagai landasan dan konsep dasar dalam proses pengembangan. Selain itu kami juga mengutamakan kualitas di atas kuantitas, demi menjaga kepercayaan customer terhadap kami.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>


<!-- /sambutan komandan -->

<!--profile-keberadaan lanal-->
<div class="container">
    <div class="row">
                <!-- Content -->
                <h4 style="color: black;  text-align: center; margin-bottom: 10px; padding-top: 30px;">Profil</h4>
                    <p style="color: black; text-align: justify;">Pangkalan TNI AL Banyuwangi atau (Lanal Banyuwangi) merupakan satuan pelaksana Pangkalan Utama TNI Angkatan Laut III Jakarta dalam jajaran Koarmabar. Dengan tugas pokok dukungan logistik, administrasi, bagi unsur-unsur TNI Angkatan Laut dan melaksanakan pembinaan peran TNI Angkatan Laut dan melaksanakan pembinaan Potensi Maritim menjadi kekuatan wilayah keamanan laut.</p>

                    <h4 style="color: black; text-align: center; margin-bottom: 20px; margin-bottom: 10px;">Keberadaan Lanal Banyuwangi</h4>
                    <p style="color: black; text-align: justify;">Keberadaan Pangkalan Angkatan Laut (Lanal) Banyuwangi, di Jalan Aria Jipang, dinilai membingungkan. Pasalnya diketahui Banyuwangi tidak memiliki laut.</p>

                    <p style="color: black; text-align: justify;">Alasan keberadaan Lanal di Banyuwangi menurut Kepala Staf Angkatan Laut (Kasal) TNI AL Laksamana Suparno yang diwakili Koordinator Staf Ahli Kepala Staf Angkatan Laut (Kasal) Laksda TNI AL Hari Bowo, dalam diskusi yang digelar Fakultas Ilmu Teknik Kebumian (FITB) ITB menyebutkan hal itu sebagai dedikasi terhadap Tokoh Nasional Juanda.</p>

                    <p style="color: black; text-align: justify;">“Karena Bapak Djuanda dari Banyuwangi, jadi salah satu penghormatan kami,” jelas Laksda Hari, di Auditorium Campus Center ITB, Banyuwangi, Kamis (13/12/2012).</p>

                    <p style="color: black; text-align: justify;">Alasan kedua, kata Hari seraya bercanda, Banyuwangi terkenal karena peristiwa Banyuwangi Lautan Api. Maka dikatakan perlu adanya Lanal di Banyuwangi.</p>
                </div>
                <!-- End of Content -->
            </div>
        </div>
    </div>
</div>



<!-- simbol-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0 text-center" style="padding: 40px; margin-top: -30px;">
                    <img class="img-fluid rounded-circle mb-3 align-top" src="assets/images/fjabatan/simbol3.jpeg" alt="..." style="width: 200px; height: 200px;">
                    <h5>Jalesveva Jayamahe</h5>
                </div>
            </div>
            <div class="col-lg-4" >
                <div class="testimonial-item mx-auto mb-5 mb-lg-0 text-center" style="padding: 40px; margin-top: -30px;">
                    <img class="img-fluid rounded-circle mb-3 align-top" src="assets/images/fjabatan/simbol1.jpeg" alt="..." style="width: 200px; height: 200px;">
                    <h5>Samapta Rumeksa</h5>
                </div>
            </div>
            <div class="col-lg-4" >
                <div class="testimonial-item mx-auto mb-5 mb-lg-0 text-center" style="padding: 40px; margin-top: -30px;">
                    <img class="img-fluid rounded-circle mb-3 align-top" src="assets/images/fjabatan/simbol2.jpeg" alt="..." style="width: 200px; height: 200px;">
                    <h5>Agrapana Jalakaskaya</h5>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<!-- /simbol -->


@endsection

<style>
.text-content {
    margin-top: 80px;
    color: white;
    overflow: hidden; /* Hide overflowing text */
}

#typing-text {
    display: inline-block;
    border-right: 2px solid white; /* Create the typing cursor effect */
    white-space: nowrap; /* Prevent text from wrapping */
    margin: 0;
}

    .hero-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: black; /* Adjust the text color as needed */
    background: rgba(0, 0, 0, 0.5); /* Adjust the background color and opacity as needed */
    padding: 20px; /* Add padding around the text */
}

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
    background-color: black;
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
    color: black; /* Warna teks putih */
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

