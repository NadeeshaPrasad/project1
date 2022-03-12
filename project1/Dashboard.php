<?php session_start(); ?>
<?php 
       //checking if a user is logged in
       //if(!isset($_SESSION['Id'])){
        //header('Location: Register.php');
       //}  

 $con=mysqli_connect("localhost","root","","Student_Reg");

     $user_list = '';
     
     //getting  the list of users
     $query = "SELECT * FROM Register WHERE Id";
     $users = mysqli_query($con, $query); 

     if($users){
      while($user = mysqli_fetch_assoc($users)) {
        $user_list .= "<tr>";
        $user_list .= "<td>{$user['Id']}</td>";
        $user_list .= "<td>{$user['Name']}</td>";
        $user_list .= "<td>{$user['Date_of_birth']}</td>";
        $user_list .= "<td>{$user['Age']}</td>";
        $user_list .= "<td>{$user['Address']}</td>";
        $user_list .= "<td>{$user['Religion']}</td>";
        $user_list .= "<td>{$user['Person_Image']}</td>";
        $user_list .= "</tr>";
      }
     } else{
        echo "Database query failed.";
     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User</title>
  <link rel="stylesheet" type="text/css" href="Dash.css">
</head>
<body>

<header>
  <div class="appname">User Dashboard</div>
  <div class="Loggedin"></div>

</header>

<main>
    <table class = "masterlist">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Age</th>
        <th>Address</th>
        <th>Religion</th>
        <th>Person Image</th>
      </tr>

      <?php echo $user_list; ?>

    </table>


  </main>
</body>
</html>

     

