<section>
<div class="jumbotron jumbotron-fluid appointment-hero">
  <div class="container">
   

  <div class="container">
  <div class="row">
    <div class="col-sm-6 appointment-form-left">
    



    </div>
    <div class="col-sm-6 appointment-form-right">
    <form>
  <div class="form-row appointment-form">
     <h2 class="appointment-head">Book an Appointment</h2>
    <div class="col-md-6">
    <select class="custom-select mr-sm-2 form-trans" id="inlineFormCustomSelect">
    <option value="" disabled selected>Select Category</option>
                                                <option>Category one</option>
                                                <option>Category two</option>
                                                </select>
      </select>
    </div>
    <div class="col-md-6">
    <select class="custom-select mr-sm-2 form-trans" id="inlineFormCustomSelect">
    <option value="" disabled selected>Select Service</option>
                                                <option>Service one</option>
                                                <option>Service two</option>
                                                </select>
      </select>
  </div>
  <div class="col-md-6">
  <select class="custom-select mr-sm-2 form-trans" id="inlineFormCustomSelect">
                <option value="" disabled selected>Select Doctor</option>
                                                <option>Doctor one</option>
                                                <option>Doctor two</option>
                                                </select>

  </div>

    <div class="col-md-6">
      <input type="text" class="form-control form-trans" placeholder="Full name">
    </div>
    <div class="col-md-6">
      <input type="tel" class="form-control form-trans" placeholder="Phone number">
    </div>

    <div class="col-md-6">
      <input type="email" class="form-control form-trans" placeholder="Email Address">
    </div>
    <div class="col-md-6">
      <input type="date" class="form-control form-trans"  placeholder="Date">
    </div>
    <div class="col-md-6">
    <input type="time"class="form-control form-trans" name="time" placeholder="Time"/>

    </div>
    <div class="col-md-6">
    <button type="submit" class="btn btn-outline-light" id="payBtn">Book an Appointment</button>
    </div>
   </form>
    </div>  
    </div>
  </div>
</div>

  </div>
</div>


<!-- Modal -->
<div class="modal fade pay-modal" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Proccess Payment <span class=lead>Powered by T&C <span></h4>
            </div>
            <div class="modal-body">
                
              <input type="number" class="form-control pay-form" placeholder="Card Number"> <br>
              <input type="password" class="form-control pay-form" placeholder="Card Pin">
            
    
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" id="continuebtn">Pay</button>
            </div>
        </div>
    </div>
</div>


<style>


  .pay-modal
  {
    z-index:99999999999999999999;
  }
  .pay-form::placeholder{
    color:black !important;
  }
</style>



<script>

$('document').ready(function(){
    
    $('#payBtn').on('click',function(e){
      e.preventDefault();
      $('#myModal').modal('toggle');
  
    });
  
    $('#continuebtn').on('click',function(){
  
      $('form').submit();
    });
  });
</script>