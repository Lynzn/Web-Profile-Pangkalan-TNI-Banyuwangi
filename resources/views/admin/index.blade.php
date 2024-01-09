@extends('layout_admin.template')
@section('heading')
    Dashboard
@endsection
@section('page')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid" >
            <div class="alert" role="alert" style="background-color: #4E6766;">
                <h4 class="alert-heading text-white" >Selamat datang Kembali {{ Auth::user()->name }}</h4>
                <p class="mb-0"></p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $berita }}<sup style="font-size: 20px"></sup></h3>

                            <p>Berita & Artikel</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('berita.index') }}" class="small-box-footer">Lihat Selengkapnya <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $alumni }}</h3>

                            <p>Dokumentasi Kegiatan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('alumni.index') }}" class="small-box-footer"> Lihat Selengkapnya <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            
                <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $pendaftaran }}</h3>
                            <p>Informasi Pendaftaran</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('pendaftaran.index') }}" class="small-box-footer">Lihat Selengkapnya <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>
            
                        
                               
                                    
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        $("#Dashboard").addClass("active");
    </script>
@endsection