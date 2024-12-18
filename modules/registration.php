<?php
include "includes/connection.php";

if(isset($_POST["btn_submit"])){
    $fullname=$_POST["input_fullname"];
    $email=$_POST["input_email"];
    $birthday=$_POST["input_bday"];

    $sql = "INSERT INTO registration_table (name, email, birthday)
VALUES ('$fullname', '$email', '$birthday ')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}


?>


<h5 class="card-title">Registration form</h5>

<!-- Floating Labels Form -->
<form class="row g-3" method="POST" action="index_admin.php?page=registration">
  <div class="col-md-12">
    <div class="form-floating">
      <input type="text" class="form-control" name="input_fullname" id="floatingName" placeholder="Your Name" required>
      <label for="floatingName">Your Name</label>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-floating">
      <input type="email" class="form-control" name="input_email" id="floatingEmail" placeholder="Your Email" required>
      <label for="floatingEmail">Your Email</label>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-floating">
      <input type="date" class="form-control" name="input_bday" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Birthday</label>
    </div>
  </div>
  <div class="col-12">
    <div class="form-floating">
      <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
      <label for="floatingTextarea">Address</label>
    </div>
  </div>
  <div class="col-md-6">
    <div class="col-md-12">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingCity" placeholder="City">
        <label for="floatingCity">City</label>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-floating mb-3">
      <select class="form-select" id="floatingSelect" aria-label="State">
        <option selected>New York</option>
        <option value="1">Oregon</option>
        <option value="2">DC</option>
      </select>
      <label for="floatingSelect">State</label>
    </div>
  </div>
  <div class="col-md-2">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingZip" placeholder="Zip">
      <label for="floatingZip">Zip</label>
    </div>
  </div>
  <div class="text-center">
    <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </div>
</form><!-- End floating Labels Form -->