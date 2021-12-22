@include('layouts/admin/head')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<body id="page-top">
  <div id="wrapper">
    @include('layouts/admin/sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('layouts/admin/headber')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">แก้ไขสินค้า</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Editproduct</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Editproduct</h6>
                </div>
                <div class="card-body">
                  <form action="{{url('/Products/update/'.$editproduct->id)}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="name">ชื่อเมนู</label>
                      <input type="text" class="form-control" id="name" value="{{$editproduct->name}}" name="name">
                    </div>
                    @error('name')
                    <span class="texr-danger">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                      <label for="image">เปลี่ยนรูปภาพ</label>
                      <div class="input-group">
                        <input type="file" name="image" class="form-control" id="product_image" aria-label="Upload">
                      </div>
                      <div>
                        <img src="{{asset('admin/images/'.$editproduct->image)}}" alt="" width="150px">
                      </div>


                    </div>
                    @error('image')
                    <span class="texr-danger">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                      <label for="price">ราคา</label>
                      <input type="text" class="form-control" id="product_price" name="price" value="{{$editproduct->price}}">
                    </div>
                    @error('price')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                 
                    <div class="form-group">
                      <label for="detail">รายละเอียด</label>
                      <input type="text" class="form-control" id="detail" name="detail" value="{{$editproduct->detail}}">
                    </div>
                    @error('detail')
                    <span class="texr-danger">{{$message}}</span>
                    @enderror
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                </div>
              </div>



            </div>
            <script type="text/javascript">
              $(document).ready(function() {
                $('#image').change(function(e) {
                  var reader = new FileReader();
                  reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                  }
                  reader.readAsDataURL(e.target.files['0']);
                });
              });
            </script>

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
    <!-- Select2 -->
    <script src="vendor/select2/dist/js/select2.min.js"></script>
    <!-- Bootstrap Datepicker -->
    <script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap Touchspin -->
    <script src="vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
    <!-- ClockPicker -->
    <script src="vendor/clock-picker/clockpicker.js"></script>
    <!-- RuangAdmin Javascript -->
    <script src="js/ruang-admin.min.js"></script>
    <!-- Javascript for this page -->
    <script>
      $(document).ready(function() {


        $('.select2-single').select2();

        // Select2 Single  with Placeholder
        $('.select2-single-placeholder').select2({
          placeholder: "Select a Province",
          allowClear: true
        });

        // Select2 Multiple
        $('.select2-multiple').select2();

        // Bootstrap Date Picker
        $('#simple-date1 .input-group.date').datepicker({
          format: 'dd/mm/yyyy',
          todayBtn: 'linked',
          todayHighlight: true,
          autoclose: true,
        });

        $('#simple-date2 .input-group.date').datepicker({
          startView: 1,
          format: 'dd/mm/yyyy',
          autoclose: true,
          todayHighlight: true,
          todayBtn: 'linked',
        });

        $('#simple-date3 .input-group.date').datepicker({
          startView: 2,
          format: 'dd/mm/yyyy',
          autoclose: true,
          todayHighlight: true,
          todayBtn: 'linked',
        });

        $('#simple-date4 .input-daterange').datepicker({
          format: 'dd/mm/yyyy',
          autoclose: true,
          todayHighlight: true,
          todayBtn: 'linked',
        });

        // TouchSpin

        $('#touchSpin1').TouchSpin({
          min: 0,
          max: 100,
          boostat: 5,
          maxboostedstep: 10,
          initval: 0
        });

        $('#touchSpin2').TouchSpin({
          min: 0,
          max: 100,
          decimals: 2,
          step: 0.1,
          postfix: '%',
          initval: 0,
          boostat: 5,
          maxboostedstep: 10
        });

        $('#touchSpin3').TouchSpin({
          min: 0,
          max: 100,
          initval: 0,
          boostat: 5,
          maxboostedstep: 10,
          verticalbuttons: true,
        });

        $('#clockPicker1').clockpicker({
          donetext: 'Done'
        });

        $('#clockPicker2').clockpicker({
          autoclose: true
        });

        let input = $('#clockPicker3').clockpicker({
          autoclose: true,
          'default': 'now',
          placement: 'top',
          align: 'left',
        });

        $('#check-minutes').click(function(e) {
          e.stopPropagation();
          input.clockpicker('show').clockpicker('toggleView', 'minutes');
        });

      });
    </script>

</body>

</html>