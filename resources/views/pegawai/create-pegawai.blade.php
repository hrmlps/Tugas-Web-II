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
                <a href="{{Route('get.data')}}" class="nav-link active">
                  <i class="fa fa-angle-right"></i>
                  <p>Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{Route('data-jabatan')}}" class="nav-link">
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
            <h1 class="m-0">PEGAWAI</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="card card-primary card-outline">
        <div class="card-header">
            Create Data Pegawai
        </div>
            <div class="card-body">
                <form action="{{route('post.tambah')}}" method="post">
                  @csrf
                    <div class="form-group">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Pegawai">
                        @error('nama')
                        <div class="text-danger">
                          <strong>{{$message}}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat Pegawai"></textarea>
                        @error('alamat')
                          <div class="text-danger">
                            <strong>{{$message}}</strong>
                          </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="number" id="umur" name="umur" class="form-control" placeholder="Umur Pegawai">
                        @error('umur')
                          <div class="text-danger">
                            <strong>{{$message}}</strong>
                          </div>
                        @enderror
                    </div>
                    <div>
                      <select class="form-control custom-select" name="jabatan_id">
                        @foreach($jabatan as $item)
                          <option value="{{ $item->id }}">{{ $item->nmjabatan }}</option>
                        @endforeach
                      </select>
                      @error('jabatan')
                        <div class="text-danger">
                          <strong>{{ $message }}</strong>
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