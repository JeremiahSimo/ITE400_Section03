<div class="card">

<?php
      include './database/connection.php';

      if(isset($_POST['btn_submit'])){
        $Name=$_POST["Name"];
        $Contact_no=$_POST["Contact_No"];
        $Address=$_POST["Address"];
        $Date=$_POST["Date"]

        $sql = "INSERT INTO `bookform`(`user_id`, `Name`, `ContactNo`, `Address`, `Date`) VALUES ('$Name','$Contact_no','$Address','$Date')";

      if($con->query($sql)===TRUE ){
       echo"<script>alert('Lab you sir :) ')</script>";
      }
      else{
        echo"Failed";
      }
       }

  ?> 

            <div class="card-body">
            <form class="row g-3">
                <div class="col-12">
                  <label for="inputname" class="form-label">Full name</label>
                  <input type="text" name = "Name" class="form-control" id="inputname">
                </div>
                <div class="col-12">
                  <label for="inputnumber" class="form-label">Contact Number</label>
                  <input type="number" name = "Contact_No" class="form-control" id="inputnumber">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" name = "Address"  class="form-control" id="inputAddress">
                </div>
                <div class="col-12">
                  <label for="inputDate" class="form-label">Date</label>
                  <input type="date" name = "Date"  class="form-control" id="inputDate" >
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>