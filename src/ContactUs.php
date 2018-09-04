<!--Contact Us page-->
<!--PHP script-->
<?php
session_start();
require_once'../helpers/security.php';
$errors=isset($_SESSION['errors'])?$_SESSION['errors']:[];
$fields=isset($_SESSION['fields'])?$_SESSION['fields']:[];
?>
<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Contact Us</title>
     <!--Custom Style sheet-->
 <link rel="stylesheet" type="text/css" href="../css/style.css"/>
 <link rel="stylesheet" type="text/css" href="../css/main.css"/>
<!--Font Awesome stylesheet-->
<link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css"/>
  
  <link rel="icon" type="image/x-icon" href="../Pictures/logo.png"/>
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet"/>

  <!--Droid Serif font CDN--> 
<link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">

</head> 
<!--Main content-->    
<body id="myPage">
 <!--Nav bar-->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <!--This will only appear when the screen has been shrunk-->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavBar"  aria-expanded="false" aria-controls="myNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                   
            </button>
            &nbsp;
            <a class="navbar-brand" href="index.html"><img class ="nav-logo" src="../Pictures/logo.png" alt="International exchange agency" ></a>
        </div>
        <div class="navbar-collapse collapse" id="myNavBar">
            <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
                &nbsp;
                &nbsp;
              <li><a href="AboutUs.html">About Us</a></li>
              <li><a href="ContactUs.php">Contact Us</a></li>
              <li><a href="Programs.html">Programs</a></li>   
              <li><a href="VisaSponsors.html">Visa Sponsors</a></li>
              <li><a href="Testimonials.html">Testimonials</a></li>
            </ul>
            <button class="btn btn-info navbar-btn"><a href="../files/2019WorkandTravelBrochure.pdf" download="IEAbrochure">Application Brochure</a></button>
             &nbsp;
            &nbsp;
            <button class="btn btn-info navbar-btn"><a href="../files/J1W&TapplicationForm.doc" download="J1W&TForm">Application Form</a></button>
        </div>
    </div>
    
</nav>  <!--End of nav bar-->
<!--Carousel-->
<div class="container">
<!--Carousel area-->
 <div id="myCarousel" class="carousel slide carousel-bg" data-ride="carousel">
    <!--Indicators-->
     <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="4" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="5" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="6" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="7" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="8" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="9" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="10" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="11" class="active"></li>
     </ol>
     <!--Wrapper for slides-->
     <div class="carousel-inner" role="listbox">
         <!--Initial image,other images will follow this one-->
         <div class="item active" style="background-image:url(../Pictures/IMG-20180524-WA0003.jpg);">
        </div>
         
         <div class="item" style="background-image:url(../Pictures/IMG-20161105-WA0004.jpg);">
         </div>
         
          <div class="item" style="background-image:url(../Pictures/IMG-20161105-WA0005.jpg);">
         </div>
         
          <div class="item" style="background-image:url(../Pictures/IMG-20161105-WA0019.jpg);">
         </div>
         
          <div class="item" style="background-image:url(../Pictures/IMG-20161105-WA0007.jpg);">
         </div>
          <div class="item" style="background-image:url(../Pictures/IMG-20161105-WA0025.jpg);">
         </div>
          <div class="item" style="background-image:url(../Pictures/IMG-20161105-WA0036.jpg);">
         </div>
          <div class="item" style="background-image:url(../Pictures/IMG-20161105-WA0009.jpg)">
         </div>
          <div class="item" style="background-image:url(../Pictures/IMG-20161105-WA0021.jpg);">
         </div>
          <div class="item" style="background-image:url(../Pictures/IMG-20161105-WA0023.jpg);">
         </div>
          <div class="item" style="background-image:url(../Pictures/IMG-20161105-WA0015.jpg);">
         </div>
          <div class="item" style="background-image:url(../Pictures/IMG-20161105-WA0037.jpg);">
         </div>
     </div> <!--End of inner carousel-->
    
        <!-- Left and right controls -->
         <a class="left carousel-control" href="#myCarousel" role="button" data-slide = "prev">
         <!--Previous icon-->
             <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" role="button" data-slide = "next">
         <!--Next icon-->
             <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
         </a>
     </div>
