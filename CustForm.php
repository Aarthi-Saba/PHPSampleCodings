<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="container" style='border:5px solid DarkBlue;margin:50px'>
        <div class="col-xs-6">
           <h4> Create User Record</h4>
            <form action="CustForm.php" method="post">
                <div class="form-group">
                    <label for="custname">CustomerName</label>
                    <input type="text" class="form-control" name="custname">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
<?php
   if(isset($_POST['submit']))
    {
       $custname = $_POST['custname'];
       $hashformat= "$2y$10$";
       $hashsalt ="mysaltforencryption202";
       $myhash = $hashformat . $hashsalt;
       $password = crypt($_POST['password'],$myhash);
       $myconnection = mysqli_connect("localhost","root","","userdetails");
       if($myconnection){
           echo "DB connected";
       }
       $myquery = "INSERT INTO Customer (CustName,Password) VALUES ('$custname','$password')";
       $result = mysqli_query($myconnection,$myquery);
        if($result)
        {
         echo "Data added to table successfully !!!"."<br>";
        }
    }
?>
