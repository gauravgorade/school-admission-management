   <div class="navigation">
       <div class="navigation-header">
           <span>Navigation</span>
           <a href="#">
               <i class="ti-close"></i>
           </a>
       </div>
       <div class="navigation-menu-body">
           <ul>
               <li>
                   <a href="<?php echo base_url();?>admin">
                       <span class="nav-link-icon">
                           <i data-feather="pie-chart"></i>
                       </span>
                       <span>Dashboard</span>
                   </a>
               </li>

               <?php    $admin_type = $this->session->userdata('admin_type');
           
           if ($admin_type =='1') { ?>
           <li>
           <a href="#"> <span class="nav-link-icon">
                   <i data-feather="users"></i> </span>
               <span> Admin User</span>
           </a>
           <ul>
               <li>
                   <a    href="<?php echo base_url();?>admin/users_view"> View Admin </a>
               </li>
               <li>
                   <a href="<?php echo base_url();?>admin/users_add"> Add Admin</a>
               </li>

           </ul>
           </li>
         <?php  }   ?>
         
         <li>
               <a href="#"> <span class="nav-link-icon">
                       <i data-feather="book"></i> </span>
                   <span> Admission Enquiry</span>
               </a>
               <ul>
                   <li>
                       <a href="<?php echo base_url();?>admin/admission_view"> View Enquiry</a>
                   </li>
                   <li>
                       <a href="<?php echo base_url();?>admin/admission_export"> Export
                           Enquiry</a>
                   </li>

               </ul>
           </li>

           <li>
               <a href="#"> <span class="nav-link-icon">
                       <i data-feather="mail"></i> </span>
                   <span> Contact us</span>


               </a>
               <ul>
                   <li>
                       <a href="<?php echo base_url();?>admin/contact_view"> View Contact</a>
                   </li>
                   <li>
                       <a href="<?php echo base_url();?>admin/contact_export"> Export Contact</a>
                   </li>

               </ul>
           </li>

           <li>
               <a href="#"> <span class="nav-link-icon">
                       <i data-feather="activity"></i> </span>
                   <span>Marquee</span>
               </a>
               <ul>
                   <li>
                       <a href="<?php echo base_url();?>admin/marquee_view"> View Marquee</a>
                   </li>
                   <li>
                       <a href="<?php echo base_url();?>admin/marquee_add"> Add Marquee</Marquee></a>
                   </li>

               </ul>
           </li>
           <li>
               <a href="#"> <span class="nav-link-icon">
                       <i data-feather="zap"></i> </span>
                   <span>Notice </span>
               </a>
               <ul>
                   <li>
                       <a href="<?php echo base_url();?>admin/notice_view"> View Notice</a>
                   </li>
                   <li>
                       <a href="<?php echo base_url();?>admin/notice_add"> Add Notice</a>
                   </li>

               </ul>
           </li>
          
        
           <li>
               <a href="#"> <span class="nav-link-icon">
                       <i data-feather="sliders"></i>
                   </span>
                   <span> Slider</span>
               </a>
               <ul>
                   <li>
                       <a href="<?php echo base_url();?>admin/slider_view"> View Slider</a>
                   </li>
                   <li>
                       <a href="<?php echo base_url();?>admin/slider_add"> Add Slider</a>
                   </li>

               </ul>
           </li>
           <li>
               <a href="#"> <span class="nav-link-icon">
                       <i data-feather="image"></i>
                   </span>
                   <span>Gallery</span>
               </a>
               <ul>
                   <li>
                       <a href="<?php echo base_url();?>admin/gallery_view"> View Gallery</a>
                   </li>
                   <li>
                       <a href="<?php echo base_url();?>admin/gallery_add"> Add Images</a>
                   </li>

               </ul>
           </li>


         
           <li>
               <a href="<?php echo base_url() .'Admin/logout' ?>">
                   <span class="nav-link-icon">
                       <i data-feather="log-out"></i>
                   </span>
                   <span>Sign Out</span>
               </a>
           </li>



           </ul>
       </div>
   </div>
   <!-- end::navigation -->