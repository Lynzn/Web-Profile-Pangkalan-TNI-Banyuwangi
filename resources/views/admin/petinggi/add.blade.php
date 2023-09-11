@extends('layout_admin.template')
@section('heading')
    <h1 class="lead">Masukkan petinggi</h1>
@endsection

@section('page')
    <li class="breadcrumb-item active">Masukkan petinggi</li>
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
                        <form action="{{ route('petinggi.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group w-50">
                                    <label for="judul_petinggi">Nama petinggi </label>
                                    <input type="text" name="judul_petinggi" value="{{ old('judul_petinggi') }}"
                                        class="form-control @error('judul_petinggi') is-invalid @enderror"
                                        placeholder="Isikan Nama Petinggi">
                                    <div class="text-danger">
                                        @error('judul_petinggi')
                                            Isian tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group w-50">
                                    <label for="isi">Pangkat petinggi </label>
                                    <input type="text" name="isi" value="{{ old('isi') }}"
                                        class="form-control @error('isi') is-invalid @enderror"
                                        placeholder="Isikan Pangkat Petinggi">
                                    <div class="text-danger">
                                        @error('judul_petinggi')
                                            Isian tidak boleh kosong.
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
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
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
        $("#petinggi").addClass("active");

        // Summernote

    </script>

@endsection