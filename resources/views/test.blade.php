<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Corona Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  <style>
    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
    .disable-click{
        pointer-events:none;
    }

  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <a class="button" id="id_1" onclick="change_status(this, 'start')"><i class="fa fa-play" style="font-size:36px;" ></i></a>
            <a class="button" id="id_2" onclick="change_status(this, 'pause')"><i class="fa fa-pause" style="font-size:36px;" ></i></a>
            <a class="button" id="id_3" onclick="change_status(this, 'done')"><i class="fa fa-stop" style="font-size:36px;"></i></a>
            <a class="button" id="id_4" onclick="change_status(this, 10)"> <i class="fa fa-circle-o-notch fa-spin" style="font-size:36px; display:none;"></i> click me</a>

          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/misc.js"></script>
  <script src="../../assets/js/settings.js"></script>
  <script src="../../assets/js/todolist.js"></script>
  <!-- endinject -->
</body>

<script>
  const change_status = (elem, status) => {
    var id = $(elem).attr('id')
    $.ajax({
      type:'post',
      url:'',
      data:{},
      beforeSend:function(){ 
        elem.style.pointerEvents = "none";
        if(status == 'start' ||  status == 'pause' || status == 'done') {
          $('#'+id+' i').addClass('fa fa-circle-o-notch fa-spin')
        } else {
          $('#'+id+' i').show()
        }
      },
      success:function(){
        elem.style.pointerEvents = "auto";
        $('#'+id+' i').removeClass('fa-circle-o-notch fa-spin')
      }, 
      error:function(){
        elem.style.pointerEvents = "auto";
        $('#'+id+' i').removeClass('fa-circle-o-notch fa-spin')
      }
    })
  }
</script>

</html>