<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Contact Us | Team AUV, IIT Kharagpur</title>
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
            <h1 style="text-align:center;">Contact Us</h1>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <div class="col-sm-4">
                        <h3>Drop US a line!</h3>
                        <hr>
                        <address>
                        <strong>Email:</strong> <a href="mailto:#"> ikat.kgp@gmail.com</a><br><br>
                        <strong>Phone:</strong> +91 - 74999 - 35505
                        </address>
                    </div>
    
                    <div class="col-sm-8 contact-form">
                        <form id="contact" method="post" class="form" role="form" action="mailer.php">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
                            </div>
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
                            </div>
                        </div>
                        <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
                        <br />
                        <div class="row">
                            <div class="col-xs-12 col-md-12 form-group">
                                <button class="btn btn-primary pull-right" type="submit">Submit</button>
                            </div>
                        </div>
                        </form>
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
<
