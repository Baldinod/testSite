<nav id="header" class="navbar navbar-dark nav-bg-dark fixed-top navbar-expand-lg" data-toggle="shrink">
    <!-- Navbar: Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-container" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
    <a class="navbar-brand d-none d-flex" <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php"><b>Somerdale Bar</b></a>
    <!-- Navbar: Collapse -->
    <div id="header-container" class="collapse navbar-collapse">
        <ul class="nav navbar-nav nav-fill" style="padding: 0 5rem 0 5rem;width: 100%;">
            <li class="nav-item">
                <a class="nav-link" <?php if ($CURRENT_PAGE == "Menu") {?>active<?php }?>" href="menu.php"><b>MENU</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" <?php if ($CURRENT_PAGE == "Specials") {?>active<?php }?>" href="specials.php"><b>SPECIALS</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" <?php if ($CURRENT_PAGE == "Events") {?>active<?php }?>" href="events.php"><b>EVENTS</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contact.php"><b>CONTACT</b></a>
            </li>
        </ul>
    </div>
</nav>
<script>
    $(window).scroll(function () {
        if ($(document).scrollTop() > 50) {
            $('nav').addClass('shrink');
        } else {
            $('nav').removeClass('shrink');
        }
    });
</script>

