<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Competitions | Team AUV, IIT Kharagpur</title>
        <meta name="description" content="Competitions | AUV Team, IIT Kharagpur" />
        <meta name="keywords" content="Competitions, RoboSub, Sauc-E, NIOT, SAVe, AUV, Autonomous, Underwater, Vehicle, Team, IIT, IIT Kharagpur, Kharagpur" />
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="../resources/favicon.ico" type="image/x-icon"> 
        
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/component.css" />

        <script src="../js/modernizr.custom.js"></script>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/func.js"></script>

    </head>
    <body>
        <?php include_once('navbar.php');
        ?>
        <script type="text/javascript">
            changeActive(1);
        </script>
        <div class = "container" style="margin-top:70px;">
            <h1 style="text-align:center;">Competitions</h1>
            <div class="row">
                <div class="col-md-2">
                    <ul class="nav nav-pills nav-stacked" style="position: fixed; width: 10%;">
                        <li class="active"><a href="#robosub">RoboSub</a></li>
                        <li><a href="#sauce">Sauc-E</a></li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="well well-lg">
                        <div id ="robosub">
                            <h1><a href="http://robosub.org">ROBOSUB</a></h1>
                            <p>
                                AUVSI (Association for Unmanned Vehicles System International) is an international organization based in U.S., established in 1972 with an aim to promote unmanned systems. The organization has a membership of more than 6000 people from more than 55 countries. RoboSub is one of the major competitions organized by AUVSI Foundation.  Co-sponsored by the U.S. Department of Navy, AUVSI Foundation, BOEING, Intel, SEABOTIX, Solid Works, Battelle, SPAWAR, NORTHROP GRUMMAN and other big names in the market, the event is held in San Diego every year. The competition is held every year at TRANSDEC facility, San Diego. The event is closely monitored by high personnel, with Mayor of the city visiting the arena last year. The semi-finals and finals are open to public and the final is streamed live on Internet. With around 30 participating teams from as diversified nationalities as Spain, China, Japan, Ireland, Canada, U.S.A., India etc. and belonging to universities as well as naval academies, the competition provides an excellent way to display our skills and advancements with huge publicity and media exposure. 
                            </p>
                            <h3> Arena </h3>
                            <img class="img-responsive" src="../resources/robosub_field.jpg" width="500">
                            <img class="img-responsive" src="../resources/robosub_obstacles.jpg" width="500">
                        </div>
                    </div>
                    <div id="sauce">
                        <div class="well well-lg">
                            <h1>SAUC-E</h1>
                            <p>
                            Held since 2006, SAUC-E challenges the next generation of engineers to design and build an autonomous underwater vehicle (AUV) capable of performing realistic missions.  The event is designed to encourage students to think about underwater technology and related applications while fostering innovation and technology. The event is being organized by  NATO Undersea Research Centre.
                            </p>
                            <img class="img-responsive" src="../resources/sauce_arena.jpg" width="500">
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                <div class="well">
                        <h1>ABOUT US</h1>
                        The IIT Kharagpur Autonomous Underwater Vehicle Team (Team AUV) is a student group working in the field of 
                            autonomous underwater robotics. We design and build fully autonomous underwater robots for research and 
                            competitive purposes. 
                        </div>
                    <a class="twitter-timeline" href="https://twitter.com/IITKGPAUV" data-widget-id="439755179924021248">
                        <small><strong>Tweets by @IITKGPAUV</strong></small>
                    </a>
                    <script>
                        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                    </script>

                </div>
            </div>
        </div>
    </body>
    <script>
    $('body').on('hidden.bs.modal', '.modal', function () {
        $(this).removeData('bs.modal');
    });
    </script>
    <script>
        $('li').click(function() {
        if ( ! $(this).hasClass('active')) {
        $('li.active').removeClass('active');
        $(this).addClass('active');
        // Do more stuff here
        }
        });

    </script>
</html>
