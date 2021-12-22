@include('layouts/admin/head')
  <!--sweetalert2-->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!--/sweetalert2-->
<body id="page-top">
  <div id="wrapper">
    @include('layouts/admin/sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
      @if (session('success'))
          <script>
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'บันทึกข้อมูลเรียบร้อย',
              showConfirmButton: false,
              timer: 3500
            })
          </script>
          @endif

          @if (session('update'))
          <script>
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'อัพเดทข้อมูลเรียบร้อย',
              showConfirmButton: false,
              timer: 3500
            })
          </script>
          @endif

          @if (session('del'))
          <script>
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'ลบข้อมูลเรียบร้อย',
              showConfirmButton: false,
              timer: 3500
            })
          </script>
          @endif

        @include('layouts/admin/headber')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ตารางประเภทสินค้า</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Types Tables</li>
            </ol>
          </div>

          

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Editproduct Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Types Tables</h6>
                </div>
                <a href="{{route('addtypes')}}" class="btn btn-sm btn-primary">เพิ่มข้อมูล</a>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>ชื่อประเภท</th>
                        <th>วันที่ใส่ข้อมูล</th>
                        <th>วันที่แก้ไข</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($types as $category)
                      <tr>
                        <td>{{$category->id }}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at}}</td>
                        <td>{{$category->updated_at}}</td>
                        <td><a href="{{url('EditTypes/'.$category->id)}}" class="btn btn-sm btn-warning">แก้ไข</a></td>
                        <td><a href="{{url('DeleteTypes/'.$category->id)}}" class="btn btn-sm btn-danger">Delete</a></td>
                      </tr>
                      @endforeach
                     
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
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