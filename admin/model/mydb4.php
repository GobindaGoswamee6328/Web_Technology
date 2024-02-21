<?php
class Model
{

    function OpenCon()
    {
      $conn= new mysqli("localhost","root","","Information");
      return $conn;
    }
    function AddStudent($conn,$table, $name, $email, 
    $pass, $gender,$birth,$nmbr)
    {
        $sql="INSERT INTO $table (name,email, password, gender, birthdate, nmbr) VALUES 
        ('$name', '$email', '$pass', '$gender', '$birth', '$nmbr')";
       $result= $conn->query($sql);
       return $result;
    }

}

?>
