<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coments</title>
    <link rel="stylesheet" href="coment.css">
</head>
<body>

    
<div class="Creport">
    <h1>Comments Report</h1>
</div>

<div class="backtopage">
        <div><button class="index1"><a href="index.php">Home Page</a></button></div>
            <div><button class="index1"><a href="report.php">See Report</a></button></div>
        <div><button class="rprint" onclick="window.print()">Print Report</a></button></div>


    </div>




<?php

include "backend_files/coments_insertion.php";
?>

<div class="formContainer">

    <table border="1px">

    <tr>
            <th>Id</th>
            <th>Comment</th>
            <th>Sent time</th>
            <th>Action</th>
        </tr>

    <?php while ($row = $results->fetch_assoc()) { ?>
        
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?=$row['comment'] ?></td>
            <td><?=$row['created_at'] ?></td>

             <td><a href="" class="trash" onclick="return confirm('Do you want to delete this comment?')">Trash Comment</a></td>

        </tr>

    <?php } ?>
   
    </table>

</div>
    
</body>
</html>