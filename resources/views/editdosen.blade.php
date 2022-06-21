
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
                <div class="card">
                <div class="card-body">
                    @php
                        $pakar = explode(',',$dosen->pakar);
                    @endphp
                    <form action="/dosen/updatedosen/{{ $dosen->id }}" method="POST" class="pt-2 pb-2">
                        @csrf
                        @method('PUT')
                        <div class="form-group w-25">
                            <label>NIDN</label>
                            <input type="number" name="nidn" class="form-control" value="{{ $dosen->nidn }}">
                        </div>
                        <div class="form-group w-25">
                            <label>Nama Dosen</label>
                            <input type="text" name="nama" class="form-control" value="{{ $dosen->nama }}">
                        </div>
                        <label>Status</label>
                        <div class="form-check w-25=">
                            <input type="radio" name="status" value="Dosen Tetap" {{ $dosen->status == 'Dosen Tetap' ? 'checked':'' }}
                            class="form-check-input">
                            <label>Dosen Tetap</label>
                        </div>
                        <div class="form-check w-25=">
                            <input type="radio" name="status" value="Dosen Tidak Tetap" {{ $dosen->status == 'Dosen Tidak Tetap' ? 'checked':'' }}
                            class="form-check-input">
                            <label>Dosen Tidak Tetap</label>
                        </div>
                        <div class="form-group w-25">
                            <label>Jabatan Fungsional</label>
                            <select name="jafung" class="form-control">
                                <option value="0">Pilih Jabatan Fungsional</option>
                                <option value="Tenaga Pengajar" {{ $dosen->jafung == 'Tenaga Pengajar' ? 'selected':'' }}>Tenaga Pengajar</option>
                                <option value="Asisten Ahli" {{ $dosen->jafung == 'Asisten Ahli' ? 'selected':'' }}>Asisten Ahli</option>
                                <option value="Lektor" {{ $dosen->jafung == 'Lektor' ? 'selected':'' }}>Lektor</option>
                                <option value="Lektor Kepala" {{ $dosen->jafung == 'Lektor Kepala' ? 'selected':'' }}>Lektor Kepala</option>
                                <option value="Guru Besar" {{ $dosen->jafung == 'Guru Besar' ? 'selected':'' }}>Guru Besar</option>
                            </select>
                        </div>
                        <label>Bidang Keahlian</label>
                        <div class="form-check w-25=">
                            <input type="checkbox" name="pakar[]" value="AI" {{ in_array('AI', $pakar) ? 'checked':'' }}
                            class="form-check-input">
                            <label>AI</label>
                        </div>
                        <div class="form-check w-25=">
                            <input type="checkbox" name="pakar[]" value="Web Developer" {{ in_array('Web Developer', $pakar) ? 'checked':'' }}
                            class="form-check-input">
                            <label>Web Developer</label>
                        </div>
                        <div class="form-check w-25=">
                            <input type="checkbox" name="pakar[]" value="DB Engineer" {{ in_array('DB Engineer', $pakar) ? 'checked':'' }}
                             class="form-check-input">
                            <label>DB Engineer</label>
                        </div>
                        <div class="form-group pt-4">
                            <input type="submit" value="SIMPAN" class="btn btn-primary">
                        </div>
                    </form>


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