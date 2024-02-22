<?php
class Model
{

    function OpenCon()
    {
      $conn= new mysqli("localhost","root","","student");
      return $conn;
    }
    function AddStudent($conn,$table, $name, $email, 
    $gender,$address,$birth,$nmbr)
    {
        $sql="INSERT INTO $table (name,email, gender,address, birthdate, nmbr) VALUES 
        ('$name', '$email', '$gender','$address', '$birth', '$nmbr')";
       $result= $conn->query($sql);
       return $result;
    }

}

?>
