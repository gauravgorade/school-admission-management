<!DOCTYPE HTML>
<html lang="en">
<html>

<head>
    <title>Spread Eagle Primary School | Calendar</title>

    <meta name="description"
        content="Spread Eagle Primary School Has A Traditional Style Academic Calendar To Show Holidays.">

    <meta name="keywords" content="Spread Eagle Primary School In Shillong, Best Primary School In Shillong,Best Nursery School In Shillong,Shillong Primary School,Best School For Children,Primary School In Shillong,Admission Open For Primary School,Children School In Shillong,Ukg, Class Lkg,Lkg Class, Lkg Ukg,Lkg Students,Lkg School,Admission For Lkg,Lkg Admission,Ukg Admission,Nursery Admission,Lkg Syllabus,Ukg Ki Syllabus,Children Academy Shillong,Private School In Shillong">

    
    <!-- Link Files -->
    <?php  $this->load->view('_includes/link') ?>
    <!-- Link Files -->
    

    <style>
    td,
    th {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:nth-child(odd) {
        background-color: none;
    }

    tr:first-child {
        background-color: #f5a1903f;
    }


    table {
        font-family: arial, sans-serif;
        clear: both;
        margin-top: 6px !important;
        margin-bottom: 6px !important;
        max-width: none !important;
        border-collapse: separate !important;
        border-spacing: 0;
        display: table;
        border-collapse: separate;
        box-sizing: border-box;
        text-indent: initial;
        border-spacing: 2px;
        border-color: grey;
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
        background-color: transparent;
        border-collapse: collapse;
        border-right-width: 0;
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

<body class="Calendar-page">
    <div id="hideshowcontent">
        <header>
            <!-- header -->
            <?php  $this->load->view('_includes/header') ?>
            <!-- header -->
            <div class="page-title">
                <div class="grid-row">
                    <h1>Academic</h1>
                    <nav class="bread-crumb">
                        <a href="<?php echo base_url()?>">Home</a>
                        <i class="fa fa-long-arrow-right"></i>
                        <a href="<?php echo base_url()?>calendar">Academic Calendar</a>
                    </nav>
                </div>
            </div>
        </header>

        <div class="page-content">
            <section>
                <div class="grid-row clear-fix">
                    <section class=" padding-section aboutpadding clear-fix">

                        <h2 class="heading-btn" style="text-transform: uppercase;">academic
                            holidays Calendar </h2>

                        <table style="margin-left: -15px;">
                            <tr>
                                <th>srno</th>
                                <th>Holiday</th>
                                <th>Month & Date</th>
                                <th>Date of the week</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Maha Shivaratri</td>
                                <td>11 Mar 2021</td>
                                <td>Thursday </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Holi</td>
                                <td>29 Mar 2021</td>
                                <td>Monday</td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Good Friday</td>
                                <td>02 Apr 2021</td>
                                <td>Friday</td>
                            </tr>
                            <tr>

                                <td>4</td>
                                <td>Baisakhi/Bihu</td>
                                <td>13 Apr 021</td>
                                <td>Tuesday</td>
                            </tr>
                            <tr>

                                <td>5</td>
                                <td>Ambedkar Jayanti</td>
                                <td>14 Apr 2021</td>
                                <td>Wednesday</td>
                            </tr>
                            <tr>

                                <td>6</td>
                                <td>Ram Navami </td>
                                <td>21 Apr 2021</td>
                                <td>Wednesday</td>
                            </tr>
                            <tr>

                                <td>7</td>
                                <td>Mahavir Jayanti </td>
                                <td>25 Apr 2021</td>
                                <td>Sunday</td>
                            </tr>
                            <tr>

                                <td>8</td>
                                <td>Id-ul-fitr</td>
                                <td>14 May2021</td>
                                <td>Friday</td>
                            </tr>
                            <tr>

                                <td>9</td>
                                <td>Buddha Purnima</td>
                                <td>26 May 2021</td>
                                <td>Wednesday</td>
                            </tr>
                            <tr>

                                <td>10</td>
                                <td>Summer Vacation</td>
                                <td>1st June- 10 June 2021</td>
                                <td>Tuesday-Thursday</td>
                            </tr>
                            <tr>

                                <td>11</td>
                                <td>School Re-open</td>
                                <td>11 June 20121</td>
                                <td>Friday</td>
                            </tr>
                            <tr>

                                <td>12</td>
                                <td>Half Yearly Examination</td>
                                <td>24 Jun – 30 Jun 2021</td>
                                <td>Thursday – Wednesday</td>
                            </tr>
                            <tr>

                                <td>13</td>
                                <td>Id-ul-Zuha</td>
                                <td>21 Jul 2021</td>
                                <td>Wednesday</td>
                            </tr>

                            <tr>

                                <td>14</td>
                                <td>Moharram</td>
                                <td>19 Aug 2021</td>
                                <td>Thursday</td>
                            </tr>

                            <tr>

                                <td>15</td>
                                <td>Onam</td>
                                <td>21 Aug 2021</td>
                                <td>Saturday</td>
                            </tr>

                            <tr>

                                <td>16</td>
                                <td>Janmashtami</td>
                                <td>30 Aug 2021</td>
                                <td>Monday </td>
                            </tr>

                            <tr>

                                <td>17</td>
                                <td>Gandhi Jayanti</td>
                                <td>02 Oct 2021</td>
                                <td>Saturday</td>
                            </tr>

                            <tr>

                                <td>18</td>
                                <td>Dussehra</td>
                                <td>11th Oct – 20th Oct 2021</td>
                                <td>Monday- Wednesday</td>
                            </tr>

                            <tr>

                                <td>19</td>
                                <td>School Re-open</td>
                                <td>21 Oct 2021</td>
                                <td>Thursday</td>
                            </tr>

                            <tr>

                                <td>20</td>
                                <td>Diwali</td>
                                <td>04 Nov 2021</td>
                                <td>Thursday</td>
                            </tr>

                            <tr>

                                <td>21</td>
                                <td>Final Examination</td>
                                <td>16 Nov – 26th Nov 2021</td>
                                <td>Tuesday - Friday</td>
                            </tr>
                            <tr>
                            <tr>

                                <td>22</td>
                                <td>Results</td>
                                <td>30th Nov 2021</td>
                                <td>Tuesday</td>
                            </tr>

                            <tr>

                                <td>23</td>
                                <td>Winter Vacation </td>
                                <td>1st Dec 2021</td>
                                <td>Wednesday</td>
                            </tr>

                            <tr>

                                <td>24</td>
                                <td>School re-open</td>
                                <td>07 Feb 2021</td>
                                <td>Monday</td>
                            </tr>

                        </table>
                    </section>

                </div>

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
    $("#schooll").addClass("active")
    </script>
</body>


</html>