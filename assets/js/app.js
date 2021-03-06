$(document).ready(function () {
  $("input").on("keydown", function () {
    var inputtype = $(this).attr("type");
    var presentchecking = $(this).val();
    if (inputtype === "text") {
      checktext(presentchecking);
    } else if (inputtype === "email") {
      checkmail(presentchecking);
    } else if (inputtype === "tel") {
      checktel(presentchecking);
    } else if (inputtype === "password") {
      checkpass(presentchecking);
    } else if (inputtype === "date") {
    } else if (inputtype === "time") {
    }

    function checktext(presentchecking) {
      if (presentchecking == null || presentchecking == "") {
        console.log("Name can't be blank");
        return false;
      }
    }
    function checkmail(presentchecking) {
      var x = presentchecking;
      var atposition = x.indexOf("@");
      var dotposition = x.lastIndexOf(".");
      if (
        presentchecking == null ||
        presentchecking == "" ||
        atposition < 1 ||
        dotposition < atposition + 2 ||
        dotposition + 2 >= x.length
      ) {
        console.log(
          "Please enter a valid email address \n atpostion:" +
            atposition +
            "\n dotposition:" +
            dotposition
        );
        return false;
      }
    }
    function checktel(presentchecking) {
      if (presentchecking == null || presentchecking == "") {
        console.log("Phone can't be blank");
        return false;
      }
    }

    function checkpass(presentchecking) {
      if (presentchecking.length < 6) {
        console.log("Password must be at least 6 characters long.");
        return false;
      }
    }
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
  $(".btn-change-pass-doc").click(function () {
    $("#doctor-panel-switcher").load(
      "/page_sections/doctor_panel_sections/settings.php"
    );
  });
  $(".btn-settings-user").click(function () {
    $("#user-panel-switcher").load(
      "/page_sections/user_panel_sections/settings.php"
    );
  });
  $(".btn-logout").click(function () {
    window.open("/controller/sessionDie.php", "_self");
  });
  $("ul li a").click(function () {
    $("li a").removeClass("active");
    $(this).addClass("active");
  });
  $(".btn-doctor-new").click(function () {
    window.location.reload();
  });
  $(".btn-doctor-completed").click(function () {
    location.reload();
    return false;
  });
  $(".btn-doctor-completed").click(function () {
    location.reload();
    return false;
  });
  $(".btn-doctor-cancelled").click(function () {
    location.reload();
    return false;
  });
  $(".btn-user-new").click(function () {
    location.reload();
    return false;
  });
  $(".btn-user-completed").click(function () {
    location.reload();
    return false;
  });
  $(".btn-user-cancelled").click(function () {
    location.reload();
    return false;
  });
});
