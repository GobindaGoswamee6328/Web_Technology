<?php

include '../model/mydb5.php';

$name=$email==$gender=$address=$birth=$nmbr=$haserror="";
$nameError=$emailError=$genderError=$addressError=$birthError=$nmbrError="";
$emailValidation="";

if(isset($_REQUEST["SUBMIT"]))
{
  if(empty($_REQUEST['name'])){
    $nameError= "*Name Required";
  }else{
     $name=$_REQUEST['name'];
     
    if(!preg_match("/^[a-zA-z]*$/", $name))
    {
      $nameError= "Invalid Name!";
    }
  }


  if(empty($_REQUEST["email"]))
  {
    $emailError = "*E-mail Required";
  }
  else
  {
    $email = $_REQUEST["email"];

    $emailValidation = !filter_var($email,FILTER_VALIDATE_EMAIL);  
    if($emailValidation)
    {
      $emailError = "Invalid E-mail!";
    
    }

  }


  if(empty($_REQUEST["gender"]))
  {
    $genderError = "*Select your Gender";
  }
  else
  {
    $gender = $_REQUEST["gender"];
  }

  if(empty($_REQUEST["address"]))
  {
    $addressError = "*Enter Your Address";
  }
  else
  {
    $address = $_REQUEST["address"];
  }


  if(empty($_REQUEST["birth"]))
  {
    $birthError = "*Birthdate Required";
  }
  else
  {
    $birth = $_REQUEST["birth"];

  }

  
  if(empty($_REQUEST["nmbr"]))
  {
    $nmbrError = "*Number Required";

  }
  else
  {
    $nmbr = $_REQUEST["nmbr"];

    if (!preg_match ("/^\d{11}$/", $nmbr))
    {
      $nmbrError = "Invalid Nmbr!";
    }
  }
  

  if($haserror!=1)
  {
    $mydb= new Model();
    $conobj= $mydb->Opencon();
    $result=$mydb->AddStudent($conobj,"details",$_REQUEST["name"],
    $_REQUEST["email"], $_REQUEST["gender"],$_REQUEST["address"],$_REQUEST["birth"],$_REQUEST["nmbr"]);

    if($result===TRUE)
    {
       echo "Successfully Added";
    }
   else
   {
      echo "Error Occurred".$conobj->error;
   }
 }
   else
   {
      echo "Please complete the validation ";
   }

}

?>