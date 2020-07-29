<div class="card">
        <div class="card-body">
            <div class="">
                <div class="row">
                    <div class="col-md-10">
                        <h4 class="card-title">OSCA | Appointment </h4>
                        
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary my-1" data-toggle="modal" data-target="#appointModal">New Appointment </button>
                    </div>
                </div>
                     
            </div>
            <div class="">
                <div class="row">
                    <div class="col-md-12">
                    <select class="form-control" id="exampleFormControlSelect1">
                                         <option value="" disabled selected>Select Patient</option>
                                                <option>Patient one</option>
                                                <option>Patient two</option>
                                                </select>

                                                <br>
                    </div>
                            
                </div>

            <div class="row">
                               
                <div class="col-md-4">
                <input type="date" class="form-control form-trans"  placeholder="Date">
                </div>
                <div class="col-md-4">
                <select class="form-control" id="exampleFormControlSelect1">
                <option value="" disabled selected>Select Doctor</option>
                                                <option>Doctor one</option>
                                                <option>Doctor two</option>
                                                </select>
                </div>
                <div class="col-md-4">
                <select class="form-control" id="exampleFormControlSelect1">
                                         <option value="" disabled selected>Select Status</option>
                                                <option>Approved</option>
                                                <option>Pending</option>
                                                <option>Cancelled</option>
                                                <option>Rejected</option>
                                                <option>Completed</option>
                                                </select>
                </div>
            </div>

<br>


            <div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>#ID</td>
                                        <td>PATIENT NAME</td>
                                        <td>ASSIGNED TO</td>
                                        <td>SERVICE</td>
                                        <td>DATE</td>
                                        <td>TIME</td>
                                        <td>STATUS</td>
                                        <td></td>
                                    </tr>
                                </thead>
                      
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Doe</td>
                                        <td>Doctor one</td>
                                        <td>Service one</td>
                                        <td>2012/08/10</td>
                                        <td>10:30am</td>
                                        <td>
                                         <select class="form-control" id="exampleFormControlSelect1">
                                         <option value="" disabled selected>Select Status</option>
                                                <option>Approved</option>
                                                <option>Pending</option>
                                                <option>Cancelled</option>
                                                <option>Rejected</option>
                                                <option>Completed</option>
                                                </select>
                                        </td>
                                        <td>
                                        <button class="btn btn-outline-primary editButton" data-toggle="modal" data-target="#appointModal">Edit</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
<div class="modal fade" id="appointModal" tabindex="-1" role="dialog" aria-labelledby="appointModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="appointModalLabel">New Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
                <select class="form-control" id="exampleFormControlSelect1">
                                         <option value="" disabled selected>Select Patient</option>
                                                <option>Patient one</option>
                                                <option>Patient two</option>
                                                </select>
                <br>
                <select class="form-control" id="exampleFormControlSelect1">
                <option value="" disabled selected>Select Category</option>
                                                <option>Category one</option>
                                                <option>Category two</option>
                                                </select>
                                                <br>
                <select class="form-control" id="exampleFormControlSelect1">
                <option value="" disabled selected>Select Service</option>
                                                <option>Service one</option>
                                                <option>Service two</option>
                                                </select>
                                                <br>
                <select class="form-control" id="exampleFormControlSelect1">
                <option value="" disabled selected>Select Doctor</option>
                                                <option>Doctor one</option>
                                                <option>Doctor two</option>
                                                </select>

                                                <br>
                <input type="date" class="form-control form-trans"  placeholder="Date">
                <br>
                <input type="time"class="form-control form-trans" name="time" placeholder="Time"/>
                <br>
                <select class="form-control" id="exampleFormControlSelect1">
                                         <option value="" disabled selected>Select Status</option>
                                                <option>Approved</option>
                                                <option>Pending</option>
                                                <option>Cancelled</option>
                                                <option>Rejected</option>
                                                <option>Completed</option>
                                                </select>
                   
                                                <br>
                <input type="text" class="form-control form-trans" placeholder="Transaciton ID">
                <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Create</button>
      </div>
    </div>
  </div>
</div>

