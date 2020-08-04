<?php
  include('../includes/header.php');
?>
<body>
    
<div class="jumbotron jumbotron-fluid single-patient-hero" style="background-image:url(/assets/images/view-of-operating-room-247786.jpg)">
</div>


  <div class="container">
   
  <h1 class="display-4 patient-post-title ">Dummy Doctor Name 
  
  
  
  
  <button type="button" class="btn btn-info btn-doctor-new">
  New <span class="badge badge-light"> 4</span>
</button> 

<button type="button" class="btn btn-success btn-doctor-completed">
  Completed <span class="badge badge-light"> 3</span>
</button>

<button type="button" class="btn btn-danger btn-doctor-cancelled">
  Cancelled <span class="badge badge-light"> 6</span>
</button>

<button type="button" class="btn btn-dark btn-secondary btn-change-pass-doc">Settings</button>
<button type="button" class="btn btn-dark btn-logout">Log Out</button>


</h1>

  <div id="doctor-panel-switcher">
  


  <div class="container d-flex justify-content-left patient-card">
    <div class="card p-3 patient-single-card">
        <div class="d-flex flex-row justify-content-between text-align-center"> <img src="/assets/images/black_logo.png"></div>
        <p class="text-dark">Dummy Appointment Number and Name</p>
        <div class="card-bottom pt-3 px-3 mb-2 patient-single-card-bottom">
            <div class="d-flex flex-row justify-content-between text-align-center">
               
                    <p> <span class="text-white">Date: 12 Dec '20 || Time: 12:30 PM</span> <button type="button" class="btn btn-danger cancel-power-doc-btn">Reject</button></p>
                   
            </div>
         </div>
       </div>

    </div>
 </div>






  
  </div>
  
</div>




</body>



<?php
  include('../includes/footer.php');
?>
