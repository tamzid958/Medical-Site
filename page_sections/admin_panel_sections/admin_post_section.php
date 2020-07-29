<div id="admin-new-service">
  
  <div id="left">
  
  <h3 class="total-admin-badge">Posts <span class="badge badge-light"> 10</span> Total  </h3>

  </div>

  <div id="right">
  
  <a href="#" class="btn btn-primary btn-lg active admin-add-new-post-btn" role="button" aria-pressed="true"  data-toggle="modal" data-target="#exampleModalLongpost"> + Add New Post </a>
  </div>




  <div class="modal fade" id="exampleModalLongpost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">


<img id="blah" src="https://dummyimage.com/450X300/cfcfcf.png" alt="" />

<br><br>



  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile02" placeholder="Featured Image" onchange="readURL(this);" >  
    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
  </div>

  <br><br>


<input class="form-control form-control-lg" type="text" placeholder="Post Title">

<br><br>

<textarea id=""  class="form-control form-control-lg" name="" rows="20" cols="20" placeholder="Post Description"></textarea>






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

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Publish</button>
      </div>
    </div>
  </div>
</div>

</div>


<div id="old-post-list">
<div id="left">
<div class="card" style="width: 18rem;">
  <img src="https://dummyimage.com/300x300/cfcfcf.png" class="card-img-top" alt="">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

    <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalLongpost"><i class="fa fa-pencil" aria-hidden="true"></i></a>
    <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
  </div>
 </div>
</div>
</div>


