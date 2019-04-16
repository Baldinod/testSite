﻿<?php include("config.php");?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Somerdale Bar's Menus for Lunch, Dinner and Catering. Best Dinner in South Jersey? Ask of customers what they think">
    <meta name="author" content="Dan B">
    <title>Menu | Daily, Dinner, Catering | Somerdale Bar</title>

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
    <div class="parallax2" style="margin-bottom:0rem">
        <div class="parallaxcaption" id="top">
            <div class="animated slide-in-left">
                <a class="button Parborder" href="#daily">
                    Daily Menu
                    <span class="fa fa-arrow-right"></span>
                </a>
            </div>
            <div class="animated slide-in-right">
                <a class="button Parborder2" href="#cater">
                    Catering
                    <span class="fa fa-arrow-right"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid p-5" id="daily" style="height:auto">
        <div class="flex-md-row">
            <div class="col-md-12">
                <nav class="navbar-tabs navbar-expand-md">
                    <button class="navbar-toggler tab-toggler" type="button" data-toggle="collapse" data-target="#tab-container" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div id="tab-container" class="collapse navbar-collapse">
                        <div class="nav nav-tabs navbar-nav nav-fill" role="tablist">
                            <a class="nav-item tab-link active" data-toggle="tab" href="#apps">Appetizers</a>
                            <a class="nav-item tab-link" data-toggle="tab" href="#soups">Soup & Salad</a>
                            <a class="nav-item tab-link" data-toggle="tab" href="#hoagie">Hoagies</a>
                            <a class="nav-item tab-link" data-toggle="tab" href="#sandy">Hot Sandwiches</a>
                            <a class="nav-item navbar-right tab-link" data-toggle="tab" href="#dinner">Entr&eacute;e</a>
                        </div>
                    </div>
                </nav>
                <!-- Tab panes -->
                <div class="tab-content" style="height:auto">
                    <!--    Apps    -->
                    <div id="apps" class="container-fluid clearfix tab-pane active">
                        <div class="flex-md-row border-between">
                            <div class="col-12 mt-4">
                                <h3 class="text-center fancy"><span class="px-3">Appetizers</span></h3>
                                <hr class="my-5">
                                <div class="card-columns px-2">
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$5.95</span>
                                        <h6 class="text-truncate">Steamed Mussels - red or white</h6>
                                        <p class="small">Served with garlic bread.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$8.95</span>
                                        <h6 class="text-truncate">Steamed Clams - red or white</h6>
                                        <p class="small">Served with garlic bread.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$8.95</span>
                                        <h6 class="text-truncate">U-Peel Shrimp</h6>
                                        <p class="small">12 shrimp ready to peel served with cocktail and tartar sauce.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$8</span>
                                        <h6 class="text-truncate">Chicken Fingers</h6>
                                        <p class="small">Breaded chicken served with you choice of condiment.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$6.95</span>
                                        <h6>Mozzarella Sticks</h6>
                                        <p class="small">Breaded and fried cheese sticks served with marinara sauce.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$4.00</span>
                                        <h6 class="text-truncate">French Fries</h6>
                                        <p class="small">Add cheese for an extra $0.50.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$8.95</span>
                                        <h6>Chicken Wings - 10</h6>
                                        <p class="small">A choice of mild or hot sauce, rance or bleu cheese, and celery.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$8.95</span>
                                        <h6>Garlic Wings</h6>
                                        <p class="small">Our chicken wings with our <b>homemade</b> garlic sauce.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$5.95</span>
                                        <h6>Onion Wings</h6>
                                        <p class="small">Breaded onion rings.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$5.95</span>
                                        <h6>Pot Stickers</h6>
                                        <p class="small">.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--    Soup & Salad    -->
                    <div id="soups" class="container clearfix tab-pane fade">
                        <div class="flex-md-row border-between">
                            <div class="col-12 mt-4">
                                <h3 class="text-center fancy"><span class="px-3">Homemade Soup</span></h3>
                                <h6 class="small text-center">(Ask about our daily soup)</h6>
                                <hr class="my-5">
                                <div class="card-columns px-2">
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$3.50</span>
                                        <h6 class="text-truncate">Soup and Sandwich special</h6>
                                        <p class="small mb-0">Soup of the day and sandwich of the day combination.</p>
                                        <h6 class="small">*served Monday - Friday 11 AM to 2 PM</h6>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$3.00</span>
                                        <h6 class="text-truncate">Cup</h6>
                                        <p class="small">Great no matter the occassion.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$4.50</span>
                                        <h6 class="text-truncate">Bowl O' Soup</h6>
                                        <p class="small">Perfect no matter the occassion.</p>
                                    </div>
                                </div>
                                <hr class="my-5" />
                                <h3 class="text-center fancy"><span class="px-3">Salads</span></h3>
                                <hr class="my-5" />
                                <div class="card-columns px-2">
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$2.95</span>
                                        <h6 class="text-truncate">Tossed</h6>
                                        <p class="small">Description of tossed salad.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$4.95</span>
                                        <h6 class="text-truncate">Caesar</h6>
                                        <p class="small">Romain lettuce. croutons, parmesaen cheese  with caesar dressing</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$8.95</span>
                                        <h6 class="text-truncate">Chicken Caesar</h6>
                                        <p class="small">Caesar salad with 3 peices of grileld chicken added</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--    Hoagies     -->
                    <div id="hoagie" class="container tab-pane fade">
                        <div class="flex-md-row border-between">
                            <div class="col-12 mt-4">
                                <h3 class="text-center fancy"><span class="px-3">Hoagies</span></h3>
                                <h6 class="small text-center">(choice of bread: white, rye or wheat)</h6>
                                <hr class="my-5">
                                <div class="card-columns px-2">
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$8.95</span>
                                        <h6 class="text-truncate">Italian</h6>
                                        <p class="small">Classic Iatlian Hoagie.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$7.95</span>
                                        <h6 class="text-truncate">Ham and Cheese</h6>
                                        <p class="small">ADd on lettuce, tomato, or onions.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$9.95</span>
                                        <h6 class="text-truncate">Roast Beef</h6>
                                        <p class="small">Homemade roast beef hoagie.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$8.95</span>
                                        <h6 class="text-truncate">Tuna</h6>
                                        <p class="small">Tuna hoagie with your choice of toppings.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--    Hot Sandwiches  -->
                    <div id="sandy" class="container tab-pane fade">
                        <div class="flex-md-row border-between">
                            <div class="col-12 mt-4">
                                <h3 class="text-center fancy"><span class="px-3">Hot Sandwiches</span></h3>
                                <h6 class="small text-center">(add cheese $0.50)(add fries $1.00)</h6>
                                <hr class="my-5">
                                <div class="card-columns px-2">
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$6.95</span>
                                        <h6 class="text-truncate">Meatballs</h6>
                                        <p class="small">.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$9.95</span>
                                        <h6 class="text-truncate">Roast Beef</h6>
                                        <p class="small">.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$8.95</span>
                                        <h6 class="text-truncate">Roast Pork</h6>
                                        <p class="small">.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$8.95</span>
                                        <h6 class="text-truncate">Steak Sandwich</h6>
                                        <p class="small">.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$7.95</span>
                                        <h6 class="text-truncate">Chicken Steak Sandwich</h6>
                                        <p class="small">.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$8.95</span>
                                        <h6 class="text-truncate">Hamburger</h6>
                                        <p class="small">.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$7.95</span>
                                        <h6 class="text-truncate">Pork Roll</h6>
                                        <p class="small">.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$6.95</span>
                                        <h6 class="text-truncate">BLT</h6>
                                        <p class="small">.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$5.95</span>
                                        <h6 class="text-truncate">Grilled Cheese</h6>
                                        <p class="small">.</p>
                                    </div>
                                    <div class="card card-body">
                                        <span class="float-right font-weight-bold">$6.95</span>
                                        <h6 class="text-truncate">Grilled Ham and Cheese</h6>
                                        <p class="small">.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--    Dinner  -->
                    <div id="dinner" class="container tab-pane fade">
                        <h3 class="text-center fancy"><span class="px-3">Our Dinners</span></h3>
                        <h6 class="text-center">*Served Wednesday and Thursday 4PM-9PM</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr id="cater" class="p-1 mt-5" />
    <!--    Catering   -->
    <section class="p-0 my-4 mx-3">
        <div class="container-fluid p-4" style="height:auto">
            <h2 class="font-italic fancy"><span class="px-3">Catering</span></h2>
            <div class="row my-4 pt-4">
                <div class="col-md-6" style="padding-right: 7.5px !important; padding-left: 7.5px !important;">
                    <div class="wrap">
                        <div class="parallax4"></div>
                    </div>
                </div>
                <!--   Description  -->
                <div class="col-md-6" style="padding-right: 7.5px !important; padding-left: 7.5px !important;">
                    <div class="wrap">
                        <h4 class="font-weight-bold">Any Occassion</h4>
                        <p>Birthdays, Anniversaries, Weddings, any celeberation we will cater for you. </p>
                        <h4 class="font-weight-bold">No Matter the Time</h4>
                        <p>Noon or the evening? Does not matter to us. We will comply to your needs regardless of the time.</p>
                        <h4 class="font-weight-bold">We Deliver</h4>
                        <p>We know the complications for planning parties. That being said, you do not have to worry about picking up the food you purchase. We will deliver it and set it up for your convenience.</p>
                        <div class="container-fluid">
                            <h5 class="font-weight-bold">
                                View our menu<i class="px-4 fa fa-long-arrow-alt-right" style="transform: scaleX(3);"></i>
                                <img id="caterImg" src="css/img/cater-menu.jpg" class="rounded" style="width:20%;max-width:300px;" alt="Catering Menu | Delivery | Low Prices">
                            </h5>
                            <!-- The Modal -->
                            <div id="myModal" class="modal">
                                <span class="close">&times;</span>
                                <img class="modal-content" id="img01">
                                <div id="caption"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include("footer.php");?>
  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('caterImg');
        var modalImg = document.getElementById("img01");
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
    <script>
        $('.nav').on('show.bs.tab', function (e) {
            $('.nav .active').removeClass('active');
        })
    </script>
    <!--    Preload images use on screen    -->
    <div id="preload">
        <img src="../css/img/steak.jpg" />
        <img src="../css/img/cater-menu.jpg" />
    </div>
</body>
</html>
