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
 
	 <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/datatables/media/css/dataTables.bootstrap4.css" />
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
            <h3>Gallery View</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>Admin">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="<?php echo base_url();?>admin/gallery_view">View Gallery</a>
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
                            <h6 class="card-title"> Gallery View images  </h6>
                            <div class="table-responsive">
                                	<table class="table table-bordered table-striped mb-0 text-center" id="datatable-default">
                                    <thead>
                                    <tr class="table-dark">
                                      
                                        <th>Sr</th>
                                        <th>Image </th>
                                        <th>Heading</th>
                                         <th>Status</th>
                                        <th>Action </th>
                                       
                                          
                                    </tr>
                                    </thead>
                                    <tbody>
                                 <?php $counter = 0;   
                                    	foreach ($result as $row) { 

                                            $counter=  $counter + 1;  
                                    	    $t_id = $row->id;  $status = $row->img_status;  ?>
				 			    <tr>
                                        
                                        
                                        <th>   <?php echo $counter; ?>
                                         </th>
                                        <th>  <figure class="avatar avatar-xl">
											<img src="<?php echo  base_url()."public/web/pic/Gallary/".$row->img_path;?>"   alt="image">  </figure>
                                         </th>
                                        <td> <?php echo $row->img_heading; ?></td>
                                      
                                        
                                       
                                      <th><a href="<?php echo base_url()."admin/gallery_edit/".$t_id;?>"      class="btn btn-primary btn-floating btn-sm">
  											<i class="ti-pencil-alt"></i></a>  

                                              &emsp;
  											<a  data="<?php echo base_url()."Gallery/delete/".$t_id;?>" class="btn btn-secondary btn-google btn-floating  btn-sm _delete_gallery_img">
  											<i class="ti-trash"></i>  </a> 
  								  	  </th>
                                             <td>
                                             <?php if ($status == 1){ ?>
                                            <a href="<?php echo base_url()."Gallery/status/".$t_id."/0"?>">  
                                            <span class="btn btn-success btn-sm ">&emsp;Active&emsp;</span></a>  
                   							<?php } else {?>
                   						<a href="<?php echo base_url()."Gallery/status/".$t_id."/1";?>">
                   						   <span class="btn btn-danger btn-sm">Deactivate  </span></a>  
                   							   <?php }?>
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
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>	
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>	
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>		
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>	
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>	
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>



<!-- App scripts -->
<script src="<?php echo base_url();?>public/assets/js/app.min.js"></script>

<script src="<?php echo base_url();?>public/assets/js/examples.datatables.default.js"></script>
<script src="<?php echo base_url();?>public/assets/js/examples.datatables.row.with.details.js"></script>
<script src="<?php echo base_url();?>public/assets/js/examples.datatables.tabletools.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.10/sweetalert2.all.min.js"
        integrity="sha512-IG3jJs+NhoPszr+n3I3AHLii1LFFGEVZoorGJFkrd+flS4dgdAVL0AAGiPHlXB0ZD5mgPmcpVKm4KBybCeXLLA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- <?php echo base_url()."Marque/delete_notice/".$t_id;?> -->
    <script type="text/javascript">
    $("._delete_gallery_img").click(function() {
        $url = $(this).attr("data");
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
                    url: $url,
                    type: 'POST',
                    dataType: 'json',
                    success: function(responce) {
                        // JSON.stringify(responce)
                        // // alert(responce.html)
                        // Swal.fire(
                        //     'Deleted!',
                        //     responce.html,
                        //     'success'
                        // )
                        // setTimeout(function(){
                            
                        //     location.reload() }, 2000);
                        location.reload()
                    }
                });
            }
        })



    })


$('#datatable-tabletools').DataTable({
        "lengthMenu": [[10, 25, 50,,100, -1], [10, 25, 50,100, "All"]],
        scrollY: 100,
        paging: true
    };
 
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
