
<?php
include "Db.php";
include "Retrieve.php";
updateData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container" style='border:5px solid DarkBlue;margin:50px'>
        <div class="col-xs-6">
            <h4> Update User Record</h4>
            <form action="Update.php" method="post">
                <div class="form-group">
                    <label for="firstname">FirstName</label>
                    <input type="text" class="form-control" name="firstname">
                    <label for="lastname">LastName</label>
                    <input type="text" class="form-control" name="lastname">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" name="dob">
                </div>
                <div class="form-group">
                    <select name="id" id="">
                    <?php 
                        getAllData();                    
                    ?>
                </select>                      
                </div>
                <input class="btn btn-primary" type="submit" name="update" value="Update">
            </form>
        </div>
    </div>
</body>
</html>


