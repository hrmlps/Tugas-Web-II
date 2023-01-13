@extends('dash')

      @section('sidebar')
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
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
    <div class="content">
        <div class="card card-primary card-outline">
        <div class="card-header">
            Ubah Data Jabatan
        </div>
            <div class="card-body">
                <form action="{{route('put.ubahh',$detail_jabatan->id)}}" method="post">
                  @csrf
                  @method('patch')
                    <div class="form-group">
                        <input type="text" value="{{$detail_jabatan->nmjabatan}}" name="nmjabatan" class="form-control" placeholder="Nama Jabatan">
                        @error('nmjabatan')
                        <div class="text-danger">
                          <strong>{{$message}}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$detail_jabatan->gajipokok}}" name="gajipokok" class="form-control" placeholder="Gaji Pokok">
                        @error('alamat')
                          <div class="text-danger">
                            <strong>{{$message}}</strong>
                          </div>
                        @enderror
                    </div>
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
  @endsection