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
           
          
});