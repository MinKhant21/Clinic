@extends('layout.master')
@extends('layout.nav')
@section('content')
    <section id="list">
        <div class="container-fluid" id="wrapper">
            <h3 id="heading">Patient List</h3>
            <div class="row pt-2">
                <div class="col" style="padding-left:2%;">
                    <form action="">
                        <div class="col-3 bg-light rounded rounded-pill " style="padding-left: 13px;">
                             <div class="input-group" >                             
                                 <input type="search" id="search"  placeholder="Search table" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                                 <div class="input-group-append mt-1">
                                     <button id="button-addon1" type="submit" class="btn btn-link text-primary"><img src="{{ asset('image/search.png') }}" alt=""></button>
                                 </div>                
                             </div>   
                         </div>    
                     </form>  
                </div>
                <div class="col-2">
                  
                    
                        <div class="">
                            <div class="">                             
                                
                                <div class="append mt-1" >
                                    <button id="myBtn" data-modal="modalOne"   ><img src="{{ asset('image/add.png') }}" style="margin-right:20px" class="img-fluid" alt="">Add new patient</button>
                                    <!-- The Modal -->
                                    <div id="myModal" class="modal">

   
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="row">
                                            <div class="col"><span class="close">&times;</span></div>
                                        </div>
                                    <div class="row">
                                        <div class="col"><p id="modalheader">Add new patient</p></div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col">  <p id="subheader">Enter new patient information below</p></div>
        
                                    </div>
                                    <div class="modal-header">
                                    </div>
                                    <div class="container py-5 modal-body">
                                    <div class="row">
                                        <div class="col-md-10 mx-auto">
                                            <form>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="inputFirstname">Pet Name</label>
                                                        <input type="text" class="form-control" id="inputFirstname" placeholder="">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="status">Status</label>
                                                        
                                                            <select class="form-select" name="status" aria-invalid="false" aria-label="Default select example">
                                                            <option selected><span >Please choose status</span></option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="pawrent">Pawrent</label>
                                                        <input type="text" class="form-control" name="pawrent"  placeholder="">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="status">Breed</label>
                                                        <select class="form-select" name="status" aria-invalid="false" aria-label="Default select example">
                                                            <option selected><span >Please choose breed</span></option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                        <label for="status"  class="form-label">Gender</label>
                                                        <div class="col-sm-6" style="display: inline;">
                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                            <label class="form-check-label" for="inlineRadio1"> <p>Male</p> </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">Female</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="inputState" class="form-label">Date of Birth</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="inputContactNumber">Contact Phone No.</label>
                                                        <input type="text" class="form-control" id="inputContactNumber" placeholder="Contact Number">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="inputWebsite">Address</label>
                                                        <input type="text" class="form-control" id="inputWebsite" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="">City</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected id="city">Please choose city</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="inputWebsite">Township</label>
                                                        <select class="form-select" name="status" aria-invalid="false" aria-label="Default select example">
                                                            <option  id="township" style="opacity:1;"><span >Please choose township</span></option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-6">
                                                        <input type="submit" id="save" value="Save">
                                                        
                                                    </div>
                                                    <div class="col">
                                                        <input type="submit" id="cancel" value="Cancel">
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                                </div>
                            </div>         
                                
                        </div>   
                    </div>

                </div>
            </div>
         
            <div class="container-fluid" style="margin-left: 0.5%;" >
                <div class="row">
                    <div class="col-10">
                        <form action="">
                            <select name="status" id="status"  aria-invalid="false">
                                <option value="status">Status All</option>
                            </select>
                            <select name="breed" id="breed" style="margin-left: 30px;"  aria-invalid="false">
                                <option value="status">Breed All</option>
                            </select>
                        </form>
                       
                    </div>
                    <div class="col-2" id="page">
                            <div style="margin-left: 18%;">
                                <span>Rows per page : </span>
                       
                            <select name="breed" id="numberpage"   aria-invalid="false">
                                <option value="10">10</option>
                            </select>
                        
                            </div>

                    </div>
                    
                </div>        
            </div>
        </div>
        
        {{-- Table --}}

        <div class="container-fluid" style="margin-top: 1%;">
            <table class="table">
                <thead class=""> 
                    <tr>
                        <th scope="col">
                            <label class="control control--checkbox">
                            <input type="checkbox" class="js-check-all"/>
                            <div class="control__indicator"></div>
                            </label>
                        </th>
                        <th>ID</th>
                        <th>Pet Name</th>
                        <th>Status</th>
                        <th>Pawrent</th>
                        <th>Breed</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>Contact Phone No.</th>
                        <th>Address</th>
                        <th></th>
                        <th></th>
                    </tr>

                </thead>
                
                <tbody class="">
                    <tr>
                        <th scope="col">
                            <label class="control control--checkbox">
                              <input type="checkbox" class="js-check-all"/>
                              <div class="control__indicator"></div>
                            </label>
                          </th>
                        <td>1</td>
                        <td>Milo</td>
                        <td>
                            <img style="margin-left:10px" src="{{ asset('image/allergy.png') }}" alt="">
                        </td>
                        <td>The su san</td>
                        <td>Beagel</td>
                        <td>FeMale</td>
                        <td>29.2.2000</td>
                        <td>091e3123122</td>
                        <td>Yangon
                          
                        </td>
                       <td>
                        <div id="demo">
                          
                        </div>  
                       </td>
                        <td>
                            
                            <a href="#" onclick="showmenu()"><img src="{{ asset('image/more.png') }}" width="15px" class="img-fluid" alt=""></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">
                            <label class="control control--checkbox">
                              <input type="checkbox" class="js-check-all"/>
                              <div class="control__indicator"></div>
                            </label>
                          </th>
                        <td>2</td>
                        <td>Milo</td>
                        <td>
                            <img style="margin-left:10px" src="{{ asset('image/allergy.png') }}" alt="">
                        </td>
                        <td>The su san</td>
                        <td>Beagel</td>
                        <td>FeMale</td>
                        <td>29.2.2000</td>
                        <td>091e3123122</td>
                        <td>Yangon</td>
                        <td>
                            <div id="demo">
                          
                            </div>  
                        </td>
                        <td>
                            <!-- Default dropleft button -->
                            
                           
                                <div class="dropdown">
                                    <a href="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img width="15px" src="{{ asset('image/more.png') }}" alt=""></a>
                                <!-- Dropdown menu links -->
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                  </div>
                                </div>
                                
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">
                            <label class="control control--checkbox">
                              <input type="checkbox" class="js-check-all"/>
                              <div class="control__indicator"></div>
                            </label>
                          </th>
                        <td>3</td>
                        <td>Milo</td>
                        <td>
                            <img style="margin-left:10px" src="{{ asset('image/picky eater.png') }}" alt="">
                        </td>
                        <td>The su san</td>
                        <td>Beagel</td>
                        <td>FeMale</td>
                        <td>29.2.2000</td>
                        <td>091e3123122</td>
                        <td>Yangon</td>
                        <td>
                            <div id="demo">
                          
                        </div>  
                        </td>
                        <td>
                            <a href="#"><img src="{{ asset('image/more.png') }}" width="15px" class="img-fluid" alt=""></a>
                        </td>
                    </tr>
                </tbody>
                

            </table>
        </div>
    </section>

    {{-- <section id="showsec">
        <div class="container" >
            <div class="alert alert-danger">
                <p>Created</p>
            </div>
        </div>
    </section> --}}

    
@endsection

@section('script')
<script>


function showmenu()
{
    document.getElementById('demo').innerHTML = `
                            <ul>
                                <li>
                                    <a href="" id="edit">
                                    <img src="{{ asset("image/edit.png") }}" alt="">Edit</a></li>    
                                </li>
                                <li><a href="" id="delete">
                                    <img src="{{ asset("image/delete.png") }}" alt="">Delete</a></li>
                            </ul>
    `;
}
// Get the modal
var modal = document.getElementById("myModal","editModal");
var editmodal = document.getElementById("editModal");


// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var editbtn = document.getElementById("editBtn");

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
@endsection
