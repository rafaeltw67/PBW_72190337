
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Progweb</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="../../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand mb-0 h1"> 72190337 </span>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
    
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                      <a class="nav-link active" href="/user">User</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/dosen"> Dosen </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/logout"> Log Out </a>
                    </li>
                  </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->


        <div class="col-lg-10 vh-100">
            <div class="card mt-4">
                <div class="card-header">
                    <a name="" class="btn btn-primary" href="/user/formuliruser" role="button"> <i class="bi bi-plus-square-fill"></i> Tambah User</a>
                    <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/dosen/cari">
                        <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                <div class="card-body">
                    @if (session('alert'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{ session('alert') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIK User</th>
                                <th scope="col">Nama User</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $no => $u)
                            <tr>
                                <th scope="row">{{ $user->firstItem() + $no }}</th>
                                <td>{{ $u->nik_user }}</td>
                                <td>{{ $u->nama_user }}</td>
                                <td>
                                    <a href="/user/edituser/{{ $u->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i>Edit</a>
                                    <a href="/user/hapususer/{{ $u->id }}" class="btn btn-danger"><i class="bi bi-x-square"></i>Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        <span class="float-right">{{ $user->links() }}</span>
                </div>
            </div>
        </div>



        <div class="main-panel">
          <div class="content-wrapper"> </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../assets/js/shared/off-canvas.js"></script>
    <script src="../../assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
    <!-- End custom js for this page-->
  </body>
</html>