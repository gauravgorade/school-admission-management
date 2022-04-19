<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us inquiry details</title>


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
                <div class="content">

                    <div class="page-header">
                        <div>
                            <h3>Contact us inquiry  details</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo base_url();?>Admin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        <a href="<?php echo base_url();?>admin/contact_view">
                                            Contact Us List </a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        <a href="#">
                                            Full Details </a>
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
                                            <div class="d-flex justify-content-between">
                                                <h6 class="card-title mb-2">Contact Us Inquiry View</h6>

                                            </div>
                                            <div>
                                                <?php 
                                    	foreach ($result as $row) {  
                                    	    $t_id = $row->c_id;  $status = $row->status;
                                    	    $status = $row->status;?>

                                                <div class="list-group list-group-flush">
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-2 col-12">
                                                            <h5>Name
                                                               
                                                            </h5>

                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <h3 class="text-primary mb-1 float-right">
                                                                <?php echo $row->name; ?>
                                                               </h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-2 col-12">
                                                            <h5>Mobile</h5>

                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <h3 class="text-primary mb-1 float-right h5 text-break" >
                                                                <?php echo $row->mobile; ?> </h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-2 col-12">
                                                            <h5>Email</h5>

                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <h3 class="text-primary mb-1 float-right h5 text-break" >
                                                                <?php echo $row->email; ?> </h3>
                                                        </div>
                                                    </div>
                                                   
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-2 col-12">
                                                            <h5>Subject</h5>

                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <h3 class="text-primary mb-2 float-right h5  d-flex text-break">
                                                                <?php echo $row->subject; ?></h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0 ">
                                                        <div class="col-md-2 col-12">
                                                            <h5>Message</h5>

                                                        </div>
                                                        <div class="col-md-10 col-12 ">
                                                            <h3 class="text-primary mb-3 float-right h5 text-break">
                                                                <?php echo $row->message; ?></h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-2 col-12">
                                                            <h5>Date & time</h5>

                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <h3 class="text-primary mb-0 float-right h5"><?php 
                                   
                                    echo date("d-M-Y",strtotime($row->date)).' at '.date("h:i: A",strtotime($row->time));
                                      
                                      ?></h3>
                                                        </div>
                                                    </div>

                                                </div>

                                                <?php  } ?>

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



    <script type="text/javascript">
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