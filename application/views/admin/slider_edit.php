<!doctype html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Slider</title>

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
            <h3>Update Slider </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>Admin">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>admin/slider_view">Slider View</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Update Slider</li>
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
<h6 class="card-title">Update Slider </h6>
 <!--  <P>If your form layout  <code>.{valid|invalid}-feedback</code>  .</P> -->
 

 <?php  echo form_open_multipart('Slider/update_slider' ,'class="needs-validation" novalidate'); ?>
			 				
          <?php  foreach ($result as $row) {   
              $t_id = $row->slider_id;   
 ?>            

   <div class="form-row">
      <div class="col-md-6 mb-3">
         <label for="heading">Slider Heading</label>
            <input name="slider_id" id="slider_id" value="<?php echo $t_id?>" type="hidden" class="form-control">
         	 <input type="hidden"   name="url" value="<?php echo base_url().$this->uri->uri_string();?>">
	
         <input name="heading" id="heading" value="<?php echo $row->heading?>" type="text" class="form-control">
         <div class="invalid-tooltip">   Please Enter Heading.  </div>
      </div>
      <div class="col-md-6 mb-3">
         <label for="sub_heading">Slider sub heading</label>
         <input name="sub_heading" id="sub_heading" value="<?php echo $row->sub_heading?>" type="text" class="form-control" >
         <div class="invalid-tooltip">
            Please Enter  Sub heading.
         </div>
      </div>
      <div class="col-md-6">
         <label for="paragraph1">Slider Paragraph 1</label>
         <input name="paragraph1" id="paragraph1" value="<?php echo $row->paragraph1?>" type="text" class="form-control" 
             >
         <div class="invalid-tooltip">
            Please Enter  Paragraph 1
         </div>
      </div>
       <div class="col-md-6 d-none">
         <label for="paragraph2">Slider Paragraph 2 </label>
         <input name="paragraph2" id="paragraph2" value="<?php echo $row->paragraph2?>" type="text" class="form-control">
         <div class="invalid-tooltip">
            Please Enter  Paragraph 2.
         </div>
      </div>
       <div class="col-md-6 d-none">
         <label for="button_link1">Slider button link 1 </label>
         <input name="button_link1" id="button_link1" value="<?php echo $row->button_link1?>"  type="text" class="form-control">
         <div class="invalid-tooltip">
            Please Enter button link 1 
         </div>
      </div>
       <div class="col-md-6 d-none">
         <label for="button_link2">Slider button link 2 </label>
         <input name="button_link2" id="button_link2" value="<?php echo $row->button_link2?>" type="text" class="form-control">
         <div class="invalid-tooltip">
            Please Enter button link 2
         </div>
      </div>
      
        <div class="col-md-12" style="padding: 20px;">
      <div class="row">
       <div class="col-md-8">
       <label for="userImage">Select Slider Image <code> Width=1170px; and Height=580px Max Image Size 2MB
 		 	   </code></label>
 			 <input name="userImage" id="userImage" type="file" class="form-control">
 		 	    <div class="invalid-tooltip">
          	  Please  Select User Image
        	 </div>
      </div>
       <div class="col-md-2">
          <input type="hidden" name="old_profile" value="<?php echo $img_path=  $row->img_path;?>">
 			
       	<img src="<?php echo base_url()."public/img/slider/".$img_path;?>" id="pre_profile" 
       	 alt="profile-image"  style="max-width: 200px;">
						
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
function readURL(input) 
{
	  if (input.files && input.files[0])
		   {
	        var reader = new FileReader();

	        reader.onload = function (e) 
	        {
	            $('#pre_profile').attr('src', e.target.result);
	        }
		 	 reader.readAsDataURL(input.files[0]);
	    	}
}   $("#userImage").change(function(){readURL(this);	});

	
</script>
</body>
 </html>
