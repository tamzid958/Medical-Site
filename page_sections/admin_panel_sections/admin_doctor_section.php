<div class="card">
        <div class="card-body">
            <div class="">
                <div class="row">
                    <div class="col-md-10">
                    <h3 class="total-admin-badge">Doctors <span class="badge badge-light"> 10</span> Total  </h3>
                        
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary my-1" data-toggle="modal" data-target="#doctorModal">Create New Doctor</button>
                    </div>
                </div>
                     
            </div>
            

            <div class="row">
                               
                <div class="col-md-4">
                <input class="form-control" type="text" placeholder="Search">
                </div>
                <div class="col-md-4">
                <select class="form-control" id="exampleFormControlSelect1">
                <option value="" disabled selected>Select Service</option>
                                                <option>Service one</option>
                                                <option>Service two</option>
                                                </select>
                </div>
                <div class="col-md-4">
                <select class="form-control" id="exampleFormControlSelect1">
                                                <option selected>Ascending</option>
                                                <option>Decending</option>
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
                                        <td>DOCTOR NAME</td>
                                        <td>SERVICE</td>
                                        <td>EMAIL</td>
                                        <td>PHONE NUMBER</td>

                                        <td></td>
                                    </tr>
                                </thead>
                      
                                <tbody>
                                    <tr>
                                        <td class="doctor-details">01</td>
                                        <td> <img src="https://dummyimage.com/64x64/cfcfcf" class="doctor-avatar" alt=""> Doe</td>
                                        <td class="doctor-details">Service one</td>
                                        <td class="doctor-details">doctor@gmail.com</td>
                                        <td class="doctor-details">+990819345</td>
                                        <td>
                                        <button class="btn btn-outline-primary editButton doctor-details-btn"  data-toggle="modal" data-target="#doctorModal">Edit</button>
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
<div class="modal fade" id="doctorModal" tabindex="-1" role="dialog" aria-labelledby="doctorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="appointModalLabel">Create New Doctor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-row">
      <div class="col-md-2">
       <img id="blah" class="doctor-avatar" src="https://dummyimage.com/450X300/cfcfcf.png" alt="" />
</div>
<div class="col-md-10 doctor-name-input">
<div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile02" placeholder="Featured Image" onchange="readURL(this);" >  
    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
        </div>  
       
       </div>
</div>
<br><br>
<input class="form-control" type="text" placeholder="Doctor Name">

        <br>

        <input class="form-control" type="email" placeholder="Email Address">
      <br>
      <input class="form-control" type="tel" placeholder="Phone Number">
      <br>
      <select class="form-control" id="inlineFormCustomSelect">
      <option value="" disabled selected>Select Category</option>
                                                <option>Category one</option>
                                                <option>Category two</option>
                                                </select>
      </select>
      <br><br>
      <select multiple class="form-control" id="exampleFormControlSelect1" >
                <option value="" disabled selected>Select Service--Use (CTRL or command) + Left click</option>
                                                <option>Service one</option>
                                                <option>Service two</option>
                                                </select>

    <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" disabled>Delete</button>
        <button type="button" class="btn btn-primary">Create</button>
      </div>
    </div>
  </div>
</div>

<script>


function readURL(input) {
              if (input.files && input.files[0]) {
                  var reader = new FileReader();
  
                  reader.onload = function (e) {
                      $('#blah')
                          .attr('src', e.target.result);
                  };
  
                  reader.readAsDataURL(input.files[0]);
              }
          }
  
</script>
