@extends('dash')

        @section('sidebar')
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{Route('dashboard')}}" class="nav-link">
                <i class="fa fa-home"></i>
                <p>
                    Dashboard
                </p>
                </a>
            </li>
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                <i class="fa fa-database"></i>
                <p>
                    Databasee Perusahaan
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{Route('get.data')}}" class="nav-link">
                    <i class="fa fa-angle-right"></i>
                    <p>Pegawai</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{Route('data-jabatan')}}" class="nav-link active">
                    <i class="fa fa-angle-right"></i>
                    <p>Jabatan</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{Route('info')}}" class="nav-link">
                <i class="fa fa-info-circle"></i>
                <p>
                    Info
                </p>
                </a>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        @endsection

    @section('konten')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">JABATAN</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{session('status')}}
          </div>
        @endif
        @if(session('hapus'))
        <div class="alert alert-danger" role="alert">
            {{session('hapus')}}
          </div>
        @endif
        @if(session('berhasil'))
        <div class="alert alert-warning" role="alert">
            {{session('berhasil')}}
          </div>
        @endif
        <div class="content">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="card-tools">
                        <a href="{{Route('get.createe')}}" class="btn btn-success">Tambah data  <i class="fas fa-plus-square"></i></a>
                    </div>
                </div>
                <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Jabatan</th>
                            <th>Gaji Pokok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_jabatan as $jbt)
                        <tr>
                            <td>{{$jbt->id}}</td>
                            <td>{{$jbt->nmjabatan}}</td>
                            <td>{{$jbt->gajipokok}}</td>
                            <td>
                                <a href="{{ route('get.ubahh', $jbt->id) }}" class="btn btn-primary mb-2 bg-info text-white">Ubah</a>

                                <form action="{{ route('delete.hapuss', $jbt->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data Ini ?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
    @endsection