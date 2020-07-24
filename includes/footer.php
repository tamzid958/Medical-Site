<!--JS File always in footer to load faster-->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js" integrity="sha512-rmZcZsyhe0/MAjquhTgiUcb4d9knaFc7b5xAfju483gbEXTkeJRUMIPk6s3ySZMYUHEcjKbjLjyddGWMrNEvZg==" crossorigin="anonymous"></script>
<script language="JavaScript" type="text/javascript" src="/assets/js/app.js"></script>

<footer>
<section class="subscriber-section">
<div class="container ">
 
  <div class="row">
    <div class="col-sm-6">
      <p>Subscribe to Newsletter <br>
          Get healthy news and solutions to your problems from our experts!</p>
    </div>
    <div class="col-sm-6">
     
    <form class="form-inline">
  <div class="form-group mb-2">
    
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="email" class="form-control mailchimp" id="email" placeholder="Email">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
</form>
    </div>
  </div>
</div>
</section>

<section class="prefooter">
<div class="container">
 
  <div class="row">
    <div class="col-sm">
    <h5 style="color:white"> Important Links </h5>
    <ul class="list-group list-group-flush important-links">
  <li class="list-group-item footer-li"><a href="/about.php">About Us</a></li>
  <li class="list-group-item footer-li"><a href="/appointment.php">Appointment</a></li>
  <li class="list-group-item footer-li"><a href="/timetable.php">Timetables</a></li>
  <li class="list-group-item footer-li"><a href="/login.php">Account Login</a></li>
</ul>
    </div>
    <div class="col-sm">
    <h5 style="color:white"> Social Networks </h5>
    <ul class="list-group list-group-flush social-links">
  <li class="list-group-item footer-li"><a href="#">Facebook</a></li>
  <li class="list-group-item footer-li"><a href="#">Twitter</a></li>
  <li class="list-group-item footer-li"><a href="#">LinkedIn</a></li>
</ul>
    </div>
    <div class="col-sm footer-form-col">
    <form>
  <div class="form-group row footer-form-row">
    <label for="inputEmail3" class="col-sm-2 col-form-label footer-form">Name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control form-trans" placeholder="Full name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label footer-form">Email</label>
    <div class="col-sm-10">
    <input type="email" class="form-control form-trans" placeholder="Email Address">
    </div>
  </div>


      <button type="submit" class="btn btn-primary">Contact Us</button>
    </div>
  </div>
</form>
    </div>
  </div>
</div>

</section>

<section class="copyright">
<div class="container">

  <div class="row">
    <div class="col-sm-6">
      <p>Copyright &copy; by OSCA Hospital Center</p>
    </div>
    <div class="col-sm-6">
      
    </div>
  </div>
</div>
</section>

<button onclick="topFunction(1000)" id="scrollTop" title="Go to top"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></button>

<script>
     
  //Get the button
var mybutton = document.getElementById("scrollTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {

  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</footer>
</html>