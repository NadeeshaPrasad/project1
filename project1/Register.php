<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2>Person Registration</h2>

<div class="container">
  <form method="post" action="Register.php" >
  <div class="row">
    <div class="col-25">
      <label for="Id">ID</label>
    </div>
    <div class="col-75">
      <input type="text" id="id" name="t1" placeholder="Your Identy Card..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="name">Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="t2" placeholder="Your Name..">
    </div>
  </div>

 <div class="row">
    <div class="col-25">
      <label for="dob">Date of birth</label>
    </div>
    <div class="col-75">
      <input type="text" id="dob" name="t3" placeholder="Your Date Of Birth..">
    </div>
  </div>

   <div class="row">
    <div class="col-25">
      <label for="age">Age</label>
    </div>
    <div class="col-75">
      <input type="text" id="age" name="t4" placeholder="Your Age..">
    </div>
  </div>

   <div class="row">
    <div class="col-25">
      <label for="contact">Contact_No</label>
    </div>
    <div class="col-75">
      <input type="text" id="contact" name="t5" placeholder="Your Telephone Number..">
    </div>
  </div>

   <div class="row">
    <div class="col-25">
      <label for="address">Address</label>
    </div>
    <div class="col-75">
      <input type="text" id="addr" name="t6" placeholder="Your Address..">
    </div>
  </div>

   <div class="row">
    <div class="col-25">
      <label for="religion">Religion</label>
    </div>
    <div class="col-75">
      <input type="text" id="Rlg" name="t7" placeholder="Your Religion..">
    </div>
  </div>

   <div class="row">
    <div class="col-25">
      <label for="fname">Person Image</label>
    </div>
    <div class="col-75">
      <input class="form-control" type="file" id="image"  name="t8">
    </div>
  </div>

  <br>
  <div class="row">
    <input type="submit" name="s1" value="Submit">
  </div>
  </form>
</div>

</body>
</html>


<?php 


$con=mysqli_connect("localhost","root","","Student_Reg");


      if(isset($_POST["s1"]))
        {
          $a=$_POST["t1"];
          $b=$_POST["t2"];
          $c=$_POST["t3"];
          $d=$_POST["t4"];
          $e=$_POST["t5"];
          $f=$_POST["t6"];
          $g=$_POST["t7"];
          $h=$_POST["t8"];
              $sql="insert into Register values('$a','$b','$c','$d','$e','$f','$g','$h')";
              $result=mysqli_query($con,$sql);
              echo "<script>
              window.alert('Sucessfully Added')
            </script>";

        }



 ?>

