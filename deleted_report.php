<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
</head>

<body>
<div class="backtopage">
<div class="index1"><a href="index.php">Home page</a></div>


</div>

    <?php

    include "backend_files/dbconnection.php";

    $id = $_GET['id'];

    $stmt = $con->prepare("SELECT * FROM solutionproject WHERE id=? ORDER BY id ASC");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $results = $stmt->get_result();
    $row = $results->fetch_assoc();
    $stmt->close();
    $con->close();
    ?>


    <form action="backend_files/delete.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="submit" value="Delete Record">

    </form>
</body>

</html>