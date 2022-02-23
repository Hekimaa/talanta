<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TALANTA | Team Members </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=  base_url() ?>/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=  base_url() ?>/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=  base_url() ?>/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=  base_url() ?>/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=  base_url() ?>/admin/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=  base_url() ?>/admin/dist/css/sweetalert2.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
           
    </ul>
    
    
  </nav>
  <!-- /.navbar -->

<?=  $this->include('includes/sidebar.php')?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CLIENTS MESSAGES</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>/admins">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url()?>/users/logout">Logout</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
            
                <table id="category_table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SNO</th>
                    <th>Name</th>
                    <th>EMAIL</th>
                    <th>SUBJECT</th>
                    <th>MESSAGE</th>
                    <th>ACTION</th>
                   
                  </tr>
                  </thead>
                   <tbody>
                      <?php $sn =1;?>
                      <?php if($message) { ?>
                      <?php foreach($message as $cat): ?>
                      <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $cat['name']; ?></td> 
                        <td><?php echo $cat['email']; ?></td> 
                        <td><?php echo $cat['subject']; ?></td>
                        <td><?php echo $cat['message']; ?></td>  
                        
                        <td>
                              <button class="btn btn-danger  delete" data-id="<?php echo $cat['id']; ?>" >Delete</button>

                          </td>
                       
                         
                      </tr>
                     <?php endforeach; ?>
                     <?php } 
                      else {

                     } ?>

                   </tbody>
              
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="https:talanta.co.tz">Talanta</a>.</strong> All rights reserved.
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
</body>
</html>
<!-- ./wrapper -->
<div id="userModal" class="modal fade">
  <div class="modal-dialog">
    <form method="post" id="user_form" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Team Member</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="full_name" id="full_name" class="form-control" />
            <span id="full_name_error" class="text-danger"></span>
          </div>
           <div class="form-group">
            <label>Member Image</label>
            <input type="file" name="member_image" id="member_image" class="form-control" />
            <span id="user_image" class="text-danger "></span>
          </div>
           <div class="form-group">
            <label>Role</label>
            <input type="text" name="role" id="role" class="form-control" />
            <span id="role_error" class="text-danger"></span>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="hidden_id" id="hidden_id" />
          <input type="hidden" name="action" id="action" value="Add" />
          <input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Add" />
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- jQuery -->
<script src="<?=  base_url() ?>/admin/plugins/jquery/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=  base_url() ?>/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?=  base_url() ?>/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=  base_url() ?>/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=  base_url() ?>/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=  base_url() ?>/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=  base_url() ?>/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=  base_url() ?>/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=  base_url() ?>/admin/plugins/jszip/jszip.min.js"></script>
<script src="<?=  base_url() ?>/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=  base_url() ?>/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=  base_url() ?>/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=  base_url() ?>/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=  base_url() ?>/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=  base_url() ?>/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=  base_url() ?>/admin/dist/js/demo.js"></script>
<script src="<?=  base_url() ?>/admin/dist/js/sweetalert2.all.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#category_table").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
 $(document).ready( function () {
    
   $(document).on('click', '.delete', function(){

    var id = $(this).data('id');
    

   Swal.fire({
  title: 'Are you sure?',
  text: 'You will not be able to recover Clients Messages',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, keep it'
}).then((result) => {
  if (result.value) {

      $.ajax({

         url:"messages_delete",

        method:"POST",

        data:{id:id},

         success:function(data)
        {

                 Swal.fire(
            'Deleted!',
            'Your  Category data has been deleted.',
            'success'
             )
        
          location.reload();
        }


      })
  
  } else if (result.dismiss === Swal.DismissReason.cancel) {
    Swal.fire(
      'Cancelled',
      'Your Category data is safe :)',
      'error'
    )
  }
})
 
    });

  });



</script>


