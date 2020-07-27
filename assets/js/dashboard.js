$(document).ready(function () {
 

    $(".admin-appointment-section-link").click(function(){
        
        $("#admin-panel-switcher").load("/page_sections/admin_panel_sections/admin_appointment_section.php");
        
        
        });

        $(".admin-services-section-link").click(function(){
        
            $("#admin-panel-switcher").load("/page_sections/admin_panel_sections/admin_services_section.php");
            
            
            });


            $(".admin-doctors-section-link").click(function(){
        
                $("#admin-panel-switcher").load("/page_sections/admin_panel_sections/admin_doctor_section.php");
                
                
                });
                $(".admin-patient-section-link").click(function(){
        
                    $("#admin-panel-switcher").load("/page_sections/admin_panel_sections/admin_patients_section.php");
                    
                    
                    });
        
            
                    $(".admin-post-section-link").click(function(){
        
                        $("#admin-panel-switcher").load("/page_sections/admin_panel_sections/admin_post_section.php");
                        
                        
                        });
           
                        $('ul li a').click(function(){
                            $('li a').removeClass("active");
                            $(this).addClass("active");
                        });  

                        var ctx = document.getElementById('myChart').getContext('2d');
                        var chart = new Chart(ctx, {
                            // The type of chart we want to create
                            type: 'line',
                        
                            // The data for our dataset
                            data: {
                                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August','September','October','November','December'],
                                datasets: [{
                                    label: 'Appointment',
                                    backgroundColor: '#55b9f3',
                                    borderColor: '#007bff',
                                    fill: false,
                                    data: [0, 10, 5, 2, 20, 30, 45,91,23,23,41,45,12]
                                }]
                                       
                            },
                            
                            // Configuration options go here
                            options: {
				responsive: true,
				title: {
					display: false,
					text: 'Appoinment Total'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Month'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Value'
						}
					}]
				}
			}
          });               
});