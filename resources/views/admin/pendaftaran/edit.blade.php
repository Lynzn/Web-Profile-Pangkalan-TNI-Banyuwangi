@extends('layout_admin.template')
@section('heading', 'Edit pendaftaran')

@section('page')
    <li class="breadcrumb-item active">pendaftaran AMIK Medicom</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('pendaftaran.update', $pendaftaran->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group w-50">
                                    <label for="judul_pendaftaran">Judul pendaftaran </label>
                                    <input type="text" name="judul_pendaftaran" value="{{ $pendaftaran->judul_pendaftaran}}"
                                        class="form-control @error('judul_pendaftaran') is-invalid @enderror"
                                        placeholder="judul_pendaftaran">
                                    <div class="text-danger">
                                        @error('judul_pendaftaran')
                                            Judul tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="isi_pendaftaran">Isi pendaftaran</label>
                                    <textarea class="textarea" name="isi_pendaftaran"
                                        placeholder="Place some text here">{{ old('isi') }}</textarea>
                                    <div class="text-danger">
                                        @error('isi_pendaftaran')
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
                window.location = "{{ route('pendaftaran.index') }}";
            });
        });

        $(document).ready(function() {
            bsCustomFileInput.init();
        });

        $("#pendaftaran").addClass("active");

    </script>

@endsection