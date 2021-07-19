<?php
   include_once('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>WheelChair Management System</title>
</head>
<body>

<nav>
        <div class="nav-container">
           <div class="wrapper">
              <a href="index.php"><img src="images/logo.png" alt="Mustard Seed Logo"></a>
           </div>
     </div>
     </nav>

<section>
      <div class="hero-container">
         <div class="wrapper">
         <h1>Sophie's Place</h1>
      </div>
</div>
</section>
  

<section class="wrapper">
</section>
<section class="wrapper">

<table>
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Location</th>
          <th>Age</th>
          <th colspan = '2'>Action</th>
          </tr>
      <thead>
      <tbody>
       
        <?php 

$query = mysqli_query($conn,"SELECT * FROM tblresidentdata ORDER BY firstname ASC");

if($query->num_rows > 0){
 while ($row = mysqli_fetch_assoc($query))
 {
   // echo "<tr><td>".$row['firstname']."</td></tr><tr><td>";
   $name = $row['firstname'];
  $lname = $row['lastname'];
  $location = $row['location'];
  $age = $row['age'];


  echo '<tr><td>'.$name.'</td><td>'.$lname.'</td><td>'.$location.'</td><td>'.$age.'</td><td><a class = "navlink" href ="edit.php?edit='.$name.'">Edit</a></td>
  <td><a class = "navlink" href = "viewresidents.php?name='.$name.'">View</a></td></tr>';


  
 }
}
  ?>


          <!-- <td><a class = "link" href="viewresidents.php?name=<?php echo $name;?>"><?php echo $name?></a><br></td>
          <td><?php echo $lname?></td>
          <td><?php echo $location?></td>
          <td><?php echo $age?></td>
          <td>Kangal / Coil</td>
        </tr> -->
  
      </tbody>
</table>
</section>


<?php 

    

 
 $conn->close(); // Close database connection


?>

<footer>
   <nav>
         <div class="footer-container">
         </div>
   </nav>
</footer>

<script src="main.js"></script>
</body>
</html>