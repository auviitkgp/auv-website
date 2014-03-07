  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="resources/logo_white.png" /></a></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar">
            <ul class="nav navbar-nav" id="navbarlist">
                <li class="active"><a href="index.php">Home</a></li>
               
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vehicle<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="pages/overview.php#mechanical">Mechanical Overview</a></li>
                    <li><a href="pages/overview.php#electrical">Electrical Overview</a></li>
                    <li><a href="pages/overview.php#software">Software Overview</a></li>
                </ul>
                <li><a href="pages/team.php">Team</a></li>
                <li><a href="pages/competitions.php">Competitions</a></li>
                <li class="menu-item dropdown">
                <li><a href="pages/sponsors.php">Sponsors</a></li>

                <li><a href="pages/gallery.php">Gallery</a></li>
                <li><a href="pages/contact.php">Contact Us</a></li>
                <li><a href="http://www.auv-iitkgp.in/blog">Blog</a></li>

                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://www.facebook.com/AUV.IITkgp"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/IITKGPAUV"><i class="fa fa-twitter"></i></a></li>
                <li><a href="http://www.youtube.com/channel/UCwTWLZKImXf5QvzDMk3bD5g?feature=watch"><i class="fa fa-youtube"></i></a></li>
                <li><a href="https://github.com/iit-kgp-auv-team"><i class="fa fa-github"></i></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
        </nav>
<script>
    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
        // Avoid following the href location when clicking
        event.preventDefault();
        // Avoid having the menu to close when clicking
        event.stopPropagation();
        // If a menu is already open we close it
        //$('ul.dropdown-menu [data-toggle=dropdown]').parent().removeClass('open');
        // opening the one you clicked on
        $(this).parent().addClass('open');

        var menu = $(this).parent().find("ul");
        var menupos = menu.offset();

        if ((menupos.left + menu.width()) + 30 > $(window).width()) {
            var newpos = - menu.width();
        } else {
            var newpos = $(this).parent().width();
        }
        menu.css({ left:newpos });

    });
</script>



