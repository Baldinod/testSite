<?php include("config.php");?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Somerdale Bar's Drink and Food specials with incredible prices ">
    <meta name="author" content="Dan B">
    <title>Food/Drink Specials | Somerdale Bar</title>

    <!-- LOCAL -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

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
    <style>
        .card-body{
            line-height: 40px;
        }
    </style>
</head>
<!-- add alt tags to each <img src="#" alt="helps search engines find you"/>  -->
<body data-spy="scroll" data-target="#myNavbar">
    <?php include("navbar.php");?>
    <div class="container p-4" style="padding-top:3.5rem !important">
        <section class="my-4 px-3 pt-3">
            <h2 class="text-center font-weight-bold fancy mb-4"><span class="px-3">DAILY SPECIALS</span></h2>
            <div id="accordion" class="d-flex pt-2">
                <div class="card specials-height">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <b>sunday</b>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body" style="font-size: 15pt;">
                            Free Pool<br />
                            1/2 Apps<br />
                            Combo Deal: Pasta Dish and Salad<br />
                            with a Meatball or Sausage Sandwich $6
                        </div>
                    </div>
                </div>
                <div class="card specials-height">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#Monday" aria-expanded="false" aria-controls="Monday">
                                <b>monday - friday</b>
                            </a>
                        </h5>
                    </div>
                    <div id="Monday" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <div style="font-size:15pt;">
                            Happy Hour 4 PM - 6 PM:<br />
                            Domestic Beer - Pint $2.50, Mug $1.50<br />
                            Lunch Special: Sandwich and Cup O' Soup</div>
                        </div>
                    </div>
                </div>
                <div class="card specials-height">
                    <div class="card-header" id="headingSeven">
                        <h5 class="mb-0">
                            <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#Saturday" aria-expanded="false" aria-controls="Saturday">
                                <b>saturday</b>
                            </a>
                        </h5>
                    </div>
                    <div id="Saturday" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                        <div class="card-body" style="font-size: 15pt;">
                            Karaoke starting at 9 PM!<br />
                            Drink and shot specials all night<br />
                            - Flying Fish $ 4<br />
                            - Well Drinks $ 4<br />
                            - Fireball    $ 3<br />
                            Plus many more decided daily!
                        </div>
                    </div>
                </div>
            </div>
                <div class="text-center pb-2 pt-1" style="font-size:12pt">Duration and offers may vary, be sure to check in often!</div>
           
            <script>
                $('.card-header a').click(function () {
                    $('.card-header').removeClass('active');
                    if (!$(this).closest('.card').find('.collapse').hasClass('in'))
                        $(this).parents('.card-header').addClass('active');
                });
            </script>
        </section>

    </div>
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
