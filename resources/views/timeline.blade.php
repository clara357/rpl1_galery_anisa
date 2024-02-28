<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Timeline</title>

  <!-- Google Font: Source Sans Pro -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- AdminLTE css -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">WebGALERY</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a data-toggle="modal" data-target="#uploadModal" class="nav-link btn btn-secondary">Upload <i class="fa fa-upload"></i></a>
      </li>


    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('logout') }}" class="nav-link" role="button">
          <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
        </a>
      </i>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Galeri</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Galeri</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Timelime example  -->
        <div class="row">
          @foreach ($galeris as $galeri )
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bag-gradient-secondary" name="tanggal"> {{ $galeri->tanggal}}</span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-envelope bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                  <h3 class="timeline-header">{{ $galeri->judul }}</h3>

                  <div class="timeline-body">
                    <img width="400" src="{{ asset('img/'.$galeri->foto) }}" alt=""><br>
                    {{ $galeri->deskripsi }}
                  </div>
                  <div class="timeline-footer">
                    <a href="#" data-toggle="modal" data-target="#modaledit{{ $galeri->id }}" class=" btn btn-warning btn-sm">Edit</a>
                    <a class="btn btn-danger btn-sm">Delete</a>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
             
              <!-- END timeline item -->
              <!-- timeline item -->
             
              <!-- END timeline item -->
              <!-- timeline time label -->
              
              <!-- /.timeline-label -->
              <!-- timeline item -->
              
              <!-- END timeline item -->
              <!-- timeline item -->

              </div>
              <!-- END timeline item -->
              <i class="fas falock bg"></i>
            </div>
              <div class="modal fade" id="modalhapus{{ $galeri->id }}" method="post">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
              <h3 class="modal-title">Hapus Foto</h3>
              </div>
              <div class="modal-body">
              <p>Yakin Ingin Menghapusnya</p>
              <div class="modal-footer">
                <a class="btn btn-primary" type="submit">hapus</a>
                <button class="btn btn-sm bg-maroon" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
            <i class="fas fa-clock bg-blue"></i>
          </div>
            <div class="modal fade" id="modaledit{{ $galeri->id }}" tabindex="-1">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">Edit Foto</h3>
            </div>
         <form action="{{ url('galeri.update',$galeri->id) }}"method="post" enctype="multipart/form-data">
          @method('PUT')
          <div class="modal-body">
              <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" value="{{ $galeri->judul }}" name="judul" class="form-control">
              </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <input type="text" value="{{ $galeri->deskripsi }}" name="deskripsi" class="form-control">
                </div>
                <div class="form-group">
                  <label for="foto">Foto</label>
                  <input type="file" name="foto" class="form-control"> 
                  <img src="{{ asset('img/'.$galeri->foto) }}" width="150" alt="">
                </div>
              </div>
          </form>
        @endforeach
          <!-- /.col -->
        </div>
      </div>
      <!-- /.timeline -->

  <div class="modal fade" id="uploadModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Upload Foto</h3>
        </div>
        <form action="{{ url('galeri') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" name="judul" class="form-control">
            </div>
            <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <input type="text" name="deskripsi" class="form-control">
            </div>
            <div class="form-group">
              <label for="foto">Foto</label>
              <input type="file" name="foto" class="form-control">
            </div>
            <div class="modal-footer">
              <button class="btn btn-primary" type="submit">Upload</button>
              <button class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
  </div>

    </section>
    <!-- /.content -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('AdminLTE/dist/js/demo.js') }}"></script>
</body>
</html>
