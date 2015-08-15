<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>AUV Test Bed | Team AUV, IIT Kharagpur</title>
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
            <h1 style="text-align:center; top:0px; left:0px;">OVERVIEW</h1>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <div class="well well-lg">
                        <div style="text-align:center">
                        <img src="../resources/AUV.jpg" class="img-rounded" height="400" width="660"/ alt="" style="margin-top:20px;">
                        </div>
                        <br>
                        <br>
                        <br>
                        Indian Institute Of Technology Kharagpur along with CSIR Lab, CMERI Durgapur developed an autonomous underwater vehicle (AUV).  
                        An autonomous underwater vehicle is a robot which travels underwater. Sometimes called Unmanned Underwater Vehicles, 
                        these devices are powered by batteries and can operate in water as deep as 150 meters. 
                        It is based an advances in propulsion systems and power source technology give these robotic submarines extended endurance in both time and distance.
                        The Intelligent Systems and Robotics Lab, CAD-CAM laboratories of Mechanical Engineering Department is developing a prototype AUV test bed for  R&D in Underwater robotics.

                        This is under a project being carried out with support from Ministry Of Earth Sciences, Government  Of INDIA under the Ocean and Atmospheric Science and Technology Cell of IIT-Kharagpur.
                        <br>
                        <br>
                        <b>Following Groups are Involved</b>
                        <br>
                        <br>
                        a) Hydrodynamics and Design group, headed by Principal Investigator ,Prof.Debarata Sen of Ocean Engineering And Naval Architecture
                        <br>
                        b )Prototyping , Navigation and Control group, headed by Co-Principal Investigator, Dr.C.S.Kumar Of Mechanical Engineering Department.
                        <br>
                        c )Communication systems group,  headed by  Co-Principal Investigator,   Prof D.Kastha of    Electrical Engineering Department
                        <br>
                        The Groups Work closely with Corresponding groups at CMERI Durgapur.
                        <br>
                        <br>
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
            <h1 style="text-align:center; top:0px; left:0px;">Specifications</h1>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <div id ="sponsors" class="well well-lg">
                        <br>
                        <div style="text-align:center">
                            <img src="../resources/specifics.jpg" alt="" class="img-rounded" height="330" width="550" />
                        </div>
                        <br>
                        <br>
                        <br>
                        <div style="text-align:center">
                            <img src="../resources/specification.jpg" alt="" class="img-rounded" height="660" width="550" />
                        </div>
                        
                    </div>

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