@extends('layout_admin.template')
@section('heading', 'Informasi Pendaftaran')

@section('page')
    <li class="breadcrumb-item active">Informasi Pendaftaran</li>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                {{-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#tambah">
                                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah
                                </button> --}}
                                <a class="btn btn-success" href="{{ route('users.create') }}"><i
                                        class="nav-icon fas fa-folder-plus"></i> &nbsp;
                                    Tambah</a>
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="clearfix">
                                <hr>
                            </div>
                            <div class="table-responsive mailbox-messages">
                                <div class="table-responsive mailbox-messages">
                                    <table id="example1" class="display table table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Jadwal Pendaftaran</th>
                                        <th width="60%">Persyaratan dan Cara Pendaftaran</th>
                                        <th>Pilih File</th>
                                    </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $key => $user)
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @foreach ($user->roles as $key => $item)
                                                        <span class="badge badge-info">{{ $item->name }}</span>
                                                    @endforeach</span>

                                                </td>
                                                <td>
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                            
                                                    </form>
                                                    </>
                                                    </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('script')
    <script>
        $("#mastermanagement").addClass("menu-open");
        $("#usermanagement").addClass("active");
        $("#users").addClass("active");
    </script>

@endsection