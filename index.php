<html>
<head>
  <meta charset="UTF-8">
  <title>Brentwood Big Band</title>


  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>

  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" type="text/css" href="animate.css" />
  <link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1.custom/jquery-ui.css" />

  <!--Modal scripts-->
  <link rel="stylesheet" type="text/css" href="ModalWindowEffects/css/default.css" />
  <link rel="stylesheet" type="text/css" href="ModalWindowEffects/css/component.css" />
  <script src="ModalWindowEffects/js/modernizr.custom.js"></script>

</head>

<body>
  <script src='jquery-ui-1.12.1.custom/external/jquery/jquery.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

<script src="scripts.js"></script>

<script src="dist/wow.min.js"></script>
      <script>
       new WOW().init();
     </script>


<!--Navigation bar-->

  <?php include "nav.php"; ?>

<!--end of Navigation bar-->

<!--Start hero-image-->

  <?php include "hero.php"; ?>

<!--end hero image-->

<!--About Section -->
<div class="wow dynamic rollDownUp">


  <?php include "about.php"; ?>
</div>

<script>

</script>

<!-- end about section-->

<!-- performances section -->

<?php include "performances.php"; ?>

<!--End performance Section -->

<!--begin footer-->
<?php include "footer.php"; ?>
<!--End Footer-->

<script src="/scroll.js"></script>

<!-- classie.js by @desandro: https://github.com/desandro/classie -->
<script src="ModalWindowEffects/js/classie.js"></script>
<script src="ModalWindowEffects/js/modalEffects.js"></script>

<!-- for the blur effect -->
<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
<script>
  // this is important for IEs
  var polyfilter_scriptpath = 'ModalWindowEffects/js/';
</script>
<script src="ModalWindowEffects/js/cssParser.js"></script>
<script src="ModalWindowEffects/js/css-filters-polyfill.js"></script>

<script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
