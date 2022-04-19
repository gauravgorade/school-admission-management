<!DOCTYPE HTML>
<html lang="en">
<html>

<head>
    <title>Spread Eagle Primary School | Contact us</title>

    <meta name="description"
        content="Connect With Us:-Spread Eagle Nursery School Chief Engineer Shillong Zone Se Falls - Shillong 793011">

    <meta name="keywords" content="Spread Eagle Primary School In Shillong, Best Primary School In Shillong,Best Nursery School In Shillong,Shillong Primary School,Best School For Children,Primary School In Shillong,Admission Open For Primary School,Children School In Shillong,Ukg, Class Lkg,Lkg Class, Lkg Ukg,Lkg Students,Lkg School,Admission For Lkg,Lkg Admission,Ukg Admission,Nursery Admission,Lkg Syllabus,Ukg Ki Syllabus,Children Academy Shillong,Private School In Shillong">

    
    <!-- Link Files -->
    <?php  $this->load->view('_includes/link') ?>
    <!-- Link Files -->
    


    <style>
    @media only screen and (max-width: 768px) {
        #gmap_canvas {
            width: 100% !important;
        }
    }

    @media only screen and (min-width:768px) and (max-width:980px) {
        #gmap_canvas {
            width: 100% !important;
        }
    }

    @media only screen and (min-width:1100px) {
        #gmap_canvas {
            width: 100% !important;
        }
    }
    </style>

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

    .error {
        color: #f27c66;
    }

    .is-invalid {
        border: 1px solid #f27c66 !important;
        border-radius: 5px !important;
    }


    .loader {
        margin-top: -46px;
        margin-left: 149px;
        border: 6px solid #f27b667e;
        border-radius: 50%;
        border-top: 6px solid #f27b66;
        border-right: 6px solid #f27b667e;
        border-bottom: 6px solid #f27b66;
        width: 20px;
        height: 20px;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
        display: none;
    }

    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }
    </style>

</head>

<body class="contact-page">
    <div id="hideshowcontent">
        <header>
            <!-- header -->
            <?php  $this->load->view('_includes/header') ?>
            <!-- header -->
            <div class="page-title">
                <div class="grid-row">
                    <h1>Contact Us</h1>
                    <nav class="bread-crumb">
                        <a href="<?php echo base_url()?>">Home</a>
                        <i class="fa fa-long-arrow-right"></i>
                        <a href="<?php echo base_url()?>contact">Contact Us</a>
                    </nav>
                </div>
            </div>
        </header>
        <div class="page-content ">

            <div class="grid-row clear-fix">
                <section class=" padding-section aboutpadding clear-fix">
                    <div class="grid-col-row">
                        <div class="grid-col grid-col-8">
                            <section>

                                <h3 class="heading-btn ">CONTACT US </h3>
                                <div class="widget-contact-form">

                                    <form id="contact_form">
                                        <p class="form-row form-row-wide" id="name">
                                            <input type="text" name="name" value="" placeholder="Your Name">
                                        </p>
                                        <p class="form-row form-row-wide" id="name">
                                            <input type="text" name="number" maxlength="10" value="" placeholder="Your Number">
                                        </p>
                                        <p class="form-row form-row-wide" id="name">
                                            <input type="text" name="email" value="" placeholder="Your Email">
                                        </p>

                                        <p class="form-row form-row-wide" id="subject">

                                            <input type="text" name="subject" value="" placeholder="Subject">
                                        </p>
                                        <p class="form-row form-row-wide" id="message">

                                            <textarea name="message" cols="40" rows="3"
                                                placeholder="Your Message"></textarea>
                                        </p>
                                        <p class="form-row form-row-wide" id="submit">

                                            <input type="submit" form="contact_form" value="Submit"
                                                class="cws-button border-radius alt">

                                        </p>
                                        <p class="form-row form-row-wide">
                                        <div class="loader"></div>
                                        </p>


                                    </form>
                                </div>

                            </section>
                        </div>
                        <div class="grid-col grid-col-4 widget-address">
                            <section>
                                <h2></h2>
                                <address>
                                    <p style="color:black;"><strong class="fs-18"
                                            style="color:black;">Address:</strong><br />Spread Eagle Nursery School <br>
                                        Chief
                                        Engineer
                                        Shillong
                                        Zone <br />SE Falls - Shillong <span style="font-family:verdana;">793011</span>
                                    </p>
                                    <p><strong class="fs-18">Phone number:</strong><br />
                                        <a href="tel:+918626894073" style="color:black;"><span><span
                                                    style="font-family:verdana;">+91 8626894073</span></span></a><br />

                                    </p>
                                    <p><strong class="fs-18">E-mail:</strong><br />
                                        <a href="mailto:senurseryschool@gmail.com"
                                            style="color:black;">senurseryschool@gmail.com</a><br />

                                    </p>
                                </address>
                            </section>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <section class=" padding-section aboutpadding clear-fix">
            <div class="container col-md-12 clear-fix">

                <div class="gmap_canvas"><iframe width="1162" height="450" id="gmap_canvas"
                        src="https://maps.google.com/maps?ll=25.5743903,91.9075197&q=HQ Chief Engineer Shillong Zone&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </section>

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
    $(".main-nav ul li a").removeClass("active");
    $("#contactt").addClass("active");
    </script>
    <script>
    $('#contact_form').validate({
        rules: {
            name: {
                required: true,
            },
            number: {
                required: true,
                number: true
            },
            subject: {
                required: true,
            },
            message: {
                required: true,
            },

        },
        messages: {
            name: {
                required: "Please Enter  Your Name",

            },
            number: {
                required: "Please Enter Your Number ",
            },
            subject: {
                required: "Please provide us your subject ",
            },
            message: {
                required: "Please enter your message",
            },
        },
        // error placement
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-row').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: function(form) {

            $(".loader").show();
            $.ajax({
                type: "POST",
                url: '<?php echo base_url().'index.php/Contact/contact_us/'?>',
                data: $("#contact_form").serialize(), // serializes the form's elements.
                success: function(responce) {

                    const myObj = JSON.parse(responce);
                    msg = myObj["html"];
                    Swal.fire({
                        title: 'Thank you !',
                        text: msg,
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK, CLOSE'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    })
                }
            });

        }
    });
    </script>


</body>


</html>