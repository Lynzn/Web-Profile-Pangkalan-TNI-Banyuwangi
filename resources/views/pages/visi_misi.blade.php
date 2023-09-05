@extends('layouts.index')
@section('heading', 'Visi, Misi Motto LANAL BANYUWANGI')
@section('page')
    <span>Profile</span>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">Visi Misi</span>
@endsection
@section('content')

    <!--Visi Misi Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="card-title about__text mb-4">
                        <div class="section-title pb-4">
                            <h4 class="text-center">VISI</h4>
                            <p>Visi Pangkalan TNI AL Banyuwangi adalah :
                                <br>
                                “MENJADI CENTER OF EXCELLENCE (COE) PRAJURIT KESEHATAN MATRA LAUT“</p>
                        </div>

                        <div class="section-title pb-4">
                            <h4 class="text-center">MISI</h4>
                            <p>Misi Politeknik Negeri Banyuwangi adalah</p>

                            <ol>
                                <li> Menanamkan dan membentuk prajurit kesahatan TNI AL yang bermental juang tinggi dan berjiwa Sapta Marga</li>
                                <li> Membekali dan menumbuhkan prajurit kesehatan TNI AL kemampuan teknis, taktis dan profesional dalam dukungan kesehatan lapangan serta berkarakter kenyal, ulet dan dinamis.</li>
                                <li> Menumbuhkan dan mengembangkan sikap profesionalisme prajurit kesehatan TNI AL sesuai bidang tugas dan profesinya.</li>
                                <li> Menanamkan dan menumbuhkan prajurit kesehatan TNI AL sikap bertanggung jawab dan berintegritas tinggi dalam tugas.</li>
                                <li> Membentuk prajurit kesehatan TNI AL berkesamaptaan jasmani yang prima dan operable dalam tugas operasi dan latihan.</li>
                            </ol>
                        </div>

                        <div class="section-title pb-4">
                            <h4 class="text-center">MOTTO</h4>
                            <h6 class="text-center">“TANGGAP TANGGON TRENGGINAS”</h6>
                            <ol>
                                <li> TANGGAP : Cepat memahami dan mengidentifikasi masalah.</li>
                                <li> TANGGON : Kepribadian yang tahan uji dan ulet.</li>
                                <li> TRENGGINAS : Kesamaptaan jasmani yang prima dan handal.</li></li>
                            </ol>
                            <h6 class="text-center">“BERANI BERMORAL DAN PROFESIONAL”</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Visi Misi End -->
@endsection

@section('script')
    <script type="text/javascript">
        $("#profile").addClass("active");
    </script>

@endsection