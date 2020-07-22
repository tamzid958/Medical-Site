<?php
  include('includes/header.php');
?>

<body>

<div class="container">
     <img src="about.jpg" class="img-fluid" alt="Responsive image" >
     <div class="">
         <h1>ABOUT US</h1>
     </div>
     <div class="">
         <p>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida. Phasellus velit risus, euismod a lacus et, mattis condimentum augue. Vivamus fermentum ex quis imperdiet sodales.</span>
         </p>
     </div>
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <h3>Professionals</h3>
      <h2>Welcome to Medical Clinic</h2>
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
            <img src="about-slide.jpg" class="d-block w-100" alt="...">
            </div>
         <div class="carousel-item" data-interval="2000">
            <img src="about-slide02.jpg" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
            <img src="about-slide03.jpg" class="d-block w-100" alt="...">
         </div>
      </div>
     <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
     </a>
    </div>
  </div>


    <div class="col">
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
               Who we are ?
            </button>
            </h5>
          </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida. Phasellus velit risus, euismod a lacus et, 
          mattis condimentum augue. Vivamus fermentum ex quis imperdiet sodales. Sed aliquam nibh tellus, a rutrum turpis pellentesque ac. Nulla nibh libero, tincidunt cursus gravida ut, 
          sodales ut magna. Sed sodales libero sapien, et rutrum mi placerat eget. Nulla vestibulum lacus vel eros eleifend molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Pellentesque fermentum massa vel enim feugiat gravida.
          </div>
        </div>
      </div>
      <div class="card">
          <div class="card-header" id="headingTwo">
             <h5 class="mb-0">
             <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               Our Services
             </button>
             </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida. Phasellus velit risus, euismod a lacus et, 
          mattis condimentum augue. Vivamus fermentum ex quis imperdiet sodales. Sed aliquam nibh tellus, a rutrum turpis pellentesque ac. Nulla nibh libero, tincidunt cursus gravida ut, 
          sodales ut magna. Sed sodales libero sapien, et rutrum mi placerat eget. Nulla vestibulum lacus vel eros eleifend molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Pellentesque fermentum massa vel enim feugiat gravida.
            </div>
          </div>
      </div>
      <div class="card">
         <div class="card-header" id="headingThree">
            <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
               Qualified Doctors
            </button>
            </h5>
         </div>
         <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida. Phasellus velit risus, euismod a lacus et, 
          mattis condimentum augue. Vivamus fermentum ex quis imperdiet sodales. Sed aliquam nibh tellus, a rutrum turpis pellentesque ac. Nulla nibh libero, tincidunt cursus gravida ut, 
          sodales ut magna. Sed sodales libero sapien, et rutrum mi placerat eget. Nulla vestibulum lacus vel eros eleifend molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Pellentesque fermentum massa vel enim feugiat gravida.
            </div>
         </div>
      </div>
    </div>
  </div>
  </div>



<div class="card-deck">
  <div class="card">
    <img src="about10.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Embrace your Health</h5>
      <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
       The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
      
    </div>
  </div>
  <div class="card">
    <img src="about11.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Primary Health Care</h5>
      <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
       The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
    </div>
  </div>
  <div class="card">
    <img src="about12.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Achieving Better Health Care</h5>
      <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
       The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
    </div>
  </div>
</div>




<div class="container">
  <div class="row">
    <div class="col">
      <h3>Professionals</h3>
      <h2>Diplomas and Certificates of our Doctors</h2>
      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
         The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, 
         as opposed to using ‘Content here, content here’, making it look like readable English.</p>
    </div>
    <div class="col">
      
    </div>
  </div>
</div>



<div class="card-deck">
  <div class="card">
    <img src="certificate01.jpg" class="card-img-top" alt="...">
  </div>
  <div class="card">
    <img src="certificate02.jpg" class="card-img-top" alt="...">
  </div>
  <div class="card">
    <img src="certificate03.jpg" class="card-img-top" alt="...">
  </div>
</div>






</body>

<?php
  include('includes/footer.php');
?>

