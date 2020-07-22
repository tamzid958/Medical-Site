<section>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
  <h6 class="prof">Professionals
   <h4>Welcome to Medical Clinic</h4></h6>
    <p class="lead about-section-four">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
      The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English.</p>
  </div> 
</div>

<div class="container about-section-certificate">
  <div class="row">
    <div class="col-sm">
     
<!-- Trigger the Modal -->
<img id="myImg" src="./assets/images/certificate01.jpg" alt="" style="width:100%;max-width:600px">

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

    </div>
    <div class="col-sm">
     
<!-- Trigger the Modal -->
<img id="myImg2" src="./assets/images/certificate02.jpg" alt="" style="width:100%;max-width:600px">

<!-- The Modal -->
<div id="myModal2" class="modal2">

  <!-- The Close Button -->
  <span class="close2">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content2" id="img02">

  <!-- Modal Caption (Image Text) -->
  <div id="caption2"></div>
</div>




    </div>
    <div class="col-sm">
    
<!-- Trigger the Modal -->
<img id="myImg3" src="./assets/images/certificate03.jpg" alt="" style="width:100%;max-width:600px">

<!-- The Modal -->
<div id="myModal3" class="modal3">

  <!-- The Close Button -->
  <span class="close3">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content3" id="img03">

  <!-- Modal Caption (Image Text) -->
  <div id="caption3"></div>
</div>

    </div>
  </div>
</div>


</section>


<script>
var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");
// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var img2 = document.getElementById("myImg2");
var img3 = document.getElementById("myImg3");

var modalImg = document.getElementById("img01");
var modalImg2 = document.getElementById("img02");
var modalImg3 = document.getElementById("img03");

var captionText = document.getElementById("caption");
var captionText2 = document.getElementById("caption2");
var captionText3 = document.getElementById("caption");

img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  modalImg2.src = this.src;
  captionText.innerHTML = this.alt;
}


img2.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  modalImg2.src = this.src;
  captionText.innerHTML = this.alt;
}

img3.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  modalImg2.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close2")[0];
var span3 = document.getElementsByClassName("close3")[0];
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
span2.onclick = function() {
  modal.style.display = "none";
}
span3.onclick = function() {
  modal.style.display = "none";
}

</script>