</div><!--End of carousel area-->
<br/>
<!--Main page content-->
<div class="container">
        <div class="row">
            <?php if(!empty($errors)):?>
                    <div class="panel">
                        <ul><li><?php echo implode('</li> <li>', $errors)?></li></ul>
                    </div>
                <?php endif; ?>
            <div class="col-sm-7">
            <!--Start of form-->
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h2>Questions and Comments</h2></div>
                        <div class="panel-body">
                            <form action="formprocess.php" method="post" class="form-horizontal" id="myForm">
                                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-md-10">
                        <input type="text" name="email" autocomplete="off" class="form-control" placeholder="Enter Email" <?php echo isset ($fields['email'])? 'value="'.e($fields['email']).'"':''?>>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name:
                    </label>
                    <div class="col-md-10">
                        <input type="text" name="name" autocomplete="off" class="form-control" placeholder="Enter Name" <?php echo isset ($fields['name'])? 'value="'.e($fields['name']).'"':''?>>
                    </div>
                </div>   
             <div class="form-group">
                    <label class="control-label col-sm-2" for="subject">Subject:
                    </label>
                    <div class="col-sm-10">
                        <input type="text" name="subject" autocomplete="off" class="form-control" placeholder="Enter Subject" <?php echo isset ($fields['subject'])? 'value="'.e($fields['subject']).'"':''?>>
                    </div>
                </div>
                 <div class="form-group">
                        <label for="comment" class="control-label col-sm-2">Message:</label>
                     <div class="col-sm-10">
                    <textarea class="form-control" rows="8" cols="6" id="comment" name="message"<?php echo isset ($fields['message'])? e($fields['message']):''?>></textarea>
                     </div>
                    
                </div>

                    <div class="col-sm-10">
                         <button type="submit" class="btn btn-primary btn-lg" id="submit">Submit</button>
                    </div>
                    <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">Message Sent!</h4>
                              </div>
                              <div class="modal-body">
                                  <p class="lead">Thanks for contacting us! We will get back to you as soon as possible.</p>
                              </div>    
                            </div>
                          </div>
                    </div>
                                
            </form> <!--End of contact form-->
                        </div>
                    </div>
            </div>
                <div class="col-sm-5">
                     <div class="panel panel-primary">
                        <div class="panel-heading"><h2>Postal Address</h2></div>
                        <div class="panel-body">
                            <p class="lead">International Exchange Agency</p>
                                <span><p>3 Cargill Avenue Shop 13 Kingston 10, Jamaica</p></span>
                            <span>
                            <p class="text-left">
                Phone Numbers:<br/>876-453-0694<br/>876-402-8302<br/>876-906-9311<br/>
                                E-mail: internationalexchange2@gmail.com<br/>
                                Skype:  internationalexchange2<br/>
                                Twitter: IEA<br/>
                                Website: www.ieaworkandtravel.com<br/>
                            </p>
                           </span>
                        </div>
                </div>
                   
                </div>
     </div>
             
       <hr>
    
        <!--Container for google map-->
        <div style="width:100%;height:350px" id="map">
        </div><!--End of container for map-->
   
    
</div><!--End of Main page content-->
    <br/>
    <!--Footer area -->
       <footer class="footer">
      <div class="container-fluid text-center">
          <a href="#myPage" title="To Top" class="Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
        <p class="text-center">Copyright &copy; <span class="text-primary">International Exchange Agency</span> </p>
          <br/>
        <div class="text-center center block">
            <a href="https://www.facebook.com/officallyIEA/?hc_ref=SEARCH&fref=nf" target="_blank"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a>
            &nbsp;
            <a href="https://www.instagram.com/international.exchange/?hl=en" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
        </div>
      </div>
    </footer>

       <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <!--Javascript for Google Map-->
    <!--Initalization script-->
    <script src="../js/map.js"></script>
    <!--Calling the google maps api-->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrS2ztB7FPBuVSHGOvzY4cOL6KpHyO3LI&callback=myMap">
     </script>
    <!--AIzaSyDrS2ztB7FPBuVSHGOvzY4cOL6KpHyO3LI-->
    <!--Script for smooth scrolling-->
    <script src="../js/scroll.js"></script>
    
</body>
</html>
<?php
unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>
