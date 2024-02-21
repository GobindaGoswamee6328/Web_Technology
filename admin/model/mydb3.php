<?php
class Model
{

    function OpenCon()
    {
      $conn= new mysqli("localhost","root","","adding");
      return $conn;
    }
    function AddData($conn,$table, $name, $email,$pass,$birth,$nmbr)
    {
        $sql="INSERT INTO $table (name,email, password, birthdate, nmbr) VALUES 
        ('$name', '$email', '$pass', '$birth', '$nmbr')";
        $result= $conn->query($sql);
        return $result;
    }

  }

?>
