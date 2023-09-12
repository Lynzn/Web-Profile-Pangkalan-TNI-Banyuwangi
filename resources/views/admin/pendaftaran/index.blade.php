@extends('layout_admin.template')
@section('heading', 'Informasi Pendaftaran')

@section('page')
    <li class="breadcrumb-item active">Informasi Pendaftaran</li>
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
                                <a href="{{ route('pendaftaran.create') }}" class="btn btn-primary btn-sm">
                                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data
                                </a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Gambar</th>
                                        <th width="60%">Judul Informasi</th>
                                        <th >Aksi </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pendaftaran as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td> <img src="<?= asset($data->gambar) ?>" width="80px"
                                                    class="img-thumbnail">
                                            <td>{{ $data->judul_pendaftaran }}</td>
                                            </td>
                                            <td>
                                                    <form action="{{ route('pendaftaran.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('pendaftaran.edit', $data->slug_pendaftaran) }}" class="btn btn-primary btn-sm">
                                                        <i class="mr-2 nav-icon fas fa-edit"></i>Edit
                                                    </a>

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
                      <!-- /.card-body -->
                     
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('script')
    <script type="text/javascript">
        
        $("#pendaftaran").addClass("active");

    </script>

@endsection