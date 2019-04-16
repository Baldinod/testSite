﻿<?php include("config.php");?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Somerdale Bar's variety of weekly events, including karaoke, live acoustics, wine and paint nights">
    <meta name="author" content="Dan B">
    <title>Weekly Events | Somerdale Bar</title>

    <!-- LOCAL -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/ionicons@4.4.4/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-526RRG4"></script>
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script>
        $(function () {
            $('a').each(function () {
                if ($(this).prop('href') == window.location.href) {
                    $(this).addClass('active'); $(this).parents('li').addClass('active');
                }
            });
        });
    </script>
</head>
<!-- add alt tags to each <img src="#" alt="helps search engines find you"/>  -->
<body data-spy="scroll" data-target="#myNavbar">
        <?php include("navbar.php");?>
        <div id="page-top"></div>
    <section class="my-4 px-3 pt-3">
        <div class="container" style="padding-top:3.5rem !important">
            <div class="wrap">
                <h2 class="font-italic fancy"><span class="px-3">EVENTS</span></h2>
                <p class="text-center small">We have no events planned as of right now. Check back soon!</p>
            </div>
        </div>
        </section>
   <?php include("footer.php");?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script>
            $('.nav').on('show.bs.tab', function (e) {
                $('.nav .active').removeClass('active');
            })
        </script>
        <!--    Preload images use on screen    -->
        <div id="preload">
        </div>
</body>
</html>
