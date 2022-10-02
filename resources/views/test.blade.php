<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; Stay in place
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 40%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
#modalheader{
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
    color:#54BAB9;
    font-weight: 500;
    font-size: 18px;
    text-align: center;

}
#subheader{
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
    color:#444444;
    font-weight: 400;
    font-size: 12px;
    text-align: center;
}
</style>
</head>
<body>

<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

   
  <!-- Modal content -->
  <div class="modal-content">
    
    <div class="modal-header">
        <span class="close">&times;</span>
        
    <p id="modalheader">Add new patient</p>
    <p id="subheader">Enter new patient information below</p>

    </div>
    <div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <form>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">Pet Name</label>
                        <input type="text" class="form-control" id="inputFirstname" placeholder="First name">
                    </div>
                    <div class="col-lg-6">
                        <label for="inputLastname">Status</label>
                        
                        <select name="" id="" class="form-control">
                          <option value="" aria-placeholder="Please choose status"></option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="pawrent">Pawrent</label>
                        <input type="text" class="form-control" name="pawrent"  placeholder="">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine2">Address (Line 2)</label>
                        <input type="text" class="form-control" id="inputAddressLine2" placeholder="Line 2">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="City">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">State</label>
                        <input type="text" class="form-control" id="inputState" placeholder="State">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputPostalCode">Postal Code</label>
                        <input type="text" class="form-control" id="inputPostalCode" placeholder="Postal Code">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Contact Number</label>
                        <input type="number" class="form-control" id="inputContactNumber" placeholder="Contact Number">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputWebsite">Website</label>
                        <input type="text" class="form-control" id="inputWebsite" placeholder="Website">
                    </div>
                </div>
                <button type="button" class="btn btn-primary px-4 float-right">Save</button>
            </form>
        </div>
    </div>
</div>
</div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
