@extends('layouts.home')
@section('content')
<section class="hero-section bg-cover" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/images/banner.jpg');  background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    object-fit: cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <marquee direction="left" height="20" width="1200" style="color: white; background-color: transparent;">Selamat Datang di Markas Komando Pangkalan Utama TNI Angkatan Laut V Banyuwangi</marquee>
            </div>
        </div>

        <h1 class="mt-5">
            <a href="<?= url('struktur_organisasi') ?>" class="text-white" target="_blank">
                Struktur Organisasi
            </a>
        </h1>
    </div>
</section>


    <div class="news-updates">
        <div class="container">
            <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                <div class="card-header news-title" style="background: white; font-family: Arial, sans-serif; font-size: 24px; font-weight: bold; text-transform: uppercase; color: #333;">
                    <h2>DANLANAL BWI</h2>
                </div>
                    <div class="card-body">
                    <?php
                    use App\Models\Petinggi_Model;
                    $komandan = Petinggi_Model::find(8);
                    ?>
                        <div class="news">
                            <div class="news-image">
                                <img src="<?= $komandan['gambar'] ?>" alt="Image" class="img-fluid" width="80%" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
                            </div>
                            <div class="news-content">
                                <h3 class="news-title">
                                    <a href="#"><?= $komandan['judul_petinggi'] ?></a>
                                </h3>
                                <p class="news-description">
                                    <?= $komandan['isi'] ?>
                                </p>
                            </div>
                        </div>
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
<!-- sambutan komandan -->
<section class="section" style="background-color: #4E6766; padding: 40px 0; ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="image-container">
                    <img src="https://jatim.teraskata.com/wp-content/uploads/2022/06/Screenshot_2022_0624_202520.jpg" 
                    class="img-fluid" alt="work-image" style="width: 100%;  height: 100%; object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-4 mt-lg-0 pt- pt-lg-0">
                <div class="ms-lg-4">
                    <div class="section text-center" style="margin-top: 20px;">
                        <h4 class="title mb-4 mt-3" style="color: white; text-align: center;">Sambutan Komandan</h4>
                        <p style="color: white; text-align: justify;">Pangkalan Utama TNI Angkatan Laut V Banyuwangi atau Lanal Banyuwangi adalah Pangkalan TNI Angkatan Laut di bawah Pembinaan Komandan Pangkalan utama TNI Angkatan Laut V Surabaya. </p>
                        <p style="color: white; text-align: justify;">Pangkalan Utama TNI Angkatan Laut V Banyuwangi bertekad untuk menjadi garda terdepan dalam menjaga kedaulatan laut dan keamanan maritim di wilayah tanggung jawab kami. Melalui inovasi, dedikasi,
                         dan kerja sama yang erat dengan semua pihak terkait, kami berkomitmen untuk mewujudkan laut yang aman, damai, dan sejahtera</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- /sambutan komandan -->

<!--profile-keberadaan lanal-->
<div class="container">
    <div class="row">
                <h4 style="color: black;  text-align: center; margin-bottom: 10px; padding-top: 30px;">Profile Lanal Banyuwangi</h4>
                    <p style="color: black; text-align: justify;">Pangkalan Utama TNI Angkatan Laut V Banyuwangi atau Lanal Banyuwangi adalah Pangkalan TNI Angkatan Laut di bawah Pembinaan Komandan Pangkalan utama TNI Angkatan Laut V Surabaya. </p>

                    <p style="color: black; text-align: justify;">dengan tugas pokok menyelenggarakan dukungann administrasi dan logistik unsur-unsur TNI Angkatan Laut yang meliputi kapal, pesawat udara, dan marinir.
                melaksanakan patkamlatas, pemberdayaan potensi maritim dengan memanfaatkan sarannan dan prasarana yang dimiliki Pangkalan, serta menyelenggarakan dukungan bagi kesatuan non TNI Angkatan Laut sesuai dengan fungsi dan kebutuhan</p>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- simbol logo-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-2" style="margin-left: 30px;"> 
                <div class="testimonial-item mx-auto mb-5 mb-lg-0 text-center d-flex align-items-center flex-column" style="padding: 20px; margin-top: -15px;">
                    <img class="img-fluid rounded-circle mb-3 align-top" src="assets/images/fjabatan/angkatanlaut.png" alt="..." style="width: 150px; height: 150px;">
                    <h5 style="font-size: 14px;">Jalesveva Jayamahe</h5>
                </div>
            </div>
            <div class="col-lg-2" style="margin-left: 30px;">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0 text-center d-flex align-items-center flex-column" style="padding: 20px; margin-top: -15px;">
                    <img class="img-fluid rounded-circle mb-3 align-top" src="assets/images/fjabatan/armadaRI.png" alt="..." style="width: 150px; height: 150px;">
                    <h5 style="font-size: 14px;">Ekapada Banda Jala Nusa</h5>
                </div>
            </div>
            <div class="col-lg-2" style="margin-left: 30px;"> 
                <div class="testimonial-item mx-auto mb-5 mb-lg-0 text-center d-flex align-items-center flex-column" style="padding: 20px; margin-top: -15px;">
                    <img class="img-fluid rounded-circle mb-3 align-top" src="assets/images/fjabatan/armada2.png" alt="..." style="width: 150px; height: 150px;">
                    <h5 style="font-size: 14px;">Ghora Wira Madya Jala</h5>
                </div>
            </div>
            <div class="col-lg-2" style="margin-left: 30px;"> 
                <div class="testimonial-item mx-auto mb-5 mb-lg-0 text-center d-flex align-items-center flex-column" style="padding: 20px; margin-top: -15px;">
                    <img class="img-fluid rounded-circle mb-3 align-top" src="assets/images/fjabatan/lantamalV.png" alt="..." style="width: 150px; height: 150px;">
                    <h5 style="font-size: 14px;">Jayastu Jalanidhi Sayati</h5>
                </div>
            </div>
            <div class="col-lg-2" style="margin-left: 30px;"> 
                <div class="testimonial-item mx-auto mb-5 mb-lg-0 text-center d-flex align-items-center flex-column" style="padding: 20px; margin-top: -15px;">
                    <img class="img-fluid rounded-circle mb-3 align-top" src="assets/images/fjabatan/lanalbwi.png" alt="..." style="width: 150px; height: 150px;">
                    <h5 style="font-size: 14px;">Agrapana Jalakaskaya</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /simbol logo-->


@endsection

<style>

    
    /* Add CSS styles for the horizontal organizational chart */
    .organizational-chart-horizontal {
        margin-top: 20px;
        display: flex;
        align-items: center;
    }

    .chart-node {
        margin-right: 20px;
        border: 2px solid #333;
        border-radius: 8px;
        overflow: hidden;
        flex: 0 0 auto;
    }

    .node-content {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 10px;
        text-align: center;
    }

    .chart-connection {
        width: 50px;
        height: 2px;
        background-color: #333;
        flex: 0 0 auto;
    }
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

