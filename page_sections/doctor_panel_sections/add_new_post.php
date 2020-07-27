<div class="container">


<img id="blah" src="https://dummyimage.com/900X400/cfcfcf.png" alt="" />

<br><br><br>
<label for=""><h3>Featured Image</h3></label>


  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile02" onchange="readURL(this);" >  
    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
  </div>

  <br><br><br>
<label for=""><h3>Add a new Post Title</h3></label>

<input class="form-control form-control-lg" type="text" placeholder="Post Title">

<hr><hr>
<label for=""><h3>Post Description</h3></label>
<textarea id=""  class="form-control form-control-lg" name="" rows="20" cols="50"></textarea>

<br><br><br>

<button type="button" class="btn btn-success">Publish</button>


<br><br><br>

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