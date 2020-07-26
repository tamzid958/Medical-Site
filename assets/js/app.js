$(document).ready(function () {

/*
    $('#content').load('conetent/index.php');
    
    
    $('ul#nav li a').click(function ()
    
    {
      var page = $(this).attr('href');
      $('#content').load('content/' + page + '.php');     
    
    }
    );*/
    
 

    $(".single-blog-direct").click( function() {
      window.location.href="/templates/blog_post_template.php";
     });
     $(".single-doctor-direct").click( function() {
      window.location.href="/templates/doctor_profile_template.php";
     });

     $(".login-btn").click( function() {

      var userType = document.getElementById("login").value;
     if (userType == "doctor")
     {
      window.location.href="/templates/doctor_panel_template.php";
     }
     else if(userType == "user")
     {
      window.location.href="/templates/user_panel_template.php";
     }
     else if(userType == "admin")
     {
      window.location.href="/templates/admin_panel_template.php";
     }
     else{
       alert("Enter a valid UserType");
     }
    
     });
  
  
     $(".doctor-mail").click( function() {
      window.location.href="mailto:example@email.com";
     });
  
     $(".doctor-tel").click( function() {
      window.location.href="tel:+129343478";
     });
     
     var modal = document.getElementById("myModal");
     var modal2 = document.getElementById("myModal2");
     var modal3 = document.getElementById("myModal3");
     // Get the image and insert it inside the modal - use its "alt" text as a caption
     var img = document.getElementById("myImg");
     var img2 = document.getElementById("myImg2");
     var img3 = document.getElementById("myImg3");
     
     var modalImg = document.getElementById("img01");
     var modalImg2 = document.getElementById("img02");
     var modalImg3 = document.getElementById("img03");
     
     var captionText = document.getElementById("caption");
     var captionText2 = document.getElementById("caption2");
     var captionText3 = document.getElementById("caption");
     

     $(img).click( function(){
       modal.style.display = "block";
       modalImg.src = this.src;
       modalImg2.src = this.src;
       captionText.innerHTML = this.alt;
     });
     
     
     $(img2).click( function(){
       modal.style.display = "block";
       modalImg.src = this.src;
       modalImg2.src = this.src;
       captionText.innerHTML = this.alt;
     });
     
     $(img3).click( function(){
       modal.style.display = "block";
       modalImg.src = this.src;
       modalImg2.src = this.src;
       captionText.innerHTML = this.alt;
     });
     
     // Get the <span> element that closes the modal
     var span = document.getElementsByClassName("close")[0];
     var span2 = document.getElementsByClassName("close2")[0];
     var span3 = document.getElementsByClassName("close3")[0];
     // When the user clicks on <span> (x), close the modal

     $(span).click( function(){
  
      modal.style.display = "none";
    });
    $(span2).click( function(){
  
      modal.style.display = "none";
    });
    $(span3).click( function(){
  
      modal.style.display = "none";
    });
  
   
    $(".btn-doctor-new").click(function(){

      $("#doctor-panel-switcher").load("/page_sections/doctor_panel_sections/new_appointment.php");
      
      });
      $(".btn-doctor-completed").click(function(){
      
      $("#doctor-panel-switcher").load("/page_sections/doctor_panel_sections/completed_appointment.php");
      
      });
      
      $(".btn-doctor-cancelled").click(function(){
      
      $("#doctor-panel-switcher").load("/page_sections/doctor_panel_sections/cancelled_appointment.php");
      
      
      });
      
      $(".btn-add-new-post").click(function(){
      
      $("#doctor-panel-switcher").load("/page_sections/doctor_panel_sections/add_new_post.php");
      
      });
      
      
      $(".btn-user-new").click(function(){

        $("#user-panel-switcher").load("/page_sections/user_panel_sections/new_appointment.php");
        
        });
        $(".btn-user-completed").click(function(){
        
        $("#user-panel-switcher").load("/page_sections/user_panel_sections/completed_appointment.php");
        
        });
        
        $(".btn-user-cancelled").click(function(){
        
        $("#user-panel-switcher").load("/page_sections/user_panel_sections/cancelled_appointment.php");
        
        
        });


    })
       