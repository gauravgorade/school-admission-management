<!doctype html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url()?>public/web/img/favicon.png">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="<?php echo base_url();?>public/assets/css/css2.css" rel="text/css">

    <!-- Daterangepicker -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/datepicker/daterangepicker.css" type="text/css">

    <!-- DataTable -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/dataTable/datatables.min.css" type="text/css">

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
<div class="layout-wrapper" >

 
    <!-- ./ Header -->
<?php   $this->load->view('admin/file/header')?>
    <!-- Content wrapper -->
    <div class="content-wrapper" >
        <!-- begin::navigation -->
     

		<?php   $this->load->view('admin/file/navbar')?>
 
 	  <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content ">
                    <div class="page-header d-md-flex justify-content-between">
        <div>
            <h3>Welcome back,
            
            
              <?php  echo $this->session->userdata('ci_name');?></h3>
            <p class="text-muted">This page shows an overview for your account summary.</p>
      
      <?php
      $lastyear="";
      $count_inq2 = $this->db->query("SELECT * FROM `admission_enquiry` ORDER BY `admission_enquiry`.`a_id` DESC LIMIT 0,1");
        foreach ($count_inq2->result() as $crow) 
      {
            $lastyear = date("Y", strtotime($crow->a_inqdt));
      }
      $counti=$month_data="";
      for ($i=1;$i <=12;$i++)
      {
         // echo $i;echo "<br>";
        $date1 = date("$lastyear-$i-01");

       
      // echo "<br>";
          $date2 = date("$lastyear-$i-31");

         
       //echo "<br>";echo "<br>";
       
          $count_inq3 = $this->db->query("SELECT * FROM `admission_enquiry`  WHERE a_inqdt
                BETWEEN '$date1' AND '$date2' ");
          $counti =count($count_inq3->result());

       
          $month_data.=$counti.", ";
       }
      
      
      
            ?>



      
      
      
        </div>
         
    </div>

    <div class="row">
       
         <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="card-title mb-2"><?php echo  $lastyear;?>  Admission Inquiry Report Month wise</h6>
                        <div class="d-flex justify-content-between">
                            <a href="<?php echo base_url()."Admin"?>" class="btn btn-floating">
                                <i class="ti-reload"></i>
                            </a>
                             
                        </div>
                    </div>
                    <p class="text-muted mb-4">Check how you're doing with
                     inquirys for current month</p>
                    <div id="sales"></div>
                     
                     
                     <br> <br>
                </div>
            </div>
        </div>
       
       
        <div class="col-lg-6">
            <div class="row">
              
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title"> Todays Contact us</h6>
                            <div class="d-flex align-items-center mb-1">
                                <div>
                                    <div class="avatar">
                                        <span class="avatar-title bg-info-bright text-info rounded-pill">
                                            <i class="ti-email"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="font-weight-bold ml-1 font-size-30 ml-3"> 
                                 <?php $count_inq22 = $this->db->query("SELECT * FROM contact WHERE DATE(date) = DATE(NOW())");
                                 echo     $count112=count($count_inq22->result());
                                 ?></div>
                            </div>
                           
                            <p class="mb-0"><a class="link-1" href="<?php echo base_url();?>Contact/view_contact">See  Today's number of peple connected with us.</a></p>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title"> Todays Admissions </h6>
                            <div class="d-flex align-items-center mb-1">
                                <div>
                                    <div class="avatar">
                                        <span class="avatar-title bg-warning-bright text-warning rounded-pill">
                                            <i class="ti-bookmark-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="font-weight-bold ml-1 font-size-30 ml-3">
                                <?php 
                                
                            $count_inq24 = $this->db->query("SELECT * FROM admission_enquiry WHERE DATE(a_inqdt) = DATE(NOW())");
                            echo     $count24=count($count_inq24->result());
                            ?>
                            
                          
                                
                                </div>
                            </div>
                            <p class="mb-0"><a class="link-1" href="<?php echo base_url();?>Inquiry/view_admission_enquiry">See Todays Admission List of Our Website.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        </div>
            <div class="row">
        <div class="col-md-6">
           
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="card-title mb-2">Monthly Statistics</h6>
                        
                    </div>
                    <div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <div>
                                    <h5> Admission Inquiry</h5>
                                    <div>Monthly Admission Inquiry </div>
                                </div>
                                <h3 class="text-primary mb-0">
                                <?php $count_inq25 = $this->db->query("SELECT * FROM admission_enquiry WHERE MONTH(a_inqdt) = MONTH(CURRENT_DATE()) AND YEAR(a_inqdt) = YEAR(CURRENT_DATE())");
                                echo     $count25=count($count_inq25->result());
                                 ?></h3>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <div>
                                    <h5>Contact us</h5>
                                    <div>Monthly Visitors Contact us</div>
                                </div>
                                <div>
                                    <h3 class="text-success mb-0">
                                     <?php $count_inq26 = $this->db->query("SELECT * FROM contact WHERE MONTH(date) = MONTH(CURRENT_DATE()) AND YEAR(date) = YEAR(CURRENT_DATE())");
                                 echo     $count26=count($count_inq26->result());
                                 ?></h3>
                                </div>
                            </div>
                            
                           
                           
                        </div>
                    </div>
                    
                </div>
            </div>
            
            
             <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="card-title mb-2">Statistics Over All</h6>
                        
                    </div>
                    <div>
                        <div class="list-group list-group-flush">
                            <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <div>
                                    <h5>Total Admission Inquiry </h5>
                                    <div>Total Inquiry for Admissions </div>
                                </div>
                                <h3 class="text-primary mb-0">
                                <?php $count_inq27 = $this->db->query("SELECT * FROM admission_enquiry ");
                                 echo     $count27=count($count_inq27->result());
                                 ?></h3>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <div>
                                    <h5>Contact </h5>
                                    <div>Total Visitors Contact us</div>
                                </div>
                                <div>
                                    <h3 class="text-success mb-0">
                                     <?php $count_inq28 = $this->db->query("SELECT * FROM contact");
                                 echo     $count28=count($count_inq28->result());
                                 ?></h3>
                                </div>
                            </div>
                           
                        </div>
                            
                          
                            
                            
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="col-md-6" style="margin-top: -180px">
             <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-4">
                        <div>
                            <h6 class="card-title mb-1">Monthly Inquiry</h6>
                             
                        </div>
                        <div>
                        <a href="<?php echo base_url()."Admin"?>" class="btn btn-floating">
                                <i class="ti-reload"></i>
                            </a>
                            
                        </div>
                    </div>
                    <div id="monthly-sales"></div>
                    <ul class="list-inline text-center">
                       
                        <li class="list-inline-item">
                        <i class="ti-email text-success"> </i>  Contact us  <br>
                            <small class="text-bold"> <?php echo $count26;?></small>
                        </li>
                          <li class="list-inline-item">
                          <i class="ti-bookmark-alt text-primary"> </i>   Admission inquiry <br>
                            <small class="text-bold"> <?php echo $count25;?></small>
                        </li>
                        
                       
                    </ul>
                </div>
            </div>
      
        </div>
    </div>
    
    <div class="row">
     
      	<div class="col-md-12"> 
    	  <div class="card">
        <div class="card-body">
            <h6 class="card-title">Recent Admission Inquiry</h6>
            <div class="table-responsive">
                <table id="recent-orders5" class="table">
                    <thead>
                    <tr>
                            <th>Sr</th>
                            <th>#id</th>
                         <th> Name </th>
                                        <th> Father</th>
                                        <th> Mobile </th>
                                        <th>Language </th>
                                        <th> Details</th>
                   
                        <th class="text-right">Date</th>
                    </tr>
                    </thead>
                    <tbody class="text-center"  >
                       <?php 
                       $count_inq3 = $this->db->query("SELECT * FROM `admission_enquiry` ORDER BY `admission_enquiry`.`a_id` DESC LIMIT 10");

                        
                       $sr =0;
                       foreach ($count_inq3->result() as $irow)
                           
                                    	
                           {  
                                
                               $sr= $sr +1;
                               $t_id = $irow->a_id;   
                               $status = $irow->a_status;?>
				 			   		 <tr>  
				 			   		  
				 			   		   <td> <?php echo $sr; ?></td>       
				 			   		   <td> <?php echo $irow->a_id; ?></td>       
                                        <td> <?php echo substr($irow->a_name,0,15); ?></td>
                                        <td> <?php echo substr($irow->a_fname,0,30); ?>  </td>
                                        <td> <?php echo substr($irow->a_no,0,10); ?></td>
                                        <td> <?php echo substr( $irow->a_lang,0,30); ?></td>
                                        <td> <a title="View Details"
                                                                    href="<?php echo base_url()."admin/admission_details/".$t_id;?>"
                                                                    class="btn btn-primary btn-floating btn-sm">
                                                                    <i class="ti-view-list"></i></a></td>
                                         <td> <?php 
                                         echo date("d-M-Y",strtotime($irow->a_inqdt)).' at '.date("h:i: A",strtotime($irow->a_inqtime));
                                        ?></td>
                              </tr>
                             <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

   
    	</div>
    	
  <div class="col-md-12"> 
    	  <div class="card">
        <div class="card-body">
            <h6 class="card-title">Recent Contact us  Inquiry</h6>
            <div class="table-responsive">
                <table id="recent-orders2" class="table">
                    <thead>
                    <tr>
                                            <th>Sr</th>
                                            <th>#id</th>
                                         <th> Name </th>
                                        <th> Email</th>
                                        
                                       
                                        <th> Subject</th>
                                        <th> Details</th>
                   
                        <th class="text-right">Date</th>
                    </tr>
                    </thead>
                    <tbody>
                       <?php 
                       $count_inq3 = $this->db->query("SELECT * FROM `contact` ORDER BY `contact`.`c_id` DESC LIMIT 0,10");

                       $sr =0;
                       foreach ($count_inq3->result() as $irow)
                           
                                    	
                           {  
                            $sr = $sr +1;
                               $t_id = $irow->c_id;   
                               $status = $irow->status;?>
				 			   		 <tr>  
				 			   		  
				 			   		   <td> <?php echo $sr; ?></td>       
				 			   		   <td> <?php echo $irow->c_id; ?></td>       
                                        <td> <?php echo substr($irow->name,0,15); ?></td>
                                        <td> <?php echo substr($irow->email,0,30); ?></td>
                                          <td> <?php echo substr($irow->subject,0,30); ?></td>
                                         
                                          <td> <a  title="View Details" href="<?php echo base_url()."admin/contact_details/".$t_id;?>" 
                                      		class="btn btn-primary btn-floating btn-sm">
  											<i class="ti-view-list"></i></a></td>
                                       
                                          <td> <?php 
                                          echo date("d-M-Y",strtotime($irow->date)).' at '.date("h:i: A",strtotime($irow->time));
                                        ?></td>
                              </tr>
                             <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

   
    	
    	
    
    	
  
  
    
 
     <!-- ./ Content -->

          
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
    
</div>
<!-- ./ Layout wrapper -->
  <!-- Footer -->
  <?php  $this->load->view('admin/file/footer')?>
            <!-- ./ Footer -->

<!-- Main scripts -->
    <script src="<?php echo base_url();?>public/vendors/bundle.js"></script>

    <!-- Apex chart -->
    <script src="<?php echo base_url();?>public/vendors/charts/apex/apexcharts.min.js"></script>

    <!-- Daterangepicker -->
    <script src="<?php echo base_url();?>public/vendors/datepicker/daterangepicker.js"></script>

    <!-- DataTable -->
    <script src="<?php echo base_url();?>public/vendors/dataTable/datatables.min.js"></script>

    <!-- Dashboard scripts -->
    <script src="<?php echo base_url();?>public/assets/js/examples/pages/dashboard.js"></script>
	 
   <!-- App scripts -->
   <script src="<?php echo base_url();?>public/assets/js/app.min.js"></script>

<script type="text/javascript">

  


$(function () {
 
		
	
	   var colors = {
		        primary: $('.colors .bg-primary').css('background-color').replace('rgb', '').replace(')', '').replace('(', '').split(','),
		        secondary: $('.colors .bg-secondary').css('background-color').replace('rgb', '').replace(')', '').replace('(', '').split(','),
		        info: $('.colors .bg-info').css('background-color').replace('rgb', '').replace(')', '').replace('(', '').split(','),
		        success: $('.colors .bg-success').css('background-color').replace('rgb', '').replace(')', '').replace('(', '').split(','),
		        danger: $('.colors .bg-danger').css('background-color').replace('rgb', '').replace(')', '').replace('(', '').split(','),
		        warning: $('.colors .bg-warning').css('background-color').replace('rgb', '').replace(')', '').replace('(', '').split(','),
		    };

		    var rgbToHex = function (rgb) {
		        var hex = Number(rgb).toString(16);
		        if (hex.length < 2) {
		            hex = "0" + hex;
		        }
		        return hex;
		    };

		    var fullColorHex = function (r, g, b) {
		        var red = rgbToHex(r);
		        var green = rgbToHex(g);
		        var blue = rgbToHex(b);
		        return red + green + blue;
		    };

		    colors.primary = '#' + fullColorHex(colors.primary[0], colors.primary[1], colors.primary[2]);
		    colors.secondary = '#' + fullColorHex(colors.secondary[0], colors.secondary[1], colors.secondary[2]);
		    colors.info = '#' + fullColorHex(colors.info[0], colors.info[1], colors.info[2]);
		    colors.success = '#' + fullColorHex(colors.success[0], colors.success[1], colors.success[2]);
		    colors.danger = '#' + fullColorHex(colors.danger[0], colors.danger[1], colors.danger[2]);
		    colors.warning = '#' + fullColorHex(colors.warning[0], colors.warning[1], colors.warning[2]);



		    function monthlySales() {
		        var options = {
		            series: [<?php echo $count26." , ".$count25?>],
		            chart: {
		                type: 'donut',
		                // fontFamily: chartFontStyle,
		            },
		            labels: ['Contact us ', 'Admission Inquiry '],
		            colors: [colors.success, colors.primary, colors.warning],
		            track: {
		                background: "#cccccc"
		            },
		            dataLabels: {
		                enabled: false
		            },
		            stroke: {
		                colors: [colors.success, colors.primary, colors.warning],
		            },
		            plotOptions: {
		                pie: {
		                    expandOnClick: true,
		                    donut: {
		                        labels: {
		                            show: true,
		                            value: {
		                                formatter: function (val) {
		                                    return '' + val;
		                                }
		                            }
		                        }
		                    }
		                }
		            },
		            tooltip: {
		                shared: false,
		                y: {
		                    formatter: function (val) {
		                        return '' + val;
		                    }
		                }
		            },
		            legend: {
		                show: false
		            }
		        };

		        var chart = new ApexCharts(document.querySelector("#monthly-sales"), options);

		        chart.render();
		    }

		    monthlySales();

				
function sales() {
    if ($('#sales').length) {
        var options = {
            chart: {
                type: 'bar',
                fontFamily: "Inter",
                offsetX: -26,
                stacked: false,
                height: 265,
                width: '102%',
                toolbar: {
                    show: false
                }
            },
            dataLabels: {
                enabled: false
            },
            series: [{
                name: 'Monthly Admission Inquiry',
                data: [<?php echo ($month_data);?>]
            }],
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '20%',
                    endingShape: 'rounded'
                },
            },
            colors: [colors.primary],
            xaxis: {
                categories:  ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return "" + val + ""
                    }
                }
            }
        };

        var chart = new ApexCharts(
            document.querySelector("#sales"),
            options
        );

        chart.render();
    }
}

sales();










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
}  $msg3= $this->session->flashdata('fileerror');
if ( $msg3 != "" )
{
    echo "toastr.error('$msg3');";
}

if(isset($_SESSION['success'])){
    unset($_SESSION['success']);
}
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}
if(isset($_SESSION['fileerror'])){
    unset($_SESSION['fileerror']);
}

?>



$('#recent-orders2').DataTable({
    lengthMenu: [5, 10],
    order: [[1, "desc"]],
    // scrollY: 300,
    paging: true,
    "columnDefs": [{
        "targets": 5,
        "orderable": true,
        
        
    }]
});
$('#recent-orders5').DataTable({
    lengthMenu: [5, 10],
    // scrollY: 300,
    paging: true,
    order: [[1, "desc"]],
    "columnDefs": [{
        "targets": 5,
        "orderable": true,
        
        
    }]
});



</script>



</body>
</html>
