<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin User List </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url()?>public/web/img/favicon.png">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet"
        href="<?php echo base_url();?>public/vendors/datatables/media/css/dataTables.bootstrap4.css" />
    <!-- Prism -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/prism/prism.css" type="text/css">

    <!-- App css -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-icon"></div>
        <span>Loading...</span>
    </div>
    <!-- ./ Preloader -->


    <!-- Layout wrapper -->
    <div class="layout-wrapper">


        <!-- ./ Header -->
        <?php   $this->load->view('admin/file/header')?>
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- begin::navigation -->


            <?php   $this->load->view('admin/file/navbar')?>
            <!-- Content body -->
            <div class="content-body">
                <!-- Content -->
                <div class="content ">

                    <div class="page-header">
                        <div>
                            <h3>Admin User List</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo base_url();?>Admin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        <a href="#">View Admin List</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-md-12">


                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title"> Admin List</h6>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped mb-0"
                                                    id="datatable-default">
                                                    <thead>
                                                        <tr class="table-dark">

                                                            <th>Sr</th>
                                                            <th>Profile </th>
                                                            <th>Full Name</th>
                                                            <th>Email</th>
                                                            <th>Mobile number</th>
                                                            <th>Status</th>
                                                            <th>Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                        $sr =0;
                                    	foreach ($result as $row) {  
                                            $sr= $sr+1;
                                    	    $t_id = $row->user_id;  
                                    	    $status = $row->user_status;  
                                    	    $admin_type  =$row->admin_type;?>
                                                        <tr>

                                                            <th> <?php echo $sr; ?> </th>
                                                            <th align="center">
                                                                <figure class="avatar avatar-sm">
                                                                    <img src="<?php echo  base_url()."public/img/".$row->profile;?>"
                                                                        class="rounded-circle"
                                                                        alt="<?php echo $row->profile;?>">
                                                                </figure>
                                                            </th>
                                                            <td> <?php echo $row->name." ".$row->lname; ?></td>
                                                            <td> <?php echo $row->email; ?></td>
                                                            <td> <?php echo $row->mobile; ?></td>

                                                            <th>
                                                                <?php if ($admin_type !='1') {?>
                                                                <a href="<?php echo base_url()."admin/users_edit/".$t_id;?>"
                                                                    class="btn btn-primary btn-floating btn-sm">
                                                                    <i class="ti-pencil-alt"></i></a>
                                                                <a  id="<?php echo $t_id;?>"
                                                                    class="btn btn-secondary btn-google btn-floating  btn-sm _deleteuser">
                                                                    <i class="ti-trash"></i> </a> <?php  }?>
                                                            </th>
                                                            <td>
                                                                <?php 
                                             
                                             if ($admin_type !='1') {
                                             if ($status == 1){ ?>
                                                                <a
                                                                    href="<?php echo base_url()."Users/status/".$t_id."/0"?>">
                                                                    <span class="badge badge-success">Active</span></a>
                                                                <?php } else {?>
                                                                <a
                                                                    href="<?php echo base_url()."Users/status/".$t_id."/1";?>">
                                                                    <span class="badge badge-danger">Deactivate
                                                                    </span></a>
                                                                <?php } }   ?>
                                                            </td>

                                                        </tr>
                                                        <?php  } ?>
                                                    </tbody>
                                                </table>
                                            </div>



                                        </div>
                                    </div>





                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- ./ Content -->

                <!-- Footer -->
                <?php  $this->load->view('admin/file/footer')?>
                <!-- ./ Footer -->
            </div>
            <!-- ./ Content body -->
        </div>
        <!-- ./ Content wrapper -->
    </div>
    <!-- ./ Layout wrapper -->

    <!-- Main scripts -->
    <script src="<?php echo base_url();?>public/vendors/bundle.js"></script>
    <!-- Prism -->

    <script src="<?php echo base_url();?>public/vendors/prism/prism.js"></script>

    <script src="<?php echo base_url();?>public/vendors/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script
        src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js">
    </script>
    <script
        src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js">
    </script>
    <script
        src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js">
    </script>
    <script
        src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js">
    </script>
    <script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>
    <script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js">
    </script>
    <script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js">
    </script>



    <!-- App scripts -->
    <script src="<?php echo base_url();?>public/assets/js/app.min.js"></script>

    <script src="<?php echo base_url();?>public/assets/js/examples.datatables.default.js"></script>
    <script src="<?php echo base_url();?>public/assets/js/examples.datatables.row.with.details.js"></script>
    <script src="<?php echo base_url();?>public/assets/js/examples.datatables.tabletools.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.10/sweetalert2.all.min.js"
        integrity="sha512-IG3jJs+NhoPszr+n3I3AHLii1LFFGEVZoorGJFkrd+flS4dgdAVL0AAGiPHlXB0ZD5mgPmcpVKm4KBybCeXLLA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type="text/javascript">
   
   $("._deleteuser").click(function() {
        $t_id = $(this).attr("id");

        
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {



                $.ajax({
                    url: '<?php echo base_url().'index.php/Users/delete_user/'?>'+$t_id,
                    type: 'POST',
                    dataType: 'json',
                    success: function(responce) {
                        location.reload()
                    }
                });
            }
        })



    })





    $(document).ready(function() {
        $('#example2').DataTable();
    });


    toastr.options = {
        timeOut: 3000,
        progressBar: true,
        showMethod: "slideDown",
        hideMethod: "slideUp",
        showDuration: 200,
        hideDuration: 200
    };

    <?php

 $msg= $this->session->flashdata('success');
 if ( $msg != "" )
 { 
 echo "toastr.success('$msg');";
 } 
 $msg2= $this->session->flashdata('error');
 if ( $msg2 != "" )
 {
     echo "toastr.error('$msg2');";
 } ?>
    </script>
</body>

</html>