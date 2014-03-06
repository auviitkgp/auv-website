<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Contacts | AUV Team, IIT Kharagpur</title>
        <meta name="description" content="Contacts | AUV Team, IIT Kharagpur" />
        <meta name="keywords" content="Contacts, AUV, Autonomous, Underwater, Vehicle, Team, IIT, IIT Kharagpur, Kharagpur"/>
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
            <h1 style="text-align:center;">Contacts</h1>
            <div class="row">
                <div class="col-md-2">
                    <ul class="nav nav-pills nav-stacked" style="position: fixed; width: 10%;">
                        <li class="active"><a href="#facad">Faculty Advisor</a></li>
                        <li><a href="#studad">Student Advisors</a></li>
                        <li><a href="#mechanical">Mechanical Team</a></li>
                        <li><a href="#electrical">Electrical Team</a></li>
                        <li><a href="#software">Software Team</a></li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="well well-lg" id="facad">
                    	<h2>Faculty Advisor</h2>
                    	<div class="row">
	                    	<div class="col-md-3">
		                        <img class="img-responsive img-thumbnail" src="../resources/team_photos/prof_cs_kumar.JPG">
	                        </div>
	                    	<div class="well col-md-7 col-md-offset-1">
	                    		<a href="http://iitkgp.ac.in/fac-profiles/showprofile.php?empcode=aWmdU"><h3>Prof. C S Kumar</h3></a>
	                    		<p>
	                    			Associate Professor <br>
	                    			Department of Mechanical Engineering <br>
	                    		 	IIT Kharagpur
                    		 	</p>
	                    		<p>
	                    			email : kumar@mech.iitkgp.ernet.in<br>
	                    			Phone : +91 - 3222 - 282934
                    			</p>
	                        </div>
                        </div>
                    </div>
                    <div class="well well-lg" id="studad">
                        <h2>Student Advisors</h2>
                    </div>
                    <div class="well well-lg" id="mechanical">
                        <h2>Mechanical Team</h2>
                    </div>
                    <div class="well well-lg" id="electrical">
                        <h2>Electrical Team</h2>
                    </div>
                    <div class="well well-lg" id="software">
                        <h2>Software Team</h2>
                    </div>
                </div>
                <div class="col-md-2">
                <div class="well">
                        <h1>ABOUT US</h1>
                        The IIT Kharagpur Autonomous Underwater Vehicle Team (iKAT) is a student group working in the field of autonomous underwater robotics. We design and build Autonomous Underwater Vehicles for research and competitive purposes.
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