@extends('layout_admin.template')
@section('heading', 'Staff')

@section('page')
    <li class="breadcrumb-item active">Staff</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('staff.update', $staff->id_staff) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="gambar_staff">Pilih File Staff</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('gambar_staff') is-invalid @enderror"
                                                name="gambar_staff">
                                            <label class="custom-file-label" for="gambar_staff">Pilih File</label>
                                        </div>
                                    </div>
                                    <div class="text-danger">
                                        @error('gambar_staff')
                                            Gambar tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="keterangan">Keterangan </label>
                                    <input type="text" name="keterangan" value="{{ $staff->keterangan }}"
                                        class="form-control @error('keterangan') is-invalid @enderror"
                                        placeholder="Keterangan Staff">
                                    <div class="text-danger">
                                        @error('keterangan')
                                            Judul tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-6 mt">
                        <div class="mt-3">
                            <h3 class="lead">Gambar pada saat ini</h3>
                            <img src="{{ asset($staff->gambar_staff) }}" class="img img-thumbnail" alt="" width="80%" />
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer justify-content-between">
                        <a href="#" name="kembali" class="btn btn-default" id="back"><i
                                class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </div>
                    </form>
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
                window.location = "{{ route('staff.index') }}";
            });
        });

        $(document).ready(function() {
            bsCustomFileInput.init();
        });

        $("#Staff").addClass("active");

    </script>

@endsection
