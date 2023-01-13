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
            <a href="#" class="nav-link">
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
                <a href="{{Route('data-jabatan')}}" class="nav-link">
                  <i class="fa fa-angle-right"></i>
                  <p>Jabatan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{Route('info')}}" class="nav-link active">
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
            <h1 class="m-0">Info Group 4</h1>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>

        <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-5">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Aldiyansah</h5>
                        <p class="card-text">
                        8020200079
                        </p>
                    </div>
                </div><!-- /.card -->
              </div>
              <!-- /.col-lg-5 -->
              <div class="col-lg-5">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                      <h5 class="card-title">Firman Maulidianto S</h5>
                      <p class="card-text">
                      8020200029
                      </p>
                    </div>
                </div><!-- /.card -->
              </div>
              <!-- /.col-lg-5 -->
              <div class="col-lg-5">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                      <h5 class="card-title">Hermilia Alfi Sabrina</h5>
                        <p class="card-text">
                        8020200127
                        </p>
                    </div>
                </div><!-- /.card -->
              </div>
              <!-- /.col-lg-5 -->
              <div class="col-lg-5">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Muhammad Ichwan Athalla</h5>
                        <p class="card-text">
                        8020200087
                        </p>
                    </div>
                </div><!-- /.card -->
              </div>                
              <!-- /.col-lg-5 -->
              <div class="col-lg-5">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Muhammad Iqbal</h5>
                        <p class="card-text">
                        8020200110
                        </p>
                    </div>
                </div><!-- /.card -->
              </div>
              <!-- /.col-lg-5 -->
              <div class="col-lg-5">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Zidan</h5>
                        <p class="card-text">
                        8020200210
                        </p>
                    </div>
                </div><!-- /.card -->
              </div>
              <!-- /.col-lg-5 -->
              </div> 
            </div>  <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div> <!-- /.content -->
    @endsection