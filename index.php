﻿<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
    <!--
        color scheme:
        green:#27633E
        tan:#E6A96C
        red:#A43A4C
        whiteish:E2E8E6
        black:#09080A
        -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Somerdale Bar's Website">
    <meta name="author" content="Dan B">

    <title>Somerdale Bar | Restaurant & Bar | Somerdale, NJ 08083</title>

    <!-- EXTERNAL  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- LOCAL -->
    <link rel="stylesheet" href="../css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
    <script type="text/javascript" async="" src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138278193-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138278193-1');
</script>
    <script async src="//static.zotabox.com/4/9/492459400de932a2fcff719b20c57f81/widgets.js"></script>
</head>
<!-- add alt tags to each <img src="#" alt="helps search engines find you"/>  -->
<body>
    
<?php include("navbar.php");?>
    <div class="container p-0 m-0 w-100">
        <div class="container-fluid">
            <div id="page-top"></div>
            <!--    Landing     -->
            <div class="container m-0 p-0">
                <!--  Carousel -->
                <div id="carousel-fade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2000">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-fade" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-fade" data-slide-to="1"></li>
                        <li data-target="#carousel-fade" data-slide-to="2"></li>
                        <li data-target="#carousel-fade" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner embed-responsive embed-responsive-16by9" role="listbox">
                        <div class="carousel-item embed-responsive-item active">
                            <img src="../css/img/budSign.jpg" alt="Bud light sign seen from the pike" class="img-fluid">
                        </div>
                        <div class="carousel-item embed-responsive-item">
                            <img src="../css/img/bar-corner.jpg" alt="View from corner of the bar" class="img-fluid">
                        </div>
                        <div class="carousel-item embed-responsive-item">
                            <img src="../css/img/pool.jpg" alt="Classic Pool Table" class="img-fluid">
                        </div>
                        <div class="carousel-item embed-responsive-item">
                            <img src="../css/img/barView.jpg" alt="After the pool room comes the main event" class="img-fluid">
                        </div>
                        <div class="landingBut d-flex">
                            <a href="#about" role="button">
                                <span class="small">Explore the Somerdale</span>
                                <br /><i class="fa fa-angle-double-down"></i>
                            </a>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carousel-fade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-fade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--  end of carousel  -->
            </div>
            <!--    Specials    -->
            <section class="my-4 mx-3 px-3">
                <div id="about"></div>
                <div class="container" style="padding:0 !important;">
                    <h2 class="text-center font-weight-bold fancy"><span class="px-3">About Us</span></h2>
                    <div class="row pt-4" style="justify-content:center">
                        <!--   Chicken Caesar img   -->
                        <div class="col-sm-6" style="padding-right: 7.5px !important; padding-left: 7.5px !important;">
                            <div class="wrap">
                                <div class="parallax3">
                                    <div class="specCaption d-flex">
                                        <a class="specialbtn specBorder" href="menu.php#dinner">Dinner Menu</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--    Specials list    -->
                        <div class="col-sm-6" style="padding-right: 7.5px !important; padding-left: 7.5px !important;">
                            <div class="wrap">
                                <div class="text-wrap vcenter">
                                    <div class="animated slide-in-left">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <a href="specials.php#happy-hour"><h4><b>Happy Hour</b></h4></a><span class="badge badge-secondary">4 PM - 6 PM </span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Lunch Specials<span class="badge badge-secondary">11 AM - 2 PM</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Saturday Drink/Shot Specials<span class="badge badge-secondary">9 PM - 3 AM</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                1/2 Apps, Free pool<span class="badge badge-secondary">Sunday</span>
                                            </li>
                                            <li id="lastSpec" class="list-group-item list-bg d-flex justify-content-center align-items-center" style="border-radius:0 0 .25rem .25rem">
                                                <hr />
                                                <a class="btn" href="specials.php">
                                                    View More!
                                                    <i class="fa fa-arrow-right"></i>
                                                </a><hr />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="gallery" class="cardPar">
                                    <div class="card">
                                        <div class="card-img2">
                                            <div class="specCaption">
                                                <a class="specialbtn specBorder" href="menu.php#cater">Catering Menu</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--   Entertainment Modals   -->
            <section class="my-4 mx-3 px-3">
                <div class="container-fluid">
                    <div class="row d-flex justify-content-around pt-4" style="padding:0 7.5px 0 7.5px !important">
                        <div class="col-md-6 d-flex justify-content-center">
                            <img id="karaokeImg" src="../css/img/karaoke.jpg" class="rounded"
                                style="height:100%;width:100%;max-width:300px;" alt="Karaoke | Night Life | Somerdale Bar">
                            <!-- The Modal -->
                            <div id="karaokeModal" class="modal">
                                <span class="close">&times;</span>
                                <div class="modal-content mb-2" id="karaoke01">
                                    <h2 class="text-center font-weight-bold">Karaoke Saturday Nights!</h2>
                                    <h5 class="text-center">Join DJs Brian Nolan & Rod MacRae <br />10 PM to 3 AM</h5>
                                    <div id="caption">
                                        <p class="text-center">Having over 50k of songs to sing to, Brian and Rod truly top the weekend
                                            off with an evening that you won't forget!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="padding-right: 7.5px !important; padding-left: 7.5px !important;">
                                    <div class="wrap" style="left:0;right:0;">
                                        <div class="card" id="gift">
                                            <h5 class="text-center font-weight-bold my-3">Gift Certificates</h5>
                                            <img src="../css/img/giftCertWM.jpg" style="width:350px;height:150px;padding:0.5rem 1rem"
                                                alt="Somerdale Bar's official gift certificate for any occassion">
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
            <!--    end of Specials     -->
            <!--    Reviews     -->
            <section class="my-4 mx-3 px-3" style="min-height: auto">
                <div class="container-fluid">
                    <h2 class="text-center font-weight-bold fancy"><span class="px-3">Customer Feedback</span></h2>
                    <div class="wrap mt-4" style="margin-left: 7.5px !important;margin-right:7.5px !important">
                    <div id="carouselIndicators" class="carousel slide" data-ride="carousel" style="height:inherit;">
                        <ol class="carousel-indicators" style="margin:0;">
                            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner text-center" role="listbox" style="padding-bottom: 2rem">
                            <div class="carousel-item embed-responsive-item active" data-id="0">
                                <div class="reviewPad d-block w-100">
                                    <blockquote cite="https://www.google.com/search?q=somerdale+bar+reviews&oq=somerdale+bar+reviews&aqs=chrome..69i57j69i60l3.4727j1j7&sourceid=chrome&ie=UTF-8#lrd=0x89c6cda436a3d5bb:0x92367708e9327f92,1,,,">
                                        Rachel M.<br />
                                        January 2019<br />
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <p class="quotation text-center" style="margin-top:10px !important">
                                            Good food and drinks, great service. Almost your local watering hole, that kind of close knit friendliness.
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="carousel-item embed-responsive-item" data-id="1">
                                <div class="reviewPad d-block w-100">
                                    <blockquote cite="https://www.google.com/search?q=somerdale+bar+reviews&oq=somerdale+bar+reviews&aqs=chrome..69i57j69i60l3.4727j1j7&sourceid=chrome&ie=UTF-8#lrd=0x89c6cda436a3d5bb:0x92367708e9327f92,1,,,">
                                        James D.<br />
                                        March 2019<br />
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <p class="quotation text-center" style="margin-top:10px !important">
                                            Excellent choice and service was top notch.
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="carousel-item embed-responsive-item" data-id="2">
                                <div class="reviewPad d-block w-100">
                                    <blockquote cite="https://www.facebook.com/nicole.carrara.9/posts/2875312105812592">
                                        Nicole C.<br />
                                        February 2019<br />
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <p class="quotation text-center" style="margin-top:2px !important">
                                            Great lunch specials!! $3.50 for a regular size sandwich (daily options!) and a cup of soup, (homemade of course!) Wednesday and Thursdays they have a gourmet dinner menu made by a professional chef! Great prices on food and drinks! Friendly staff!! Don’t miss this hidden gem!
                                            <br />Late-night dining · Cheap eats · Large portions
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>
            </section>
            <!--    End of Reviews  -->
        </div>
    </div>
    <?php include("footer.php");?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!--    Karaoke  Modal    -->
    <script>
        // Get the modal
        var modal = document.getElementById('karaokeModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('karaokeImg');
        var modalImg = document.getElementById("karaoke01");
        var captionText = document.getElementById("caption");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>
<div id="preload">
    <img src="../css/img/bar_corner.jpg" alt="Somerdale Bar Inside Scene" />
    <img src="../css/img/pool.jpg" />
    <img src="../css/img/budSign.jpg" alt="Somerdale Bar view from White Horse Pike NJ" />
    <img src="../css/img/barView.jpg" />
    <img src="../css/img/pool-table.jpg" />
    <img src="../css/img/karaoke.jpg" />
</div>
</body>
</html>
