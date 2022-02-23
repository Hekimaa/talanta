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
            <h1>TEAM MEMBERS</h1>
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
                 <div class="col text-left">
            <button type="button" name="add_record" id="add_record" class="btn btn-success btn-lg">Add Team Member</button>
          </div>
                <table id="category_table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SNO</th>
                    <th>CLIENT IMAGE</th>
                    <th>CLIENT NAME</th>
                    <th>CLIENT NAME</th>
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                   <tbody>
                      <?php $sn =1;?>
                      <?php if($teammember) { ?>
                      <?php foreach($teammember as $cat): ?>
                      <tr>
                         <td><?php echo $sn++; ?></td>
                        <td><img src="<?= base_url('uploads/teammembers/'.$cat['image']) ?>" alt="image" width="50px" height="50px"></td> 
                        
                        <td><?php echo $cat['full_name']; ?></td> 
                         <td><?php echo $cat['role']; ?></td> 
                 
                        <td>
                              <button class="btn btn-warning  edit" data-id="<?php echo $cat['id']; ?>">Edit</button>
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
    <strong>Copyright &copy; 2020-2021 <a href="talanta.co.tz">Talanta</a>.</strong> All rights reserved.
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
    

  

  $('#add_record').click(function(){

    $('#user_form')[0].reset();

    $('.modal-title').text('Add Data');

    $('#name_error').text('');

    $('#image_error').text('');

    $('#status_error').text('');

    $('#action').val('Add');

    $('#submit_button').val('Add');

    $('#userModal').modal('show');

  });
    });

 $('#user_form').on('submit', function(event){

    event.preventDefault();

    $.ajax({

      url:"teamMembers/save",

      method:"POST",

      data:new FormData(this),
        contentType: false,  
        cache: false,  
        processData:false,  
        dataType: "json",  
                    

      beforeSend:function(){

        $('#submit_button').val('wait...');

        $('#submit_button').attr('disabled', 'disabled');

      }, 

      success:function(data)
      {

        $('#submit_button').val('Add');

        $('#submit_button').attr('disabled', false);

        if(data.error == 'yes')
        {

          $('#full_name_error').text(data.full_name_error);

          $('#role_error').text(data.role_error);



          $('#image_error').text(data.image_error);

        }
        else
        {

          $('#userModal').modal('hide');
          location.reload();

          $('#message').html(data.message);
          setTimeout(function(){

            $('#message').html('');

          }, 5000);

             

        }

      }

    })

  });

  $(document).on('click', '.edit', function(){

    var id = $(this).data('id');
    
    $.ajax({

      url:"teamMembers/fetch_single_member",

      method:"POST",

      data:{id:id},

      dataType:'JSON',

      success:function(data)
      {

        $('#full_name').val(data.full_name);

        $('#role').val(data.role);
       

        $('#user_image').html(data.image);

        $('.modal-header').text('Edit Data');

        $('#name_error').text('');

        $('#image_error').text('');

        $('#action').val('Edit');

        $('#submit_button').val('Edit');

        $('#userModal').modal('show');

        $('#hidden_id').val(id);

      }

    })

  });


   $(document).on('click', '.delete', function(){

    var id = $(this).data('id');
    

   Swal.fire({
  title: 'Are you sure?',
  text: 'You will not be able to recover Category Details',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, keep it'
}).then((result) => {
  if (result.value) {

      $.ajax({

         url:"teamMembers/teammember_delete",

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

    $(document).on('click', '.inactive', function(){

    var id = $(this).data('id');
       
        $.ajax({

        url:"category/category_ctivate",

        method:"POST",

        data:{id:id},

        success:function(data)
        {
            
           Swal.fire(
      'Saved!',
      'Students Details have been deleted.',
      'success'
       )  
          location.reload();
        }

      });
  });

     $(document).on('click', '.active', function(){

    var id = $(this).data('id');
  
       
        $.ajax({

        url:"category/category_inactivate",

        method:"POST",

        data:{id:id},

        success:function(data)
        {
            
           Swal.fire(
      'Saved!',
      'Students Details have been deleted.',
      'success'
       )  
          location.reload();
        }

      });
  });


</script>


