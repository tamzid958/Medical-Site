<?php
include('../includes/header.php');
require_once '../controller/Controller.php';
$doctor_id = $_REQUEST["id"];
$doctor = getDoctor($doctor_id);
?>

<body>
  <div class="jumbotron jumbotron-fluid single-doctor-hero" style="background-image:linear-gradient(9deg, rgba(24,25,28,1) 0%, rgba(25,26,30,0.5578606442577031) 100%),url(/assets/images/uploaded_images/doctor_images/<?php echo $doctor[0]["profile_picture"] ?>)">
    <div class="container">
    </div>
  </div>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4 doctor-post-title"><?php echo $doctor[0]["full_name"] ?></h1>
      <h5 class="mb-0 text-muted">SPECIALIST: <mark><?php echo $doctor[0]["service"] ?> </mark>&nbsp;
        BRANCH: <mark> <?php echo $doctor[0]["category"] ?> </mark> </h5>
      <br>
      <p class="lead doctor-post-p" style="white-space: pre-wrap;"> <?php echo $doctor[0]["description"] ?> </p>
      <a href="mailto:<?php echo $doctor[0]["email"] ?> ">
        <button type="button" class="btn btn-primary "><?php echo $doctor[0]["email"] ?> </button></a>
      <a href="tel:<?php echo $doctor["phone"] ?> ">
        <button type="button" class="btn btn-success"><?php echo $doctor[0]["phone"] ?> </button></a>
      <!-- AddToAny BEGIN -->
      <div class="a2a_kit a2a_kit_size_32 a2a_default_style blog-post-share">
        <a class="a2a_button_twitter"></a>
        <a class="a2a_button_email"></a>
        <a class="a2a_button_linkedin"></a>
      </div>
      <script async src="https://static.addtoany.com/menu/page.js"></script>
      <!-- AddToAny END -->
    </div>

  </div>

</body>
<?php
include('../includes/footer.php');
?>