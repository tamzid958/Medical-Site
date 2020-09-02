$(document).ready(function () {
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

  $(img).click(function () {
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg2.src = this.src;
    captionText.innerHTML = this.alt;
  });

  $(img2).click(function () {
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg2.src = this.src;
    captionText.innerHTML = this.alt;
  });

  $(img3).click(function () {
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

  $(span).click(function () {
    modal.style.display = "none";
  });
  $(span2).click(function () {
    modal.style.display = "none";
  });
  $(span3).click(function () {
    modal.style.display = "none";
  });

  $(".btn-doctor-new").click(function () {
    $("#doctor-panel-switcher").load(
      "/page_sections/doctor_panel_sections/new_appointment.php"
    );
  });
  $(".btn-doctor-completed").click(function () {
    $("#doctor-panel-switcher").load(
      "/page_sections/doctor_panel_sections/completed_appointment.php"
    );
  });

  $(".btn-doctor-cancelled").click(function () {
    $("#doctor-panel-switcher").load(
      "/page_sections/doctor_panel_sections/cancelled_appointment.php"
    );
  });

  $(".btn-change-pass-doc").click(function () {
    $("#doctor-panel-switcher").load(
      "/page_sections/doctor_panel_sections/settings.php"
    );
  });

  $(".btn-user-new").click(function () {
    $("#user-panel-switcher").load(
      "/page_sections/user_panel_sections/new_appointment.php"
    );
  });
  $(".btn-user-completed").click(function () {
    $("#user-panel-switcher").load(
      "/page_sections/user_panel_sections/completed_appointment.php"
    );
  });

  $(".btn-user-cancelled").click(function () {
    $("#user-panel-switcher").load(
      "/page_sections/user_panel_sections/cancelled_appointment.php"
    );
  });

  $(".btn-settings-user").click(function () {
    $("#user-panel-switcher").load(
      "/page_sections/user_panel_sections/settings.php"
    );
  });

  $(".btn-logout").click(function () {
    window.open("/login.php", "_self");
  });

  $("ul li a").click(function () {
    $("li a").removeClass("active");
    $(this).addClass("active");
  });
});
