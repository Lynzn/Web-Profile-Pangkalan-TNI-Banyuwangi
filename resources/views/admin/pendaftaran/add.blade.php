@extends('layout_admin.template')
@section('heading')
    <h1 class="lead">Masukkan pendaftaran</h1>
@endsection

@section('page')
    <li class="breadcrumb-item active">Masukkan pendaftaran</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- left column -->
                <div class="col-md-10">
                    <!-- general form elements -->
                    <div class="card card-outline card-info">
                        <form action="{{ route('pendaftaran.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group w-50">
                                    <label for="judul_pendaftaran">Judul pendaftaran </label>
                                    <input type="text" name="judul_pendaftaran" value="{{ old('judul_pendaftaran') }}"
                                        class="form-control @error('judul_pendaftaran') is-invalid @enderror"
                                        placeholder="judul_pendaftaran">
                                    <div class="text-danger">
                                        @error('judul_pendaftaran')
                                            Judul tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="isi">Isi pendaftaran</label>
                                    <textarea class="textarea" name="isi"
                                        placeholder="Place some text here">{{ old('isi') }}</textarea>
                                    <div class="text-danger">
                                        @error('isi')
                                            isi tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group w-50">
                                    <label for="gambar">Pilih File</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('gambar') is-invalid @enderror"
                                                name="gambar">
                                            <label class="custom-file-label" for="gambar">Pilih File</label>
                                        </div>
                                    </div>
                                    <div class="text-danger">
                                        @error('gambar')
                                            Foto tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                            </div>
                           <!--card footer-->
                           <div class="card-footer">
                                <div class="float-left">
                                    <button id="kembaliButton" type="button" class="btn btn-default"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</button>
                                </div>
                                <div class="float-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
        $("#pendaftaran").addClass("active");
    </script>

    <script type="text/javascript">
        document.getElementById("kembaliButton").addEventListener("click", function() {
        // Mengarahkan pengguna ke halaman indeks
        window.location.href = "{{ route('pendaftaran.index') }}";
        });
    </script>

@endsection