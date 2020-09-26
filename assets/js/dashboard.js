$(document).ready(function () {
 $("input").on("keydown",function(){
   var inputtype = $(this).attr("type");
 var presentchecking =$(this).val();
 if(inputtype === "text"){
   checktext(presentchecking);
 }
 else if(inputtype ==="email"){
   checkmail(presentchecking);
 }else if(inputtype ==="tel"){
   checktel(presentchecking);
 }
 else if(inputtype ==="password"){
   checkpass(presentchecking);
 }
 else if(inputtype === "date"){
  
 }else if(inputtype ==="time"){
  
 }

 function checktext(presentchecking){
  if (presentchecking==null || presentchecking==""){  
  //console.log("Name can't be blank");  
  return false;  
}
 }
 function checkmail(presentchecking){
  var x=presentchecking;
  var atposition=x.indexOf("@");  
  var dotposition=x.lastIndexOf(".");
  if (presentchecking==null || presentchecking==""||atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  //console.log("Please enter a valid email address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  } 

}
function checktel(presentchecking){
  if (presentchecking==null || presentchecking==""){  
  //console.log("Phone can't be blank");  
  return false;  
}
}

function checkpass(presentchecking){
  if(presentchecking.length<6){  
  //console.log("Password must be at least 6 characters long.");  
  return false;  
  } 
}


}); 

  $(".admin-appointment-section-link").click(function () {
    $("#admin-panel-switcher").load(
      "/page_sections/admin_panel_sections/admin_appointment_section.php"
    );
  });
  $(".admin-services-section-link").click(function () {
    $("#admin-panel-switcher").load(
      "/page_sections/admin_panel_sections/admin_services_section.php"
    );
  });
  $(".admin-doctors-section-link").click(function () {
    $("#admin-panel-switcher").load(
      "/page_sections/admin_panel_sections/admin_doctor_section.php"
    );
  });
  $(".admin-patient-section-link").click(function () {
    $("#admin-panel-switcher").load(
      "/page_sections/admin_panel_sections/admin_patients_section.php"
    );
  });
  $(".admin-post-section-link").click(function () {
    $("#admin-panel-switcher").load(
      "/page_sections/admin_panel_sections/admin_post_section.php"
    );
  });
  $(".admin-settings-section-link").click(function () {
    $("#admin-panel-switcher").load(
      "/page_sections/admin_panel_sections/admin_settings_seciton.php"
    );
  });
  $("ul li a").click(function () {
    $("li a").removeClass("active");
    $(this).addClass("active");
  });
  var ctx = document.getElementById("myChart").getContext("2d");
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: "line",
    // The data for our dataset
    data: {
      labels: [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
      ],
      datasets: [
        {
          label: "Completed",
          backgroundColor: "#00A484",
          borderColor: "#00A484",
          pointStyle: "rectRot",
          pointRadius: 5,
          fill: false,
          data: [0, 10, 5, 2, 20, 30, 45, 91, 23, 23, 41, 45, 12],
        },
        {
          label: "Cancelled",
          backgroundColor: "#E83309",
          borderColor: "#E83309",
          pointStyle: "rectRot",
          pointRadius: 5,
          fill: false,
          data: [1, 23, 5, 7, 2, 5, 9, 34, 0, 9, 10, 17],
        },
      ],
    },
    // Configuration options go here
    options: {
      responsive: true,
      title: {
        display: false,
        text: "Appoinment",
      },
      tooltips: {
        mode: "index",
        intersect: false,
      },
      hover: {
        mode: "nearest",
        intersect: true,
      },
      scales: {
        xAxes: [
          {
            display: true,
            scaleLabel: {
              display: true,
              labelString: "Month",
            },
          },
        ],
        yAxes: [
          {
            display: true,
            scaleLabel: {
              display: true,
              labelString: "Value",
            },
          },
        ],
      },
    },
  });
});
