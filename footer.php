<footer>
    <div class="footer">
        <div class="animated bounce" style="width:100%;justify-content:center;display:flex;">
            <a class="top-button" href="#page-top">
                <i class="fa fa-arrow-up" style="background:transparent"></i>
            </a>
        </div>
    </div>
    <div class="row text-center pt-5 pb-3 border-between" style="justify-content:space-between;">
        <div class="col-sm-4">
            <div class="flex-wrap">
                <img src="css/img/Dalelogo.png" alt="Somerdale Bar's Logo" height="125" width="175" />
            </div>
            <div aria-label="Site navigation">
                <ul class="pagination py-4">
                    <li class="page-item"><a class="foot-link active" href="../index.php">Home</a></li>
                    <li class="page-item"><a class="foot-link" href="../index.php#about">About Us</a></li>
                    <li class="page-item"><a class="foot-link" href="../menu.php">Menu</a></li>
                    <li class="page-item"><a class="foot-link" href="../events.php">Events</a></li>
                    <li class="page-item"><a class="foot-link" href="../contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="text-center pb-3">
                <h4 class="pb-4 font-italic">Follow us!</h4>
                <div class="icon-wrap flex row">
                    <div class="flex icon">
                        <a href="https://www.facebook.com/somebar209/">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                    <div class="flex icon">
                        <a href="https://www.yelp.com/biz/somerdale-bar-somerdale?utm_campaign=www_business_share_popup&utm_medium=copy_link&utm_source=(direct)">
                            <i class="fab fa-yelp" style="color:red"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <h4 class="font-italic pb-4 text-center">Business Hours</h4>
            <p class="mx-auto" style="line-height: 2rem;">
                <b>Monday:</b>     11am-11pm<br />
                <b>Tuesday:</b>    11am-8pm<br />
                <b>Wednesday:</b>  11am-11pm<br />
                <b>Thursday:</b>    11am-11pm<br />
                <b>Friday:</b>      11am-11pm<br />
                <b>Saturday:</b>    11am-3am<br />
                <b>Sunday:</b>      12pm-10pm
            </p>
            <h6 class="font-italic text-center pt-2" style="font-size:smaller">*May vary due to holiday or inclement weather</h6>
        </div>
        <div class="col-sm-4">
            <h4 class="pb-4 font-italic">Contact</h4>
            <h6 class="pt-2"><b>Address:</b></h6>
            <p>209 N White Horse Pike<br />Somerdale, NJ 08083</p>
            <h6><b>Phone:</b></h6>
            <p>(856) 435-9893</p>
            <h6><b>Email:</b></h6>
            <p class="small">SomerdaleBarandGrill@gmail.com</p>
            <a class="page-link" href="../contact.php#contact" style="margin-top:2rem !important">Send us a message</a>
        </div>
    </div>
    <div class="footnote">
        <p class="text-center p-0">&copy;Somerdale Bar. 2019. <a href="privacy.html"> Privacy</a></p>
    </div>
</footer>
<script>
    var btn = $('.top-button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
</script>
