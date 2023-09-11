@extends('layout_admin.template')
@section('heading', 'Edit Petinggi')

@section('page')
    <li class="breadcrumb-item active">Edit Data Petinggi</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('petinggi.update', $petinggi->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="judul_petinggi">Nama petinggi </label>
                                    <input type="text" name="judul_petinggi" value="{{ $petinggi->judul_petinggi }}"
                                        class="form-control @error('judul_petinggi') is-invalid @enderror"
                                        placeholder="Isikan Nama Petinggi">
                                    <div class="text-danger">
                                        @error('judul_petinggi')
                                            Isian tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="isi">Pangkat petinggi </label>
                                    <input type="text" name="isi" value="{{ $petinggi->isi }}"
                                        class="form-control @error('isi') is-invalid @enderror"
                                        placeholder="Isikan Pangkat Petinggi">
                                    <div class="text-danger">
                                        @error('judul_petinggi')
                                            Isian tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
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
                            <div class="card-footer justify-content-between">
                                <a href="#" name="kembali" class="btn btn-default" id="back"><i
                                        class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- /.card -->
            </div>

            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- Extra large modal -->
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#back').click(function() {
                window.location = "{{ route('petinggi.index') }}";
            });
        });

        $(document).ready(function() {
            bsCustomFileInput.init();
        });

        $("#petinggi").addClass("active");

    </script>

@endsection
