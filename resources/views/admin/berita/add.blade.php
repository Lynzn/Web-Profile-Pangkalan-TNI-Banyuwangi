@extends('layout_admin.template')
@section('heading')
    <h1 class="lead">Masukkan Berita</h1>
@endsection

@section('page')
    <li class="breadcrumb-item active">Masukkan Berita</li>
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
                        <form action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group w-50">
                                    <label for="judul_berita">Judul Berita </label>
                                    <input type="text" name="judul_berita" value="{{ old('judul_berita') }}"
                                        class="form-control @error('judul_berita') is-invalid @enderror"
                                        placeholder="Masukkan Judul Berita">
                                    <div class="text-danger">
                                        @error('judul_berita')
                                            Judul tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="isi">Isi Berita</label>
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
        $("#berita").addClass("active");
    </script>
    
    <script type="text/javascript">
        document.getElementById("kembaliButton").addEventListener("click", function() {
        // Mengarahkan pengguna ke halaman indeks
        window.location.href = "{{ route('petinggi.index') }}";
        });
    </script>
@endsection