@extends('layouts.index')
@section('heading', 'Visi, Misi Motto LANAL BANYUWANGI')
@section('page')
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
                                “Mewujudkan Lanal Banyuwangi sebagai Lanal yang bermoral berdedikasi berintegritas“</p>
                        </div>

                        <div class="section-title pb-4">
                            <h4 class="text-center">MISI</h4>
                            <p>Bertaqwa kepada tuhan Yang Maha Esa, jaga stamina yang prima, laksanakan tugas dengan iklas, loyal
                                dan bertanggung jawab, kreatif, inovatif dan informatif, bekerja sama dan saling percaya </p>
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