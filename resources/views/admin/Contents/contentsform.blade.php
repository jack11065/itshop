@include('layouts/admin/head')


<body id="page-top">
  <div id="wrapper">

@include('layouts/admin/sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

@include('layouts/admin/headber')
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ตารางเนื้อหา</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Contents Tables</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- backgroud Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Contents Tables</h6>  
                </div>
                <a href="{{route('addcontents')}}" class="btn btn-sm btn-primary">เพิ่มข้อมูล</a>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>เนื้อหา</th>
                        <th>รูปภาพ</th>
                        <th>รหัสผู้ใช้</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#">RA0449</a></td>
                        <td><span class="">Delivered</span></td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td><a href="#">B001</a></td>
                        <td><a href="{{route('editcontents')}}" class="btn btn-sm btn-warning">แก้ไข</a></td>
                        <td><a href="#" class="btn btn-sm btn-danger">Delete</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA5324</a></td>
                        <td><span class="">Shipping</span></td>
                        <td><span class="badge badge-warning">Shipping</span></td>
                        <td><a href="#">B001</a></td>
                        <td><a href="{{route('editcontents')}}" class="btn btn-sm btn-warning">แก้ไข</a></td>
                        <td><a href="#" class="btn btn-sm btn-danger">Delete</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA8568</a></td>
                        <td><span class="r">Pending</span></td>
                        <td><span class="badge badge-danger">Pending</span></td>
                        <td><a href="#">B001</a></td>
                        <td><a href="{{route('editcontents')}}" class="btn btn-sm btn-warning">แก้ไข</a></td>
                        <td><a href="#" class="btn btn-sm btn-danger">Delete</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA1453</a></td>
                        <td><span class="">Processing</span></td>
                        <td><span class="badge badge-info">Processing</span></td>
                        <td><a href="#">B001</a></td>
                        <td><a href="{{route('editcontents')}}" class="btn btn-sm btn-warning">แก้ไข</a></td>
                        <td><a href="#" class="btn btn-sm btn-danger">Delete</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA1998</a></td>
                        <td><span class="">Delivered</span></td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td><a href="#">B001</a></td>
                        <td><a href="{{route('editcontents')}}" class="btn btn-sm btn-warning">แก้ไข</a></td>
                        <td><a href="#" class="btn btn-sm btn-danger">Delete</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      @include('layouts/admin/footer')
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>