@extends('layouts.cabang.app')


@section('assets-top')
    <link href="{{ asset('assets/blog-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/blog-admin/vendor/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Pelanggan / Tabel</a>
          </li>
        </ol>
        @if (session('alert'))
            <div class="alert alert-success">
                {{ session('alert') }}
            </div>
        @endif
        <!-- Example DataTables Card-->
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Kota</th>
                    <th>Alamat Lengkap</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
    </div>
@endsection

@section('assets-bottom')
    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('assets/blog-admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/blog-admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets/blog-admin/vendor/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/blog-admin/vendor/datatables/responsive.bootstrap4.min.js') }}"></script>

    <script>
    $(document).ready(function (){
        $("#dataTable").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('cabang.api.datatable.pelanggan') }}",
            columns:[
              {data: 'id', name: 'id'},
              {data: 'user.nama', name: 'user.nama'},
              {data: 'user.email', name: 'user.email'},
              {data: 'jenis_kelamin', name: 'jenis_kelamin', 
                    render: function(data){
                        if (data == 1) {
                            return "Laki-Laki";
                        }else{
                            return "Perempuan"
                        }
                    }},
              {data: 'tgl_lahir', name: 'tgl_lahir'},
              {data: 'kota', name: 'kota',
                    render: function(data){
                        var kota;
                        if (data == 5) {
                            kota = "Jakarta Pusat";
                        }else if(data == 6){
                            kota = "Jakarta Barat";
                        }else if(data == 7){
                            kota = "Jakarta Utara";
                        }else{
                            kota = "Jakarta Timur"
                        }
                        return kota;
                    }},
              {data: 'alamat', name: 'alamat'},
              {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    });
    </script>

@endsection