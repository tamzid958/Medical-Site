<div id="admin-new-service">
  
    <div id="left">
    
    <h3 class="total-admin-badge">Patients <span class="badge badge-light"> 10</span> Total  </h3>

    </div>

    <div id="right">
    
    <a href="#" class="btn btn-primary btn-lg active admin-add-new-service-btn" role="button" aria-pressed="true"  data-toggle="modal" data-target="#exampleModalLongpatient"> + Add New Patient </a>
    </div>
</div>

<table>
<tr>
    <th>Patient Name</th>
    <th>Email Address</th>
    <th>Phone Number</th>
    <th></th>
  </tr>
  <tr class="patient-list">
     
    <th>Patient one</th>
    <th>example@gmail.com</th>
    <th>+990323121</th>
    <th> <a href="#" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
    <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
</th> 
</tr>
</table>


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
 