<!DOCTYPE HTML>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	
	<title>Spread Eagle Primary School | Home</title>
	
	<meta name="description" content="Spread Eagle Primary School have an excellent team of teachers who are working tirelessly and selflessly to provide quality education and all-around development for the students.">
	<meta name="keywords" content="Spread Eagle Primary School in Shillong, Best Primary School in Shillong, Best Nursery School in Shillong, Shillong Primary School, Best School for Children, Primary School in Shillong, Admission Open for Primary School, Admission for LKG, LKG admission, UKG admission, Nursery Admission, Children Academy Shillong, Private School in Shillong">  

	<meta name="theme-color" content="#f27c66">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#f27c66">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#f27c66">

	<!--Favicon-->
	<link rel="icon" href="<?php echo base_url()?>public/web/img/favicon.png" type="image/x-icon">
	
    <link rel="stylesheet" href="<?php echo base_url()?>public/web/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url()?>public/web/fi/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url()?>public/web/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/web/tuner/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/web/tuner/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/web/css/jquery.fancybox.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>public/web/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/web/rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>public/web/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/web/css/mystyle.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <style>
    #loadingDiv {
        position: absolute;
        ;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #fff;
        z-index: 1200;
    }

    :root {
        --yellow: #feb60a;
        --red: #ff0062;
        --blue: #00dbf9;
        --violet: #da00f7;
    }

    div.containerload {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    div.load123 {
        width: 3vw;
        height: 3vw;
        border-radius: 100%;
        margin: 2vw;
        background-image: linear-gradient(145deg, rgba(255, 255, 255, 0.5) 0%, rgba(0, 0, 0, 0) 100%);
        animation: bounce 1.5s 0.5s linear infinite;
    }

    .yellow11 {
        background-color: var(--yellow);
    }

    .red11 {
        background-color: var(--red);
        animation-delay: 0.1s;
    }

    .blue11 {
        background-color: var(--blue);
        animation-delay: 0.2s;
    }

    .violet11 {
        background-color: var(--violet);
        animation-delay: 0.3s;
    }

    .plus {
        font-size: 60px;
        position: absolute;
        margin-top: -42px;
        margin-left: 25px;
    }

    .plus2 {
        font-size: 60px;
        position: absolute;
        margin-top: -42px;
        margin-left: 35px;
    }

    .text-capitalize {
        text-transform: capitalize;
    }

    @keyframes bounce {

        0%,
        50%,
        100% {
            transform: scale(1);
            filter: blur(0px);
        }

        25% {
            transform: scale(0.6);
            filter: blur(3px);
        }

        75% {
            filter: blur(3px);
            transform: scale(1.4);
        }
    }
    </style>
</head>

<body>

    <div id="hideshowcontent">

        <header>


            <!-- header -->
            <?php  $this->load->view('_includes/header') ?>
            <!-- header -->

        </header>
        <section>


            <div class="owl-carousel full-width-slider">


                <?php   
						foreach ($result2 as $slider_row) 
						{
		
						    $slider_id = $slider_row->slider_id;

                            if ($slider_id =='1')
						    {
						?>
                <div class="gallery-item picture"> <img
                        src="<?php echo base_url()."public/img/slider/".$slider_row->img_path?>" style="width:100%" alt>
                </div>

                <?php  } 
                        if ($slider_id =='2') {?>
                <div class="gallery-item picture"> <img
                        src="<?php echo base_url()."public/img/slider/".$slider_row->img_path?>" style="width:100%" alt>
                </div>
                <?php  }  if ($slider_id =='3') {?>

                <div class="gallery-item picture"> <img
                        src="<?php echo base_url()."public/img/slider/".$slider_row->img_path?>" style="width:100%" alt>
                </div>

                <?php  } if ($slider_id !='1' AND $slider_id !='2' AND $slider_id !='3' ) { ?>

                <div class="gallery-item picture"> <img
                        src="<?php echo base_url()."public/img/slider/".$slider_row->img_path?>" style="height: 480px;"
                        alt> </div>
                <?php } }  ?>



            </div>

            <!--  -->









            <marquee width="100%" direction="left" height="30px"
                style="color:white;                                          background-color: Black;">



                <?php   
					                            foreach ($result4 as $notice_row) 
					                        	{ ?>

                ⦁ <?php echo $notice_row->n_heading; ?> &nbsp;
                <?php  }  ?> <span style="font-family:verdana;">
                </span>
            </marquee>







            <!--  -->




        </section>

        <div id="home" class="page-content ">
            <section>
                <div class="grid-row clear-fix">

                    <section class=" padding-section aboutpadding clear-fix">
                        <center>
                            <h3 class="heading-btn">LATEST NEWS</h3>
                        </center>
                        <div class="grid-col-row">
                            <div class="grid-col grid-col-4">
                                <div class="course-item">
                                    <div class="course-hover"> <img
                                            src="<?php echo base_url()?>public/web/pic/admission open.jpg" alt>
                                        <div class="hover-bg bg-color-1"></div> <a
                                            href="<?php echo base_url()?>admission">Apply Now</a>
                                    </div>
                                    <div class="course-name clear-fix "> <span class="price"></span>
                                        <h3>
                                            <a href="<?php echo base_url()?>admission">
                                                <center> <b> Admission open for <span
                                                            style="font-family:verdana;">2022-23</span>
                                                    </b></center>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="course-date bg-color-1 clear-fix">


                                        <div class="description">Admissions are open you can fill out the form now for more details check the latest news.
                                        </div>
                                        <div class="divider"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-col grid-col-4">
                                <div class="course-item">
                                    <div class="course-hover"> <img
                                            src="<?php echo base_url()?>public/web/pic/admission.jpg" alt="">
                                        <div class="hover-bg bg-color-3"></div> <a
                                            href="<?php echo base_url()?>admission">Apply Now</a>
                                    </div>
                                    <div class="course-name clear-fix "> <span class="price"></span>
                                        <h3>
                                            <a href="<?php echo base_url()?>admission">
                                                <center> <b> Click here for Admission</b></center>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="course-date bg-color-3 clear-fix">

                                        <div class="description">
                                            Online admissions are also available to enroll now. check the latest news..

                                        </div>
                                        <div class="divider"></div>

                                    </div>
                                </div>
                            </div>
                            <div class="grid-col grid-col-4" style="border-radius:4px ; background-color:#dee2e6;">
                                <div class="course-item">
                                    <div class="course-name clear-fix "> <span class="price"></span>
                                        <h3>
                                            <a href="<?php echo base_url()?>admission"
                                                style="text-transform:uppercase;">
                                                <center><b> Notice Board </b></center>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="course-date bg-color-6 clear-fix">

                                        <div class="description">
                                            <marquee direction="up" style="height:354px" scrolldelay="120"
                                                onmouseover="this.stop();" onmouseout="this.start();">



                                                <?php   
					                            foreach ($result3 as $notice_row) 
					                        	{
					                            $notice_id = $notice_row->n_id;
                                                  if ($notice_id =='1')
					                    	    {
					                        	?>


                                                <a style="color:white; font-size:20px"
                                                    href="<?php echo $notice_row->n_link; ?> "
                                                    class="ne-link text-capitalize" target="_blank">
                                                    <?php echo $notice_row->n_heading; ?></a> <br>


                                                <?php  } 
                                                
                                                     if ($notice_id =='2') {?>

                                                <a target="_blank" style="color:white;"
                                                    href="<?php echo $notice_row->n_link; ?>"
                                                    class="ne-link text-capitalize">⦁
                                                    <?php echo $notice_row->n_heading; ?> <br>

                                                    <?php  }  if ($notice_id =='3') {?>

                                                    <a target="_blank" style="color:white;"
                                                        href="<?php echo $notice_row->n_link; ?>"
                                                        class="ne-link text-capitalize">⦁
                                                        <?php echo $notice_row->n_heading; ?> <br>

                                                        <?php  } if ($notice_id !='1' AND $notice_id !='2' AND $notice_id !='3' ) { ?>

                                                        <a target="_blank" style="color:white;"
                                                            href="<?php echo $notice_row->n_link; ?>"
                                                            class="ne-link text-capitalize">⦁
                                                            <?php echo $notice_row->n_heading; ?> <br>

                                                            <?php } }  ?>

                                                        </a> &emsp;

                                            </marquee>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
            </section>
            <hr class="divider-color" />

            <section class="padding-section">
                <div class="grid-row clear-fix">
                    <div class="grid-col-row">
                        <div class="grid-col grid-col-6">
                            <div class="gallery-item picture">
                                <img src="<?php echo base_url()?>public/web/pic/school learning.jpg" alt>
                            </div>
                        </div>
                        <div class="grid-col grid-col-6 clear-fix">
                            <!-- <h2 class="ppadding">About Us</h2> -->
                            <h3 class="heading-btn">ABOUT US</h3>
                            <p>The founder of the school is Late Brig TDS Vishakhan, who laid the foundation stone of the school on 23rd Jul 1995. He laid an absolute foresight for establishing this institution for the tender toddlers to put their first step in the school-going habit within the vicinity.
Our is a small school so smugly situated beside a temple and gurudwara and so warmly protected under the umbrella of HQ Chief Engineer Shillong Zone (CESZ) campus that it reminds us of the most affectionate and secure arm of a mother around a child.
</p>
                            <a href="<?php echo base_url()?>about"
                                class="cws-button bt-color-3 border-radius alt icon-right float-right">Know
                                more
                                <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="parallaxed">
                <div class="parallax-image" data-parallax-left="0.5" data-parallax-top="0.3"
                    data-parallax-scroll-speed="0.5"> <img src="img/parallax.png" alt="">

                </div>
                <div class="them-mask bg-color-1"></div>
                <div class="grid-row">
                    <div class="grid-col-row clear-fix">
                        <div class="grid-col grid-col-3 alt">
                            <div class="counter-block">
                                <i class="flaticon-calendar"></i><br>
                                <div class="counter" data-count="25">0</div><span class="plus">+</span>

                                <div class="counter-name">
                                    <h4 style="color:white"><b>Years</b></h4>
                                </div>
                            </div>
                        </div>
                        <div class="grid-col grid-col-3 alt">
                            <div class="counter-block">
                                <i class="flaticon-multiple"></i>
                                <div class="counter" data-count="100">0</div><span class="plus2">+</span>
                                <div class="counter-name">
                                    <h4 style="color:white"><b>Students</b></h4>
                                </div>
                            </div>
                        </div>
                        <div class="grid-col grid-col-3 alt">
                            <div class="counter-block">
                                <i class="flaticon-award1"></i>
                                <div class="counter" data-count="56">0</div><span class="plus">+</span>
                                <div class="counter-name">
                                    <h4 style="color:white"><b>Achievements</b></h4>
                                </div>
                            </div>
                        </div>
                        <div class="grid-col grid-col-3 alt">
                            <div class="counter-block last">
                                <i class="flaticon-graduate"></i>
                                <div class="counter" data-count="124">0</div><span class="plus2">+</span>
                                <div class="counter-name">
                                    <h4 style="color:white"><b>Events</b></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="padding-section aboutpadding">
                <div class="grid-row clear-fix">
                    <div class="grid-col-row">

                        <div class="grid-col grid-col-6">

                            <img src="<?php echo base_url()?>public/web/pic/education.jpg" alt>

                        </div>
                        <div class="grid-col grid-col-6">
                            <div class="boxs-tab">
                                <div class="animated fadeIn active" data-box="1">



                                    <h3 class="heading-btn" style="background-color:#0ac59d">EDUCATION </h3>
                                    <p>Education is the most powerful weapon you can use to change the world.” Nelson Mandela said it. Today we can verify it. Education allows us to better understand the world in which we live. Through education, we have become thoughtful about what happens around us. We observe things from multiple perspectives and not only from the one they tell us. Education interconnects and equates us as a species. You can read complete details of Education as the most powerful weapon here in this article.

                                    <p>

                                    <p>Every day we try to convey to the students how important it is that they learn and not just pass. Of course, getting a grade is important. But if they see learning as a positive and different experience. They will make the most of it and forget the consequences of studying at home when the weather is great on the street. And most importantly, they will learn to learn.


                                    </p>
                                </div>
                                <div class="animated fadeIn" data-box="2">
                                    <h3 class="heading-btn" style="background-color:#0ac59d">SPORTS </h3>

                                    <p>Talent wins games, but Teamwork and Intelligence wins Championships”- by Michael
                                        Jordan

                                    <p>
                                    <p> In this day and age, sports play an integral part in students’ life.
                                        Youth sports is a term commonly used for sports activities for kids in the age
                                        group of earlier years. More and more kids are engaged in at least one game
                                        which goes a long way in shaping their personalities.
                                    </p>
                                    <p>For U.K.G Amos Boiginlun Singto Bist stood in the 1*t position with 98.4%,
                                        Arnav/Arush in the 2nd position with 95.6% and Athrav Chaturvedi stood in the 3
                                        d
                                        position with the score of 94.4%.
                                    </p>

                                </div>
                                <div class="animated fadeIn" data-box="3">
                                    <h3 class="heading-btn" style="background-color:#0ac59d"> ACTIVITY </h3>


                                    <p>Activities help children to develop their social skills and learn how to work in
                                        a team to achieve a shared goal. Activities allow your child the opportunity to
                                        explore different areas of interest, increase self-confidence, build leadership
                                        skills and even improve grades — all while having fun! Time management skills
                                        are one big life lesson extracurricular activities have to teach!

                                    <p>
                                    <p> Extracurricular activities in school teach life lessons that are often not
                                        taught at school or home such as how to accept failure even when one thinks one
                                        deserves to win.Extracurricular activities in school provide opportunities for
                                        kids that can’t be replicated anywhere else–learning about teamwork, developing
                                        strong communications skills (or introversion), experiencing what it’s like
                                        being on stage with an audience watching you.Extracurricular activities in
                                        school also teach your children how to work collaboratively without bullying
                                        others. This is an important skill these days where it’s often tough just being
                                        in school because of the competitiveness!</p>


                                </div>
                                <div class="animated fadeIn" data-box="4">
                                    <h3 class="heading-btn" style="background-color:#0ac59d"> RESULTS </h3>


                                    <p>In class Nursery Gracelyn Kaur stood in the first position with a score of 100%,
                                        J,
                                        Ann Matthew stood in the 2' d place with 99.6% and Ladiang Arti Lynrah stood in
                                        the
                                        3rd position with 99.5%
                                    <p>
                                    <p> For L.K.G Sal‹shi Kumari stood in the 1st position with 99.6%, Lathaiang Mauria
                                        Sailo stood 2n* with 99.2% and Ritika stood in the 3rd position</p>
                                    <p>For U.K.G Amos Boiginlun Singto Bist stood in the 1*t position with 98.4%,
                                        Arnav/Arush in the 2nd position with 95.6% and Athrav Chaturvedi stood in the 3
                                        d
                                        position with the score of 94.4%.
                                    </p>

                                </div>

                            </div>
                            <div class="tabs-box">

                                <a href="#vd" data-boxs-tab="1"
                                    class="cws-button bt-color-6 border-radius alt small active">Education</a>
                                <a href="#dvd" data-boxs-tab="2"
                                    class="cws-button bt-color-6 border-radius alt small">Sports</a>
                                <a href="#cddv" data-boxs-tab="3"
                                    class="cws-button bt-color-6 border-radius alt small">Activity</a>
                                <a href="#cvvv" data-boxs-tab="4"
                                    class="cws-button bt-color-6 border-radius alt small">Results</a>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="divider-color" />
            <section class="fullwidth-background padding-section aboutpadding">
                <div class="grid-row clear-fix">
                    <div class="center-text ppadding">
                        <h3 class="heading-btn">WHY CHOOSE US </h3>
                    </div>
                    <div class="grid-col-row">
                        <div class="grid-col grid-col-6">
                            <h3>Why We Are Better</h3>
                            <p>Our vision is to instill lifelong values that nurture trust, respect forgiveness courage, and peace...
                            </p>
                            <div class="accordions">
                                <div class="content-title active">FACILITIES</div>
                                <div class="content">Classroom/activity room enhanced by the toys and board games like carrom, snakes, ladders, etc.
                                    <li>Audio visual room</li>
                                    <li>Sickroom</li>
                                </div>
                                <div class="content-title">PLAYING FACILITIES</div>
                                <div class="content">
                                    <li>Trampoline</li>
                                    <li>see-saw</li>
                                    <li>swing</li>
                                    <li>Play station jumbo</li>
                                    <li>Turtle sand pit</li>
                                    <li>Rocker</li>
                                </div>
                                <div class="content-title">FACULTY MEMBERS</div>
                                <div class="content">We have an excellent team of teachers who are working tirelessly
                                    and
                                    selflessly to provide quality education and all round development of the students.
                                </div>
                                <div class="content-title">LOCATION</div>
                                <div class="content">Our is a small school so smugly situated beside a temple and
                                    gurudwara
                                    and so warmly protected under the umbrella of HQ Chief Engineer Shillong Zone (CESZ)
                                    campus that it reminds us of the most affectionate and secure arm
                                    of a mother around a child.
                                </div>
                            </div>

                        </div>
                        <div class="grid-col grid-col-6">
                            <div class="owl-carousel full-width-slider">

                                <div class="gallery-item picture">
                                    <img src="<?php echo base_url()?>public/web/pic/g45.jpg" alt>
                                </div>
                                <div class="gallery-item picture">
                                    <img src="<?php echo base_url()?>public/web/pic/g22.jpg" alt>
                                </div>
                                <div class="gallery-item picture">
                                    <img src="<?php echo base_url()?>public/web/pic/g24.jpg" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="parallaxed">
                <div class="parallax-image" data-parallax-left="0.5" data-parallax-top="0.3"
                    data-parallax-scroll-speed="0.5">
                    <img src="img/parallax.png" alt="">
                </div>
                <div class="them-mask bg-color-4"></div>
                <div class="grid-row center-text">
                    <div class="font-style-1 margin-none">ADMISSIONS ARE OPEN</div>
                    <div class="divider-mini"></div>
                    <p class="parallax-text">ADMISSIONS ARE OPEN
Admissions are open. For more details refer Admission page or can contact us. We have an excellent team of teachers who are working tirelessly and selflessly to provide quality education and all-around development for the students. We believe that schooling is not just about learning a language or acquiring reading and writing skills. Seeing children in their unique way as perfect and expert in their own lives.


                    </p>

                    <form class="subscribe">
                        <a href="<?php echo base_url()?>admission"
                            class="cws-button border-radius ml-2 my-2">Admission</a>

                    </form>
                </div>
            </div>

            <!-- <section class="padding-section">
            <div class="grid-row clear-fix">
                <h2 class="center-text ppadding">Community Life</h2>
                <div class="grid-col-row">
                    <div class="grid-col grid-col-4">
                        <div class="community color-1">
                            <h3>EDUCATION</h3>
                            <div class="community-logo">
                                <i class="flaticon-calendar"></i>
                            </div>
                            <div class="info-block">
                                <p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis. Aliquam lorem
                                    ante, dapibus in.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid-col grid-col-4">
                        <div class="community">
                            <h3>SPORTS</h3>
                            <div class="community-logo">
                                <i class="flaticon-pencil"></i>
                            </div>
                            <div class="info-block">
                                <p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis. Aliquam lorem
                                    ante, dapibus in.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid-col grid-col-4">
                        <div class="community color-2">
                            <h3>CURRRICULUM</h3>
                            <div class="community-logo">
                                <i class="flaticon-book1"></i>
                            </div>
                            <div class="info-block">
                                <p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis. Aliquam lorem
                                    ante, dapibus in.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

            <section class="fullwidth-background padding-section aboutpadding">
                <div class="grid-row clear-fix">
                    <div class="grid-col-row">

                        <div class="grid-col grid-col-6">
                            <div class="owl-carousel full-width-slider">
                                <div class="gallery-item picture">
                                    <img src="<?php echo base_url()?>public/web/pic/achivments.jpg" alt>
                                </div>

                            </div>
                        </div>
                        <div class="grid-col grid-col-6 clear-fix">
                            <h3 class="heading-btn">OUR ACHIEVEMENTS</h3>

                            <p>The year 2019 has been very remarkable. The school has been renovated. The principal room has also got a new makeover. Tilings have been done in the two classrooms. The activity room and classrooms are provided with new tables, chairs, and study materials for the co-curricular activities of the children. A new trampoline has also been installed. A new railing has been put up for the easy access of the children to the auditorium. The principal room has also got a new makeover.
                            </p> <a href="<?php echo base_url()?>achievements"
                                class="cws-button bt-color-3 border-radius alt icon-right float-right">know More<i
                                    class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="divider-color" />
            <section class="padding-section ">
                <div class="grid-row clear-fix">
                    <center>
                        <h3 class="heading-btn"> CLASSES </h3>
                    </center>

                    <div class="grid-col-row">
                        <div class="grid-col-row">
                            <div class="grid-col grid-col-4">
                                <div class="course-item">
                                    <div class="course-hover">
                                        <img src="<?php echo base_url()?>public/web/pic/Nursery .jpg" alt>
                                        <div class="hover-bg bg-color-4"></div>

                                    </div>
                                    <div class="course-name clear-fix">
                                        <span class="price"></span>
                                        <h3>
                                            <a href="#">
                                                <center> <b>Nursery</b> </center>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="course-date bg-color-4 clear-fix">
                                        <div class="day"> <i class="fa fa-user"></i><span
                                                style="font-family:verdana;">27</span> Student</div>
                                        <div class="time"><i class="fa fa-clock-o"></i>Admission open</div>
                                        <div class="divider"></div>
                                        <div class="description">Spread Eagle Nursery School has an environment full of
                                            vibrancy and freedom so that learning becomes an enjoyable
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="grid-col grid-col-4">
                                <div class="course-item">
                                    <div class="course-hover">
                                        <img src="<?php echo base_url()?>public/web/pic/LKG.jpg" alt>
                                        <div class="hover-bg bg-color-1"></div>

                                    </div>
                                    <div class="course-name clear-fix">
                                        <span class="price"></span>
                                        <h3>
                                            <a href="#">
                                                <center> <b>LKG</b> </center>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="course-date bg-color-1 clear-fix">
                                        <div class="day"> <i class="fa fa-user"></i><span
                                                style="font-family:verdana;">08</span> Student</div>
                                        <div class="time"><i class="fa fa-clock-o"></i>Admission open</div>
                                        <div class="divider"></div>
                                        <div class="description">School is blessing for them children get admission
                                            without
                                            any hassles, irrespective of time of year they joined the station.
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="grid-col grid-col-4">
                                <div class="course-item">
                                    <div class="course-hover">
                                        <img src="<?php echo base_url()?>public/web/pic/UKG.jpg" alt>
                                        <div class="hover-bg bg-color-3"></div>

                                    </div>
                                    <div class="course-name clear-fix">
                                        <span class="price"></span>
                                        <h3>
                                            <a href="#">
                                                <center><b>UKG</b></center>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="course-date bg-color-3 clear-fix">
                                        <div class="day"> <i class="fa fa-user"></i><span
                                                style="font-family:verdana;">22</span> Student</div>
                                        <div class="time"><i class="fa fa-clock-o"></i>Admission open</div>
                                        <div class="divider"></div>
                                        <div class="description">Only studies and no play make the children dull and
                                            unhealthy. To lift up their mood annual sports meet </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <hr class="divider-color" />
        <section class="fullwidth-background testimonial padding-section">
            <div class="grid-row">
                <h2 class="center-text">Testimonials</h2>
                <div class="owl-carousel testimonials-carousel">
                    <div class="gallery-item">
                        <div class="quote-avatar-author clear-fix"><img src="<?php echo base_url()?>public/web/pic/94x94-img-1.jpg" alt="">
                            <div class="author-info">Karl Doe<br><span>Writer</span></div>
                        </div>
                        <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo
                            ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in,
                            viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. </p>
                    </div>
                    <div class="gallery-item">
                        <div class="quote-avatar-author clear-fix"><img src="<?php echo base_url()?>public/web/pic/94x94-img-1.jpg" alt="">
                            <div class="author-info">Karl Doe<br><span>Writer</span></div>
                        </div>
                        <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo
                            ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in,
                            viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. </p>
                    </div>
                    <div class="gallery-item">
                        <div class="quote-avatar-author clear-fix"><img src="<?php echo base_url()?>public/web/pic/94x94-img-1.jpg" alt="">
                            <div class="author-info">Karl Doe<br><span>Writer</span></div>
                        </div>
                        <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo
                            ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in,
                            viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. </p>
                    </div>
                </div>
            </div>
        </section> -->
        </div>

        <footer>
            <!-- footer -->
            <?php  $this->load->view('_includes/footer') ?>
            <!-- footer end -->
        </footer>
    </div>

    <script>
    $('body').append(
        '<div class="containerload" id="loadingDiv"><div class="yellow11 load123"></div><div class="red11 load123"></div><div class="blue11 load123"></div><div class="violet11 load123"></div></div>'
    );

    $(document).ready(function() {
        var div = document.getElementById("hideshowcontent");
        if (div.style.display !== "none") {
            div.style.display = "none";
        } else {
            div.style.display = "block";
        }
    });

    $(window).on('load', function() {
        setTimeout(removeLoader, 2000); //wait for page load PLUS two seconds.
    });

    function removeLoader() {
        $("#loadingDiv").fadeOut(500, function() {
            // fadeOut complete. Remove the loading div
            var div = document.getElementById("hideshowcontent");
            if (div.style.display !== "none") {
                div.style.display = "none";
            } else {
                div.style.display = "block";
            }
            $("#loadingDiv").remove(); //makes page more lightweight 
        });
    }
    </script>

    <!-- Script Files -->
    <?php  $this->load->view('_includes/script') ?>
    <!-- Script Files -->

    <script>
    $(".main-nav ul li a").removeClass("active")
    $("#homee").addClass("active")
    </script>
</body>
</html>