<?php include 'header.php';?>


<div class="container-fluid">

<div class="row mt-5 mb-5"> 
<!--  start row -->

<div class="col-sm-4"></div>


<div class="col-sm-7"> <!-- start content of maps of Egypt -->

<div class="row">

<div class="col-sm-12">

<img id="myImg" src="images/1.jpg" alt="www.egypttraveltips.com"  style="width:100%;max-width:400px">

<!-- The Modal -->
<div id="myModal" class="modal">
<!-- <span class="close">&times;</span> -->

  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>



</div>

</div>


<div class="row mb-2 mt-2">

<div class="col-sm-12">

<img id="myImg2" src="images/2.gif" alt="www.egypttraveltips.com"  style="width:100%;max-width:450px">

<!-- The Modal -->
<div id="myModal2" class="modal">
<span class="close" onclick="document.getElementById('myModal2').style.display='none'">&times;</span>
  <img class="modal-content" id="img012">
  <div id="caption2"></div>
</div>



</div>

</div>



<div class="row mb-2 mt-2">

<div class="col-sm-12">

<img id="myImg3" src="images/3.gif" alt="www.egypttraveltips.com"  style="width:100%;max-width:450px">

<!-- The Modal -->
<div id="myModal3" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img013">
  <div id="caption3"></div>
</div>



</div>

</div>






<div class="row mb-2 mt-2">

<div class="col-sm-12">

<img id="myImg4" src="images/4.png" alt="www.egypttraveltips.com"  style="width:100%;max-width:450px">

<!-- The Modal -->
<div id="myModal4" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img014">
  <div id="caption4"></div>
</div>



</div>

</div>







<div class="row mb-2 mt-2">

<div class="col-sm-12">

<img id="myImg5" src="images/5.jpg" alt="www.egypttraveltips.com"  style="width:100%;max-width:450px">

<!-- The Modal -->
<div id="myModal5" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img015">
  <div id="caption5"></div>
</div>



</div>

</div>







<div class="row mb-2 mt-2">

<div class="col-sm-12">

<img id="myImg6" src="images/6.png" alt="www.egypttraveltips.com"  style="width:100%;max-width:450px">

<!-- The Modal -->
<div id="myModa6l" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img016">
  <div id="caption6"></div>
</div>



</div>

</div>







<div class="row mb-2 mt-2">

<div class="col-sm-12">

<img id="myImg7" src="images/7.gif" alt="www.egypttraveltips.com"  style="width:100%;max-width:450px">

<!-- The Modal -->
<div id="myModal7" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img017">
  <div id="caption7"></div>
</div>



</div>

</div>






<div class="row mb-2 mt-2">

<div class="col-sm-12">

<img id="myImg8" src="images/10.jpg" alt="www.egypttraveltips.com"  style="width:100%;max-width:450px">

<!-- The Modal -->
<div id="myModal8" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img018">
  <div id="caption8"></div>
</div>



</div>

</div>






<div class="row mb-2 mt-2">

<div class="col-sm-12">

<img id="myImg9" src="images/11.jpg" alt="www.egypttraveltips.com"  style="width:100%;max-width:450px">

<!-- The Modal -->
<div id="myModal9" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img019">
  <div id="caption9"></div>
</div>



</div>

</div>













</div><!-- End content of maps of Egypt-->

<div class="col-sm-1"></div>

</div><!--  End row -->


</div>

















<script>
// Get the modal
var modal = document.getElementById('myModal');
// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}



// Get the modal
var modal = document.getElementById('myModal2');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg2');
var modalImg = document.getElementById("img012");
var captionText = document.getElementById("caption2");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}






// Get the modal
var modal = document.getElementById('myModal3');
// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg3');
var modalImg = document.getElementById("img013");
var captionText = document.getElementById("caption3");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}





// Get the modal
var modal = document.getElementById('myModal4');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg4');
var modalImg = document.getElementById("img014");
var captionText = document.getElementById("caption4");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}






// Get the modal
var modal = document.getElementById('myModal5');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg5');
var modalImg = document.getElementById("img015");
var captionText = document.getElementById("caption5");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}





// Get the modal
var modal = document.getElementById('myModal6');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg6');
var modalImg = document.getElementById("img016");
var captionText = document.getElementById("caption6");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}




// Get the modal
var modal = document.getElementById('myModal7');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg7');
var modalImg = document.getElementById("img017");
var captionText = document.getElementById("caption7");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}





// Get the modal
var modal = document.getElementById('myModal8');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg8');
var modalImg = document.getElementById("img018");
var captionText = document.getElementById("caption8");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}





// Get the modal
var modal = document.getElementById('myModal9');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg9');
var modalImg = document.getElementById("img019");
var captionText = document.getElementById("caption9");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}

</script>







<?php include 'footer.php';?>
