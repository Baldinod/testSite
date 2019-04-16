﻿<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Somerdale Bar's Contact Information and Contact Form">
    <meta name="author" content="Dan B">
    <title>Contact Us | Somerdale Bar</title>

    <!-- EXTERNAL  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- LOCAL -->
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-526RRG4"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
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
    <div class="m-0 border-left border-right">
        <div class="container" style="padding-top:3.5rem">
            <section class="my-4 mx-3 px-3">
                <h2 class="text-center font-weight-bold fancy"><span class="px-3">CONTACT US</span></h2>
                <div class="row pt-4" style="justify-content:center">
                    <div class="col-md-7" style="padding-right: 7.5px !important; padding-left: 7.5px !important;">
                        <div class="wrap">
                            <h4 class="text-center font-italic py-4">Location</h4>
                            <!--  Google map api  -->
                             <div class="mapouter">
                                 <div class="gmap_canvas">
                                    <iframe width="450" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=209%20N%20White%20Horse%20Pike%20Somerdale%20NJ&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5" style="padding-right: 7.5px !important; padding-left: 7.5px !important;">
                        <div class="wrap">
                            <div class="text-center">
                                <h4 class="font-italic py-4">Somerdale Bar</h4>
                                <p class="mx-auto text-center">
                                    (856) 435-9893<br />
                                    209 North White Horse Pike<br />
                                    Somerdale, NJ 08083
                                </p>
                            </div>
                            <h4 class="font-italic py-4 text-center">Business Hours</h4>
                            <p class="mx-auto text-center" style="width:11em">
                                Monday:     11am-11pm<br />
                                Tuesday:    11am-8pm<br />
                                Wednesday:  11am-11pm<br />
                                Thursday:   11am-11pm<br />
                                Friday:     11am-11pm<br />
                                Saturday:   11am-3am<br />
                                Sunday:     12pm-10pm
                            </p>
                        </div>
                    </div>
                </div>
        </section>
        </div>
        <div class="container">
            <div id="contact"></div>
            <!--Section: Contact v.2-->
            <section class="my-4 mx-3">
                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center fancy"><span class="px-3">GET IN TOUCH</span></h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-3">Questions or concerns? Contact us! We will be sure to reply as soo as we can.</p>
                 <div class="row pt-4" style="justify-content:center">
                    <div class="col-md-7" style="padding-right: 7.5px !important; padding-left: 7.5px !important;">
                        <div class="wrap">
                                <form name="contact" role="form">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="name"> Your Name:</label>
                                                    <input type="text" class="form-control" id="name" name="name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email"> Email:</label>
                                                    <input type="email" class="form-control" id="email" name="email" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                    <label for="message"> Message:</label>
                                                    <textarea class="form-control" type="textarea" name="message" id="message" maxlength="6000" rows="7"></textarea>
                                                </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 form-group">
                                                <button for="submit" type="submit" class="btn btn-lg btn-default pull-right" >Send &rarr;</button>
                                            </div>
                                        </div>
                                    </form>
                        </div>
                     </div>
                    <div class="col-md-5" style="padding-right: 7.5px !important; padding-left: 7.5px !important;">
                        <div class="wrap text-center">
                            <ul class="list-unstyled my-2">
                                <li>
                                    <i class="fa fa-location-arrow mt-2"></i>
                                    <p>Somerdale, NJ USA</p>
                                </li>
                                <li>
                                    <i class="fa fa-phone mt-2"></i>
                                    <p>(856) 435-9893</p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope mt-2"></i>
                                    <p>SomerdaleBarandGrill@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Contact v.2-->
        </div>
    </div>
    <?php include("footer.php");?>
    </div>

     <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

