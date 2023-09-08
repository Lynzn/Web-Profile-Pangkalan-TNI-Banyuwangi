@extends('layout_admin.template')
@section('heading', 'Details pendaftaran')

@section('page')
    <li class="breadcrumb-item active"><a href="{{ route('pendaftaran.index') }}">pendaftaran</a></li>
    <li class="breadcrumb-item active">Details pendaftaran</li>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('pendaftaran.index') }}" class="btn btn-default btn-sm"><i
                        class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a>
            </div>
            <div class="card-body">
                <div class="row no-gutters ml-2 mb-2 mr-2">
                    <div class="col-md-4">
                        <img src="{{ asset($pendaftaran->gambar) }}" class="card-img img-details" alt="...">
                    </div>
                    <div class="col-md-1 mb-4"></div>
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th style="width:50%">Judul pendaftaran : </th>
                                    <td>{{ $pendaftaran->pendaftaran }}</td>
                                </tr>
                                <tr>
                                    <th>Isi :</th>
                                    <td>{{ $pendaftaran->isi }}</td>
                                </tr>
                                <tr>
                                    <th>Author :</th>
                                    <td>{{ $pendaftaran->user_id }}</td>
                                </tr>
                                <tr>
                                    <th>Publish :</th>
                                    <td>{{ $pendaftaran->publish }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $("#pendaftaran").addClass("active");

    </script>
@endsection
