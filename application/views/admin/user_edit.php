<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Admin Information </title>

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
                            <h3>Update Admin Information </h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo base_url();?>Admin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo base_url();?>Users">Admin List</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Admin</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php 
      $ci="";$t_id="";
      foreach ($result as $row) 
 {  
     $t_id = $row->user_id;  $status = $row->user_status;  
 ?> <?php  echo form_open_multipart('Users/update_admin' ,'class="needs-validation" novalidate'); ?>

                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Update Profile </h6>
                                            <!--  <P>If your form layout  <code>.{valid|invalid}-feedback</code>  .</P> -->
                                            <div data-label="Name" class="demo-code-preview row">
                                                <div class="col-md-6 mb-3">
                                                    <input name="user_id" id="user_id" value="<?php echo $t_id?>"
                                                        type="hidden" class="form-control">
                                                    <input type="hidden" name="url"
                                                        value="<?php echo base_url().$this->uri->uri_string();?>">


                                                    <label for="name">First Name</label>
                                                    <input name="name" id="name" value="<?php echo $row->name;?>"
                                                        type="text" class="form-control" required>
                                                    <div class="invalid-tooltip"> Please Enter Last Name. </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lname">Last Name </label>
                                                    <input name="lname" id="lname" value="<?php echo $row->lname;?>"
                                                        type="text" class="form-control" required>
                                                    <div class="invalid-tooltip"> Please Enter Lname Name. </div>
                                                </div>
                                            </div>
                                            <div data-label="Contact information" class="demo-code-preview row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="name">Email </label>
                                                    <input name="email" id="email" value="<?php echo $row->email;?>"
                                                        type="email" class="form-control" required>
                                                    <div class="invalid-tooltip"> Please Enter valid email. </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="mobile">Mobile number</label>
                                                    <input name="mobile" id="mobile" value="<?php echo $row->mobile;?>"
                                                        type="text" class="form-control" required>
                                                    <div class="invalid-tooltip"> Please Mobile number. </div>
                                                </div>

                                            </div>
                                            <div data-label="Profile picture " class="demo-code-preview row">
                                                <div class="col-md-8 col-6">
                                                    <label for="userImage">Change Profile picture <code> Height=350px  and width=350px; Max Image Size 2MB 
 		 	   </code></label>
                                                    <input name="userImage" id="userImage" type="file"
                                                        class="form-control">
                                                    <div class="invalid-tooltip">
                                                        Please Select Profile
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-6">
                                                    <input type="hidden" name="old_profile"
                                                        value="<?php echo $row->profile;?>">

                                                    <img src="<?php echo base_url()."public/img/".$row->profile;?>"
                                                        id="pre_profile" alt="profile-image" style="max-width: 120px;">

                                                </div>
                                            </div>
                                            <br>
                                            <button class="btn btn-primary" type="submit">Update Profile </button>
                                        </div>
                                    </div>


                                    <?php  
   $ci=$row->psw;
   echo form_close();?>
                                    <?php  } ?>

                                    <?php  echo form_open_multipart('Users/update_user_password' ,'class="needs-validation" novalidate'); ?>

                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Password Reset </h6>

                                            <?php 

	
 
	?>
                                            <!--  <P>If your form layout  <code>.{valid|invalid}-feedback</code>  .</P> -->
                                            <div data-label="Password " class="demo-code-preview row">
                                                <input name="user_id" id="user_id" value="<?php echo $t_id?>"
                                                    type="hidden" class="form-control">
                                                <input type="hidden" name="url"
                                                    value="<?php echo base_url().$this->uri->uri_string();?>">

                                                <div class="col-md-6 mb-3">
                                                    <label for="password">Password</label>
                                                    <input name="password" id="password" type="password"
                                                        class="form-control" required>
                                                    <div class="invalid-tooltip"> Please Enter Password. </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="password2">Confirm password</label>
                                                    <input name="password2" id="password2" type="password"
                                                        class="form-control" required>
                                                    <div class="invalid-tooltip"> Please Enter confirm password. </div>
                                                </div>




                                            </div>
                                            <br>
                                            <button class="btn btn-primary" type="submit">Update Password </button>
                                        </div>
                                    </div>

                                    <?php  echo form_close();?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- ./ Content -->



                </div>
                <!-- ./ Content body -->

                <!-- Footer -->
                <?php  $this->load->view('admin/file/footer')?>
            </div>
            <!-- ./ Content wrapper -->
        </div>
        <!-- ./ Layout wrapper -->
    </div>
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
 }  $msg3= $this->session->flashdata('fileerror');
 if ( $msg3 != "" )
 {
     echo "toastr.error('$msg3');";
 }
 
 
 ?>


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
    <script type="text/javascript">




    </script>



</body>

</html>