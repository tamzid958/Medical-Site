
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>OCAS HOSPITAL CENTER</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js" integrity="sha512-rmZcZsyhe0/MAjquhTgiUcb4d9knaFc7b5xAfju483gbEXTkeJRUMIPk6s3ySZMYUHEcjKbjLjyddGWMrNEvZg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">    
    <meta name="theme-color" content="#00c4cc">
    <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="/assets/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand desktop_logo" href="/index.php"><img src="/assets/images/white_logo.png"></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed admin-ham-btn" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="/login.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column admin-panel-ul">
          <li class="nav-item">
            <a class="nav-link active side-link" href="admin_panel_template.php">
              <span data-feather="dashboard"></span>
              <i class="fa fa-bar-chart" aria-hidden="true"></i>   Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link admin-appointment-section-link side-link" href="#">
              <span data-feather="appointment"></span>
              <i class="fa fa-file" aria-hidden="true"></i>   Appointment
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link admin-services-section-link side-link">
              <span data-feather="services"></span>
              <i class="fa fa-medkit" aria-hidden="true"></i> Services
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link admin-doctors-section-link side-link">
              <span data-feather="doctors"></span>
              <i class="fa fa-user-md" aria-hidden="true"></i>  Doctors
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link admin-patient-section-link side-link">
              <span data-feather="Patients"></span>
              <i class="fa fa-user" aria-hidden="true"></i> Patients
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link admin-post-section-link side-link" >
              <span data-feather="Patients"></span>
              <i class="fa fa-newspaper-o" aria-hidden="true"></i> Posts
            </a>
          </li>
         
        </ul>

       
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      

      <div id="admin-panel-switcher">
      <div>
        <h2 class="display">Appointment</h1>
<canvas id="myChart" max-width="100%" min-height="650px"></canvas>
</div>     
    </div>
    
    </main>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js" integrity="sha512-G8JE1Xbr0egZE5gNGyUm1fF764iHVfRXshIoUWCTPAbKkkItp/6qal5YAHXrxEu4HNfPTQs6HOu3D5vCGS1j3w==" crossorigin="anonymous"></script>

<script src="/assets/js/dashboard.js"></script></body>



</html>
