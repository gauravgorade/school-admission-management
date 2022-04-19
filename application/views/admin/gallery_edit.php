<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url()?>public/web/img/favicon.png">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

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

        <?php   $this->load->view('admin/file/header')?>
        <!-- Content wrapper -->
        <div class="content-wrapper">

            <?php   $this->load->view('admin/file/navbar')?>
            <!-- Content body -->
            <div class="content-body">
                <!-- Content -->
                <div class="content ">

                    <div class="page-header">
                        <div>
                            <h3>Update Gallery </h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo base_url();?>Admin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo base_url();?>admin/gallery_view">Gallery View</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Update Gallery</li>
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
                                            <h6 class="card-title">Update Gallery </h6>
                                            <!--  <P>If your form layout  <code>.{valid|invalid}-feedback</code>  .</P> -->


                                            <?php  echo form_open_multipart('Gallery/update_image' ,'class="needs-validation" novalidate'); ?>

                                            <?php  foreach ($result as $row) {   
                                                    $t_id = $row->id;   
                                                           ?>

                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="heading">Image Heading</label>
                                                    <input name="id" id="id" value="<?php echo $t_id?>" type="hidden"
                                                        class="form-control">
                                                    <input type="hidden" name="url"
                                                        value="<?php echo base_url().$this->uri->uri_string();?>">

                                                    <input required name="img_heading" id="img_heading"
                                                        value="<?php echo $row->img_heading?>" type="text"
                                                        class="form-control">
                                                    <div class="invalid-tooltip"> Please Enter Heading. </div>
                                                </div>



                                                <div class="col-md-6 ">
                                                    <label for="button_link2">Image Category </label>


                                                    <select name="img_category" id="img_category" class="form-control"
                                                        required>

                                                        <?php  $cat = $row->img_category;   ?>

                                                        <option <?php if( $cat == "") {
                                                              echo "selected";
                                                          } ?> disabled>Choose Category...</option>

                                                        <option <?php if( $cat == "classrooms") {
                                                              echo "selected";
                                                          } ?> value="classrooms">Classrooms</option>

                                                        <option <?php if( $cat == "students") {
                                                              echo "selected";
                                                          } ?> value="students">Students</option>

                                                        <option <?php if( $cat == "teachers") {
                                                              echo "selected";
                                                          } ?> value="teachers">Teachers</option>


                                                        <option <?php if( $cat == "library") {
                                                              echo "selected";
                                                          } ?> value="library">Event</option>




                                                    </select>
                                                    <div class="invalid-tooltip">
                                                        Please Selected Category
                                                    </div>
                                                </div>

                                                <div class="col-md-12" style="padding: 20px;">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <label for="userImage">Select  Image <code> Width=764px; and Height=576px Max Image Size 2MB
 		 	   </code></label>
                                                            <input name="userImage" id="userImage" type="file"
                                                                class="form-control">
                                                            <div class="invalid-tooltip">
                                                                Please Select User Image
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input type="hidden" name="old_profile"
                                                                value="<?php echo $img_path=  $row->img_path;?>">

                                                            <img src="<?php echo base_url()."public/web/pic/Gallary/".$img_path;?>"
                                                                id="pre_profile" alt="profile-image"
                                                                style="max-width: 200px;">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <?php  } ?>
                                            <button class="btn btn-primary" type="submit">Update </button>

                                            <?php  echo form_close();?>

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


            </div>
            <!-- ./ Content body -->
        </div>
        <!-- ./ Content wrapper -->
    </div>
    <!-- ./ Layout wrapper -->

    <!-- Main scripts -->
    <script src="<?php echo base_url();?>public/vendors/bundle.js"></script>

    <!-- Form validation example -->
    <script src="<?php echo base_url();?>public/assets/js/examples/form-validation.js"></script>

    <!-- Prism -->
    <script src="<?php echo base_url();?>public/vendors/prism/prism.js"></script>

    <!-- App scripts -->
    <script src="<?php echo base_url();?>public/assets/js/app.min.js"></script>


    <script type="text/javascript">
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

    <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#pre_profile').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#userImage").change(function() {
        readURL(this);
    });
    </script>
</body>

</html>