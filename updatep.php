<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="stylesheet" href="update.css">
    <title>update</title>
    
</head>
<body >
<div class="backtopage">
<button class="index1"><a href="index.php">Home page</a></button>
<button class="index2"><a href="report.php">Report page</a></button>


</div>

     <?php
    
     include "backend_files/select.php";
    

 if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $con->prepare("SELECT * FROM solutionproject WHERE id=? ORDER BY id ASC");
    $stmt->bind_param('i', $id);
    $stmt->execute();
 
    $results = $stmt->get_result();
    $row = $results->fetch_assoc();
    // $stmt->close();
    // $con->close();
 }
    ?>






 <!-- form details -->

          <div class="form-form1" id="details">

          <form action="backend_files/update.php" class="form-form2"  id="updateP">

          <label for="name">Name</label>
          <input type="text" value="<?= $row['name'] ?>" name="name"  id="name">

          <label for="fcontact">Contact</label>
          <input type="tel"value="<?= $row['contact'] ?> " name="contact" id="fcontact" maxlength="14">

          <label for="mail">Email</label>
          <input type="email" value="<?= $row['mail'] ?>" name="mail" id="mail" autocomplete>

          <label for="region">Region</label>
          <select name="region" id="region">
          <option value="">Select your region</option>
          <option value="Ahafo Region" <?= $row['region']=="Ahafo Region" ?"selected": ""?>>Ahafo Region</option>
          <option value="Ashanti Region"<?= $row['region']=="Ashanti Region" ?"selected": ""?>>Ashanti Region</option>
          <option value="Bono Region"<?= $row['region']=="Bono Region" ?"selected": ""?>>Bono Region</option>
          <option value="Bono East Region"<?= $row['region']=="Bono East Region" ?"selected": ""?>>Bono East Region</option>
          <option value="Western North Region"<?= $row['region']=="Western North Region" ?"selected": ""?>>Western North Region</option>
          <option value="Western Region"<?= $row['region']=="Western  Region" ?"selected": ""?>>Western Region</option>
          <option value="Greater Accra"<?= $row['region']=="Greater Accra" ?"selected": ""?>>Greater Accra</option>
          <option value="Central Region"<?= $row['region']=="Central Region" ?"selected": ""?>>Central Region</option>
          <option value="North East Region"<?= $row['region']=="North East Region" ?"selected": ""?>>North East Region</option>
          <option value="Northern Region"<?= $row['region']=="Northern Region" ?"selected": ""?>>Northern Region</option>
          <option value="Savannah Region"<?= $row['region']=="Savanah Region" ?"selected": ""?>>Savannah Region</option>
          <option value="Upper West Region"<?= $row['region']=="Upper West Region" ?"selected": ""?>>Upper West Region</option>
          <option value="Upper East Rgion"<?= $row['region']=="Upper East Region" ?"selected": ""?>>Upper East Region</option>
          <option value="Oti Region"<?= $row['region']=="Oti Region" ?"selected": ""?>>Oti Region</option>
          <option value="Eastern Region"<?= $row['region']=="Eastern Region" ?"selected": ""?>>Eastern Region</option>
          <option value=" Volta Region"<?= $row['region']=="VoltaRegion" ?"selected": ""?>>Volta Region</option>
          </select>


         <input type="hidden" name="id" value="<?= $row['id'] ?>">
           <button type="submit" >Save Record</button>
          </form>

          </div>

          <p id="myMessage"></p>
          </div>




<script src="update.js" defer></script>
</body>
</html>