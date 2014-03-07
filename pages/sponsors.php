<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Sponsors | Team AUV, IIT Kharagpur</title>
        <meta name="description" content="Overview | AUV Team, IIT Kharagpur" />
        <meta name="keywords" content="Sponsors, Sponsorship, AUV, Autonomous, Underwater, Vehicle, Team, IIT, IIT Kharagpur, Kharagpur"/>
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
            <h1 style="text-align:center;">SPONSORS</h1>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <div id ="sponsors" class="well well-lg">
                        <p>
    						To achieve success in our goal team rely of generous support of our sponsors. Your kind donation will help us in purchasing costly sensor, hardware and fabrication of AUV. Sponsorship money will also support us in participating in International ROBOSUB Competition to be held in San Diego, USA(Travel support for team members).We would like to thank our sponsors for supporting the technological development in underwater Robotics . We will ensure to provide special benefits to our sponsor and would like to continue long term association.
                        </p>
                        <h3>Why Sponsor Us?</h3>
                        <ul>
                            <li>Promoting robotics research among undergraduate students.</li>
                            <li>We are one of the 4 Indian Teams which participates in international ROBOSUB, held at San Diego each year.</li>
                            <li>The team was winner of SAVe 2011(student AUV competition) organized by NIOT, ministry of earth sciences.</li>
                            <li>AUV shall be a big boost to your Corporate Social Responsibility, for supporting and nurturing a national level team which represents our country internationally.</li>
                        </ul>
                        <h3>Sponsorship Benefits</h3>
                        <ul>
                            <li>Company visibility at the AUVSI/ONR ROBOSUB competition</li>
                            <li>Special Distinction in media coverage</li>
                            <li>Company logo on competition vehicle and posters</li>
                            <li>Company information and logo on the website</li>
                            <li>Company name on the team uniform</li>
                            <li>An Asscociation with IIT Kharagpur</li>
                            <li>Recognition in time to time workshops and exhibitions by team at notable events such as the Alumni meet.</li>
                        </ul>
                        <br>
                        <b><p style="text-align:center">If you would like to sponsor us with equipment, sensors or cash sponsorship, do drop us an email at ikat.kgp@gmail.com</p></b>
                    </div>
                    <div id="spons_former" class="well well-lg">
                        <h1 align="center" style="border-bottom:1px solid #000000">Former Sponsors</h1>

                        <h2 align="center">NIOT</h2>
                        <div class="wrapper" align="center"><img src="../resources/niot.jpg" class="img-responsive img-rounded"></div>
                        <br>

                        <h2 align="center">Tecnadyne</h2>
                        <div class="wrapper" align="center"><img src="../resources/tecnadyne.gif" class="img-responsive" width="300" style="text-align:center"></div>
                        <br>

                        <h2 align="center">Indian Institute of Technology Kharagpur</h2>
                        <div class="wrapper" align="center"><img src="../resources/iitkgp.png" class="img-responsive" width="150"></div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="well">
                        <h1>ABOUT US</h1>
                        <p>
                            The IIT Kharagpur Autonomous Underwater Vehicle Team (Team AUV) is a student group working in the field of 
                            autonomous underwater robotics. We design and build fully autonomous underwater robots for research and 
                            competitive purposes. 
                        </p>
                    </div>
                    <a class="twitter-timeline" href="https://twitter.com/IITKGPAUV" data-widget-id="439755179924021248">
                        <small><strong>TWEETS BY @IITKGPAUV</strong></small>
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