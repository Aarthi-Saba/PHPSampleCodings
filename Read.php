<?php 
include "Db.php";
// READ OPERATION
$selectquery = "SELECT * FROM PERSONAL" ;
$result = mysqli_query($myconnection,$selectquery);
if($result)
{
    echo "Records retrieved successfully";
}
else
{
    echo "query failed";
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="container" style='border:5px solid DarkBlue;margin:50px'>
        <div class="col-xs-6">
        <?php
            while($row = mysqli_fetch_assoc($result)){
        ?>
            <pre>
               <?php
                print_r($row);
               ?>
            </pre>
            <?php
            }
        ?>
        </div>
    </div>
</body>
</html>
