<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" href="report.css">
</head>

<body>

    <?php
    include "backend_files/dbconnection.php";
    include "backend_files/contactform_insertion.php";
    include "backend_files/select.php";
    ?>

    <div class="viewrecord">
        Welcome to the contact page
    </div>

    <div class="backtopage">
        <div><button class="index1"><a href="index.php">Home page</a></button></div>
        <div><button class="index1"><a href="displaycomments.php">Check comment</a></button></div>
        <div><button class="rprint" onclick="window.print()">Print Report</a></button></div>


    </div>


    <div class="table-container">
        

    <table border="1px">
        <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Region</th>
            <th>Email</th>
            <th>Id</th>
            <th>Action</th>
        </tr>

        <?php while ($row = $results->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['name'] ?></td>
                <td><?= $row['contact'] ?></td>
                <td><?= $row['region'] ?></td>
                <td><?= $row['mail'] ?></td>
                <td><?= $row['id'] ?></td>
                <!-- delete and update buttons -->
                <td>
                    <a href="deleted_report.php?id=<?= $row['id'] ?>"  onclick="return confirm('Do you want to delete this record?')">Delete</a>
                    <a href="updatep.php?id=<?= $row['id'] ?>" onclick="return confirm('Do you want to edit this record?')">Edit </a>

                </td>





            </tr>
        <?php } ?>
    </table>

    </div>




</body>

</html>