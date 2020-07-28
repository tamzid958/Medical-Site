<div class="card">
        <div class="card-body">
            <div class="">
                <div class="row">
                    <div class="col-md-10">
                    <h3 class="total-admin-badge">Patients <span class="badge badge-light"> 10</span> Total  </h3>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary my-1" data-toggle="modal" data-target="#exampleModalLongpatient">Add New Patient</button>
                    </div>
                </div>
            <div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>#ID</td>
                                        <td>NAME</td>
                                        <td>PHONE</td>
                                        <td>EMAIL</td>
                                        <td></td>
                                    </tr>
                                </thead>
                      
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Doe</td>
                                        <td>01854545454</td>
                                        <td>sidoe@email.com</td>
                                        <td>
                                            <button class="btn btn-outline-primary editButton" data-toggle="modal" data-target="#exampleModalLongpatient">Edit</button>
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
<div class="modal fade" id="exampleModalLongpatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Patient</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">

      <input class="form-control form-control-lg" type="text" placeholder="Patient Name">
      <br><br>
      <input class="form-control form-control-lg" type="email" placeholder="Email Address">
      <br><br>
      <input class="form-control form-control-lg" type="tel" placeholder="Phone Number">
      <br><br>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Create</button>
      </div>
      </div>
 