@extends('layout_admin.template')
@section('heading', 'Dokumentasi Kegiatan LANAL')

@section('page')
    <li class="breadcrumb-item active">Dokumentasi Kegiatan</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target=".bd-example-modal-lg">
                                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Dokumentasi Kegiatan
                                </button>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Gambar</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alumni as $data) 
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td> <img src="<?= asset($data->gambar) ?>" width="80px"
                                                    class="img-thumbnail">
                                            <td>{{ $data->nama_alumni }}</td>
                                            
                                            </td>
                                            <td>
                                                <form action="{{ route('alumni.destroy', $data->id_alumni) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('alumni.edit', ($data->id_alumni)) }}"
                                                        class="btn btn-success btn-sm"><i class="mr-2 nav-icon fas fa-edit"></i>
                                                         Edit</a>

                                                    <button class="btn btn-danger btn-sm"><i
                                                            class="mr-2 nav-icon fas fa-trash-alt"></i>Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- Extra large modal -->
    <div class="modal fade bd-example-modal-md bd-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Dokumentasi Kegiatan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('alumni.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="gambar">Dokumentasi Kegiatan</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input  @error('gambar') is-invalid @enderror"
                                            name="gambar">
                                        <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                    </div>
                                </div>
                                <div class="text-danger">
                                    @error('gambar')
                                        Gambar tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nama_alumni">Nama Kegiatan</label>
                                <input type="text" name="nama_alumni" value="{{ old('nama_alumni') }}"
                                    class="form-control @error('nama_alumni') is-invalid @enderror"
                                    placeholder="Isikan judul kegiatan">
                                <div class="text-danger">
                                    @error('nama_alumni')
                                        Nama tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>

                           
                        <!-- /.card-body -->
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i
                                    class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</button>
                            <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp;
                                Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });

        $("#Alumni").addClass("active");

    </script>

@endsection