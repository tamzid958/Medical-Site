<div id="admin-new-service">
  
    <div id="left">
    
    <h3 class="total-admin-badge">Services <span class="badge badge-light"> 10</span> Total  </h3>

    </div>

    <div id="right">
    
    <a href="#" class="btn btn-primary btn-lg active admin-add-new-service-btn" role="button" aria-pressed="true"  data-toggle="modal" data-target="#exampleModalLong"> + Add New Service </a>
    </div>




<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <input class="form-control" type="text" placeholder="Service Name">
       <br>
      <select class="form-control">
      <option value="" disabled selected>Select Category</option>
      <option value="one">Category one</option>
      <option value="two">Category Two</option>
      </select>

      <br>
      <select class="form-control">
      <option value="" disabled selected>Duration</option>
      <option value="one">1 Hour</option>
      <option value="two">2 Hour</option>
      </select>
      <br>

      <input class="form-control" type="number" placeholder="Cost">


      <br>

      <select class="form-control">
      <option value="" disabled selected>Select Doctor</option>
      <option value="one">Doctor One</option>
      <option value="two">Doctor Two</option>
      </select>

      <br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Create</button>
      </div>
    </div>
  </div>
</div>







  </div>

  <div class="container admin-service-category" >
      <hr>
  <div class="row">
    <div class="col-sm-6">

    <h4>Categories</h4>
      
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Category one</h5>
    <a href="#" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
    <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
  </div>


  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Create New Category
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <input class="form-control" type="text" placeholder="Category Name">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Create</button>
      </div>
    </div>
  </div>
</div>

</div>

    </div>
    <div class="col-sm-6">
   
    <h4>All Services</h4>


    <div class="card" style="max-width: 50rem;">
  <div class="card-body">
    <h5 class="card-title">Service One</h5>
     <h6> Time: <span> 1 h 30 min</span></h6>
     <h6>Cost: <span> $60</span></h6>
     <h6>Category: <span> Category one</span></h6>
    <a href="#" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
    <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
  </div>



</div>
   
  </div>
</div>

    </div>
  </div>
</div


