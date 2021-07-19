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
     <?php 
         $name = $_GET['edit'];
         $query = mysqli_query($conn,"SELECT * FROM tblresidentdata Where firstname = '$name'");
         if($query->num_rows > 0){
             while($row = mysqli_fetch_assoc($query))
             {
                    echo "<h4>".$row['firstname']." ".$row['lastname']."</h4>";
                   
             }
            }
     
     ?>
     </section>
    

<section class="form-wrapper">
    <form action="update.php" method="POST">
        
        <label>Current Chair</label>
        <input class="input" type="text" name="currentchair">
        <label>Self Propelled</label>
        <input class="input" type="text" name="selfpropel">
        <label>Foot Hand</label>
        <input class="input" type="text" name="foothand">
        <label>Re-usable for a another resident?: </label>
        <input class="input" type="text" name="reuse">
        <label>Size: </label>
        <input class="input" type="text" name="currentchair">
        <label>A- Shoulder Width:</label>
        <input class="input" type="text">
        <label>B- Chest Width:</label>
        <input class="input" type="text">
        <label>C- Hip Width:</label>
        <input class="input" type="text">
        <label>D-Width at Knee:</label>
        <input class="input" type="text">
        <label>E-Seat to Top of Head:</label>
        <input class="input" type="text">
        <label>F-Seat to Top of Shoulder (L, R):</label>
        <input class="input" type="text">
        <label>G-Seat to Axilla (L,R) Armpit:</label>
        <input class="input" type="text">
        <label>I. Seat Depth (L,R) Actual - 2-3 Fingers:</label>
        <input class="input" type="text">
        <label>J- Seat to Footplate (L,R):</label>
        <input class="input" type="text">

        <label>Type of Chair Needed:</label>
       <select name="" id="">
           <option>Please select</option>
           <option>Basic</option>
           <option>Folding</option>
           <option>Rigid</option>
           <option>Tilt in Space</option>
           <option>Stroller</option>
           <option>Other</option>
       </select>

       <label>Other</label>
        <input class="input" type="text">

       <label>Type of Back Needed:</label>
       <select name="" id="">
           <option>Please select</option>
           <option>Planar</option>
           <option>Sling</option>
           <option>Axiom</option>
           <option>Acta Relief</option>
           <option>Other</option>
       </select>
        
       
       <label>Other</label>
        <input class="input" type="text">
        
        <label>Laterals</label>
       <select name="" id="">
           <option>Please select</option>
           <option>Yes</option>
           <option>No</option>
          
       </select>

              
       <label>Size</label>
        <input class="input" type="text">

        <input type="submit" name="Submit" class="submitbtn">
       <a class = "cancel-link" onclick="window.history.back();">Cancel</a>

       
    </form>
</section>

<footer>
   <nav>
         <div class="footer-container">
         </div>
   </nav>
</footer>

</body>
</html>