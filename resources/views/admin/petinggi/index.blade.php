@extends('layout_admin.template')
@section('heading', 'Informasi petinggi')

@section('page')
    <li class="breadcrumb-item active">Informasi petinggi</li>
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
                                <a href="{{ route('petinggi.create') }}" class="btn btn-primary btn-sm">
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
                                        <th width="30%">Nama Komandan</th>
                                        <th width="50%">Pangkat</th>
                                        <th width="40%"> Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($petinggi as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td> <img src="<?= asset($data->gambar) ?>" width="80px"
                                                    class="img-thumbnail">
                                            <td>{{ $data->judul_petinggi }}</td>
                                            </td>
                                            <td>{{ $data->isi}}</td>
                                            <td>
                                                <form action="{{ route('petinggi.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')  
                                                    <a href="{{ route('petinggi.edit', $data->id) }}" class="btn btn-primary btn-sm">
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
                    <!-- /.card -->
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
        $("#petinggi").addClass("active");

    </script>

@endsection