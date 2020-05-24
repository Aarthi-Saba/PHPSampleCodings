<?php
include "Db.php"; ?>
<?php
// CREATE OPERATION 
function createData()
{
    if(isset($_POST['submit']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        //$password = $_POST['password'];
        $birthdate = $_POST['dob'];
        $myquery = "INSERT INTO PERSONAL (FirstName,LastName,Dob) VALUES ('$firstname','$lastname','$birthdate')";
        $result = mysqli_query($myconnection,$myquery);
        if($result)
        {
         echo "Data added to table successfully !!!"."<br>";
        }
    }
}
//READ OPERATION
function getAllData()
{
    global $myconnection;
    $selectquery = "SELECT * FROM PERSONAL" ;
    $result = mysqli_query($myconnection,$selectquery);
    if(!$result){
        die("Query Failed".mysqli_error());
    }
    while($row = mysqli_fetch_assoc($result))
    { 
        $currentid = $row['Id'];
        echo "<option value='$currentid'>$currentid</option>";
    }
}
//UPDATE OPERATION
function updateData()
{
    if(isset($_POST['update']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        //$password = $_POST['password'];
        $birthdate = $_POST['dob'];
        $id = $_POST['id'];
        global $myconnection;
        $updatequery = "UPDATE PERSONAL SET FirstName ='$firstname',LastName ='$lastname',Dob='$birthdate' WHERE Id=$id";
        $rowsaffected = mysqli_query($myconnection,$updatequery);
        if(!$rowsaffected)
        {
            die("Error while updating".mysqli_error());
        }
        else
        {
            echo "Record Updated."."<br>";  
        }
    }
}
//DELETE OPERATION
function deleteData()
{
    if(isset($_POST['delete']))
    {
        $id = $_POST['id'];
        global $myconnection;
        $deletequery = "DELETE FROM PERSONAL WHERE Id=$id";
        $rowsaffected = mysqli_query($myconnection,$deletequery);
        if(!$rowsaffected)
        {
            die("Error while deleting".mysqli_error());
        }
        else
        {
            echo "Record Deleted."."<br>";  
        }
    }
}

?>