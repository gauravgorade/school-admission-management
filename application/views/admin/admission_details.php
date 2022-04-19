<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admission Inquiry details</title>

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
                            <h3>Admission Inquiry details</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo base_url();?>Admin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item ">
                                        <a href="<?php echo base_url();?>admin/admission_view">
                                            Admission Inquiry List </a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        <a href="#">
                                            Admission Inquiry Full Details </a>
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
                                                <h6 class="card-title mb-2">Admission Inquiry details
                                                </h6>

                                            </div>
                                            <div>
                                                <?php 
                                    	foreach ($result as $row) {  
                                    	    $t_id = $row->a_id;  $status = $row->a_status;
                                    	    $status = $row->a_status;  $tag = $row->a_tag;?>

                                                <div class="list-group list-group-flush text-capitalize ">
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-4 col-12">
                                                            <h5>Currant Admission status:</h5>

                                                        </div>
                                                        <div class="col-md-8 col-12">
                                                            <div class="text-primary mb-0  float-right text-break  "
                                                                disabled>
                                                                <?php if ($tag == 0){ ?>
                                                                <a>
                                                                    <span class="badge badge-dark text-break">Admission
                                                                        pending</span ></a>
                                                                        <?php } else  if ($tag == 1) {?>
                                                                        <a>
                                                                            <span class="badge badge-primary">Admission
                                                                                Process
                                                                            </span></a>

                                                                        <?php } else  if ($tag == 2) {?>
                                                                        <a>
                                                                            <span class="badge badge-success">Admission
                                                                                Done
                                                                            </span></a>
                                                                       
                                                                        <?php } else  if ($tag == 3) {?>
                                                                        <a>
                                                                            <span class="badge badge-warning">Admission
                                                                            Cancelled
                                                                            </span></a>
                                                                        <?php }?></h5>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0 ">
                                                        <div class="col-md-2 col-12">
                                                            <h5> Name </h5>
                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <h3 class="text-primary mb-0  float-right text-break h5">
                                                                <?php echo $row->a_name; ?></h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-2 col-12">
                                                            <h5> Father Name </h5>
                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <h3 class="text-primary mb-0  float-right text-break h5">
                                                                <?php echo $row->a_fname; ?></h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-2 col-12">
                                                            <h5> Mother Name </h5>
                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <h3 class="text-primary mb-0  float-right text-break h5">
                                                                <?php echo $row->a_mname; ?></h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-2 col-12">
                                                            <h5> Language </h5>
                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <h3 class="text-primary mb-0  float-right text-break h5">
                                                                <?php echo $row->a_lang; ?></h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-2 col-12">
                                                            <h5>Occupation</h5>

                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <h3 class="text-primary mb-0  float-right text-break h5">
                                                                <?php echo $row->a_ocp; ?> </h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-2 col-12">
                                                            <h5>Address</h5>

                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <h3 class="text-primary mb-0  float-right text-break h5">
                                                                <?php echo $row->a_add; ?></h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-2 col-12">
                                                            <h5>Previous school</h5>

                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <h3 class="text-primary mb-0  float-right text-break h5">
                                                                <?php echo $row->a_class; ?></h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-2 col-12">
                                                            <h5>Previous Result</h5>

                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <h3 class="text-primary mb-0  float-right text-break h5">
                                                                <?php echo $row->a_result; ?></h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-2 col-12">
                                                            <h5>Desired Class</h5>

                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <h3 class="text-primary mb-0  float-right text-break h5">
                                                                <?php echo $row->a_class; ?></h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-2 col-12">
                                                            <h5>Date Of birth</h5>

                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <h3 class="text-primary mb-0  float-right text-break h5">
                                                                <?php echo $row->a_dob; ?></h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-2 col-12">
                                                            <h5>Mobile No</h5>

                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <h3 class="text-primary mb-0  float-right text-break h5">
                                                                <?php echo $row->a_no; ?></h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-2 col-12">
                                                            <h5>Desired admission Date</h5>

                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <h3 class="text-primary mb-0  float-right text-break h5">
                                                                <?php echo $row->a_doa; ?></h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-2 col-12">
                                                            <h5>Inquiry Date</h5>

                                                        </div>
                                                        <div class="col-md-10 col-12">
                                                            <h3 class="text-primary mb-0  float-right text-break h5">
                                                                <?php echo $row->a_inqdt; ?></h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row list-group-item d-flex justify-content-between align-items-center px-0">
                                                        <div class="col-md-2 col-12">
                                                            <h5>Change Admission status as:</h5>

                                                        </div>
                                                        <div class="col-md-10 col-12 text-center">
                                                            <div class="text-primary mb-0  float-right text-break h5">
                                                                <div class="form-group">

                                                                    <form id="ad_tag"
                                                                        action="<?php echo base_url()."Inquiry/admission_tagging/".$t_id."/2";?>"
                                                                        method="post">


                                                                        <select id="img_catogery" name="a_tag"
                                                                            class="custom-select" required>
                                                                            <option value="">Change status</option>
                                                                            <option value="0">Pending</option>
                                                                            <option value="1">In-process</option>
                                                                            <option value="3">Cancelled</option>
                                                                            <option value="2">Done</option>
                                                                        </select>


                                                                        <div class="my-2 m-1"><button type="submit"
                                                                                form="ad_tag"
                                                                                class="btn btn-primary btn-sm">submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
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