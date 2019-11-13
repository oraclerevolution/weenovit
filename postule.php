
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Probiz responsive business HTML template">
<meta name="keywords" content="corporate, business, creative, agency, finance, multipurpose, company, modern, professional, startup">
<meta name="author" content="trendytheme.net">
<title>WeenovIT-Contact</title>

<link rel="shortcut icon" href="assets/img/ico/favicon.png">

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/img/ico/apple-touch-icon-57-precomposed.png">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">

<link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/magnific-popup/magnific-popup.css">

<link rel="stylesheet" href="assets/css/swiper.min.css">
<link rel="stylesheet" href="styles.css">

<link rel="stylesheet" href="assets/css/bootsnav.css">

<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="style.css" rel="stylesheet">


<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>

<?php include("header.php");?>


<section class="page-title pdt-30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="index.php">Accueil</a></li>
                    <li class="active">Formulaire de recrutement</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="contact-section pdt-10 pdb-100">
    <div class="container">
        <div class="contact-map-wrapper mb-30">
            <div class="main">
                <div class="row">
                    <div class="col-sm-12 mb-30 text-center">

                        <h2>Formulaire de recrutement</h2>
                        <p>Remplissez les différents champs ci-dessous</p>
                        <p>NB: <span style="color:red">*</span> signifie que le champ est obligatoire</p>
                        <div class="col-md-12 col-sm-12">
                            <form name="contact-form" id="contactForm" class="contact-form" action="sendemail.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="sr-only" for="name">Name</label>
                                                <input id="name" type="text" name="name" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="sr-only" for="email">Email</label>
                                                <input id="email" type="email" name="email" class="form-control" placeholder="Your Email">
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                            <label class="sr-only" for="subject">Subject</label>
                            <input id="subject" type="text" name="subject" class="form-control" placeholder="Subject">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                            <label class="sr-only" for="phone">Phone</label>
                            <input id="phone" type="text" name="phone" class="form-control" placeholder="Phone Number">
                            </div>
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="sr-only" for="message">Message</label>
                            <textarea name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
                            </div>
                            <div class="text-right">
                            <button type="submit" name="submit" class="send-message">Soumettre ma candidature</button>
                            </div>
                            </form>
</div> 
</div>
</div>
</div> 
</div>
</section>

<?php include("footer.php");?>


<div id="preloader">
<div id="status">
<div class="status-mes"></div>
</div>
</div>

<script src="assets/js/jquery-2.1.3.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bootsnav.js"></script>
<script src="assets/js/jquery.inview.min.js"></script>
<script src="assets/js/imagesloaded.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/jquery.countTo.js"></script>
<script src="assets/magnific-popup/jquery.magnific-popup.js"></script>
<script src="assets/js/swiper.jquery.min.js"></script>
<script src="assets/js/ajaxchimp.js"></script>
<script src="assets/js/ajaxchimp-config.js"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyDhr4dKgeLpKtlY_sXPLvjiuczMw2sIzAo"></script>
<script src="assets/js/script.js"></script>

<script type="text/javascript">
            var marker;
            var map;

            $("#link1").click(function(){
                changeMarkerPos(40.718101, -74.004462);
            });
            $("#link2").click(function(){
                changeMarkerPos(3.165559, 101.612416);
            });
            $("#link3").click(function(){
                changeMarkerPos(40.718229, -74.003745);
            });

            function initialize() {
                var styles = [{
                    stylers: [{
                        saturation: -100
                    }]
                }];
                var styledMap = new google.maps.StyledMapType(styles, {
                    name: "Styled Map"
                });
                var mapProp = {
                    center: new google.maps.LatLng(3.165659, 101.611416),
                    zoom: 17,
                    panControl: false,
                    zoomControl: false,
                    mapTypeControl: false,
                    scaleControl: true,
                    streetViewControl: false,
                    overviewMapControl: false,
                    rotateControl: true,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById("map_canvas"), mapProp);
              
                map.mapTypes.set('map_style', styledMap);
                map.setMapTypeId('map_style')

                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(3.167244, 101.612950),
                    animation: google.maps.Animation.DROP,
                    icon: 'assets/img/pin.png',
                });
              
                marker.setMap(map);
                map.panTo(marker.position);
            }

            function changeMarkerPos(lat, lon){
                myLatLng = new google.maps.LatLng(lat, lon)
                marker.setPosition(myLatLng);
                map.panTo(myLatLng);
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
</body>
</html>