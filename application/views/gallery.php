<!DOCTYPE HTML>
<html lang="en">
<html>

<head>
    <title>Spread Eagle Primary School | Gallery</title>

    <meta name="description"
        content="The Gallery Of Spread Eagle Primary School - Classroom, Students, Events, Team Of Teachers.">

    <meta name="keywords" content="Spread Eagle Primary School In Shillong, Best Primary School In Shillong,Best Nursery School In Shillong,Shillong Primary School,Best School For Children,Primary School In Shillong,Admission Open For Primary School,Children School In Shillong,Ukg, Class Lkg,Lkg Class, Lkg Ukg,Lkg Students,Lkg School,Admission For Lkg,Lkg Admission,Ukg Admission,Nursery Admission,Lkg Syllabus,Ukg Ki Syllabus,Children Academy Shillong,Private School In Shillong">



    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
    <!-- Link Files -->
    <?php  $this->load->view('_includes/link') ?>
    <!-- Link Files -->
    


 
    <style>
    .pagination li {
        position: relative !important;
        display: block !important;
        padding: .5rem .75rem !important;
        margin-left: -1px !important;
        line-height: 1.25;
        color: #007bff;
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-top-color: rgb(222, 226, 230);
        border-right-color: rgb(222, 226, 230);
        border-bottom-color: rgb(222, 226, 230);
        border-left-color: rgb(222, 226, 230);
    }

    .pagination li:hover {
        color: #0056b3;
        text-decoration: none;
        background-color: #e9ecef;
        border-color: #dee2e6;
    }

    .list-group {
        margin-bottom: 20px;
        background-color: grey;
    }

    nav {
        display: flex;
        justify-content: center;
    }

    #page {
        display: flex;
        justify-content: center;
        flex-direction: row;
        flex-wrap: wrap;
        /* height: 600px !important; */
    }

    ul li:before {
        content: "\f111";
        font-family: "FontAwesome";
        font-size: 8px;
        position: absolute;
        left: 0px;
        color: transparent;
        font-weight: 800;
        line-height: 35px;
    }

    .col-md-4 {
        background-color: white !important;
    }

    #grid-col-row {
        margin-left: 10px !important;
    }

    .activee {
        background-color: #007bff !important;
        color: #FFF !important;
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
    </style>
</head>

<body class="gallery-page">
    <div id="hideshowcontent">
        <header>
            <!-- header -->
            <?php  $this->load->view('_includes/header') ?>
            <!-- header -->
            <div class="page-title">
                <div class="grid-row">
                    <h1>Gallery</h1>
                    <nav class="bread-crumb">
                        <a href="<?php echo base_url()?>">Home</a>
                        <i class="fa fa-long-arrow-right"></i>


                        <a href="<?php echo base_url()?>gallery">Gallery</a>
                    </nav>
                </div>
            </div>
        </header>


        <div class="page-content grid-row">
            <main>
                <div class="isotopee-container">

                    <div id="grid-col-row" class="grid-col-row clear-fix my-4 d-flex justify-content-center">
                        <div class="grid-col grid-col-12">
                            <div class="columns-row ">

                                <a id="all" value="*" class="cws-button border-radius alt smaller ml-2 my-2">All</a>
                                <a id="class" value=".students"
                                    class="cws-button border-radius alt smaller ml-2 my-2">Classrooms</a>
                                <a id="stud" value=".students"
                                    class="cws-button border-radius alt smaller ml-2 my-2">Students</a>
                                <a id="teach" value=".teachers"
                                    class="cws-button border-radius alt smaller ml-2 my-2">Teachers</a>
                                <a id="eve" value=".library"
                                    class="cws-button border-radius alt smaller ml-2 my-2">Event</a>

                            </div>
                        </div>
                    </div>
                    <div id="grid-col-row" class="grid-col-row  col-md-12 ">



                        <div id="page" class="isotopee  ">
                            <?php   
						 foreach ($result as $g_row) 
						 { 
		
						    $cat = $g_row->img_category;
						    $img = $g_row->img_path;
                            ?>

                            <div class="item  <?php echo $cat ;?> list-group col-md-4">
                                <div class="picture">
                                    <div class="hover-effect"></div>
                                    <div class="link-cont">

                                        <a href="<?php echo  base_url()."public/web/pic/Gallary/".$img;?>"
                                            class="fancy fa fa-search"></a>

                                    </div>
                                    <img src="<?php echo  base_url()."public/web/pic/Gallary/".$img;?>"
                                        data-at2x="<?php echo  base_url()."public/web/pic/Gallary/".$img;?>" alt>
                                </div>
                            </div>

                         <?php } ?>


                        </div>
                    </div>



                    <nav aria-label=...>
                        <ul class=pagination>
                            <li id="previous-page"><a aria-label=Previous><span aria-hidden=true>Previous</span></a>
                            </li>
                        </ul>
                    </nav>






                </div>
            </main>
        </div>
        <footer>
            <!-- footer -->
            <?php  $this->load->view('_includes/footer') ?>
            <!-- footer end -->

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
        setTimeout(removeLoader, 5000); //wait for page load PLUS two seconds.
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
    // script for all image filter
    $(".main-nav ul li a").removeClass("active")
    $("#galleryy").addClass("active")


    $("#all").click(function() {
        $("#page .list-group").fadeIn();
    });
    $("#class").click(function() {
        $("#page .list-group").fadeOut();
        $("#page .classrooms").fadeIn();
    });
    $("#stud").click(function() {

        $("#page .list-group").fadeOut();
        $("#page .students").fadeIn();
    });
    $("#teach").click(function() {

        $("#page .list-group").fadeOut();
        $("#page .teachers").fadeIn();
    });
    $("#eve").click(function() {

        $("#page .list-group").fadeOut();
        $("#page .library").fadeIn();

    });




    // Get total number of the items that should be paginated
    var numberOfItems = $('#page .list-group').length;

    // Limit of items per each page
    var limitPerPage = 9;

    // Hide all items over page limits (e.g., 5th item, 6th item, etc.)
    $('#page .list-group:gt(' + (limitPerPage - 1) + ')').fadeOut();

    // Get number of pages
    var totalPages = Math.round(numberOfItems / limitPerPage);

    // Add first page marker
    $(".pagination").append("<li class='current-page activee'><a href='javascript:void(0)'>" + 1 + "</a></li>");

    // Loop to insert page number for each sets of items equal to page limit (e.g., limit of 4 with 20 total items = insert 5 pages)
    for (var i = 2; i <= totalPages; i++) {
        $(".pagination").append("<li class='current-page'><a href='javascript:void(0)'>" + i +
            "</a></li>"); // Insert page number into pagination tabs
    }

    // Add next button after all the page numbers  
    $(".pagination").append(
        "<li id='next-page'><a href='javascript:void(0)' aria-label=Next><span aria-hidden=true>Next</span></a></li>"
    );

    // Function that displays new items based on page number that was clicked
    $(".pagination li.current-page").on("click", function() {

        // Check if page number that was clicked on is the current page that is being displayed
        if ($(this).hasClass('activee')) {
            return false; // Return false (i.e., nothing to do, since user clicked on the page number that is already being displayed)
        } else {
            var currentPage = $(this).index(); // Get the current page number
            $(".pagination li").removeClass(
                'activee'); // Remove the 'active' class status from the page that is currently being displayed
            $(this).addClass('activee'); // Add the 'active' class status to the page that was clicked on
            $("#page .list-group").fadeOut(); // Hide all items in loop, this case, all the list groups
            var grandTotal = limitPerPage *
                currentPage; // Get the total number of items up to the page number that was clicked on


            // Loop through total items, selecting a new set of items based on page number
            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#page .list-group:eq(" + i + ")").fadeIn(); // Show items from the new page that was selected
            }
        }

    });

    // Function to navigate to the next page when users click on the next-page id (next page button)
    $("#next-page").on("click", function() {
        var currentPage = $(".pagination li.activee").index(); // Identify the current active page


        // Check to make sure that navigating to the next page will not exceed the total number of pages
        if (currentPage === totalPages) {
            return false; // Return false (i.e., cannot navigate any further, since it would exceed the maximum number of pages)
        } else {
            currentPage++; // Increment the page by one
            $(".pagination li").removeClass(
                'activee'); // Remove the 'active' class status from the current page
            $("#page .list-group").fadeOut(); // Hide all items in the pagination loop
            var grandTotal = limitPerPage *
                currentPage; // Get the total number of items up to the page that was selected



            // Loop through total items, selecting a new set of items based on page number
            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#page .list-group:eq(" + i + ")").fadeIn(); // Show items from the new page that was selected
            }

            $(".pagination li.current-page:eq(" + (currentPage - 1) + ")").addClass(
                'activee'); // Make new page number the 'active' page
        }
    });

    // Function to navigate to the previous page when users click on the previous-page id (previous page button)
    $("#previous-page").on("click", function() {
        var currentPage = $(".pagination li.activee").index(); // Identify the current active page


        // Check to make sure that users is not on page 1 and attempting to navigating to a previous page
        if (currentPage === 1) {
            return false; // Return false (i.e., cannot navigate to a previous page because the current page is page 1)
        } else {
            currentPage--; // Decrement page by one
            $(".pagination li").removeClass(
                'activee'); // Remove the 'activate' status class from the previous active page number
            $("#page .list-group").fadeOut(); // Hide all items in the pagination loop
            var grandTotal = limitPerPage *
                currentPage; // Get the total number of items up to the page that was selected



            // Loop through total items, selecting a new set of items based on page number
            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                $("#page .list-group:eq(" + i + ")").fadeIn(); // Show items from the new page that was selected
            }


            $(".pagination li.current-page:eq(" + (currentPage - 1) + ")").addClass(
                'activee'); // Make new page number the 'active' page
        }
    });
    </script>

</body>

</html>