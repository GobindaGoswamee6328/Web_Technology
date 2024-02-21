<?php 

include '../model/mydb3.php';

$name=$email=$pass=$birth=$nmbr=$haserror="";
$nameError=$emailError=$passError=$birthError=$nmbrError="";
$emailValidation=$passValidation="";

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

  if(empty($_REQUEST["pass"]))
  {
    $passError = "*Password Required";
  }
  else
  {
    $pass = $_REQUEST["pass"];

    $passValidation = strlen($pass);  
    if ($passValidation > 20)
    {
      $passError = "Invalid Pass!";
    }
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
    $result=$mydb->AddData($conobj,"UserCatagory4",$_REQUEST["name"],
    $_REQUEST["email"], $_REQUEST["pass"],$_REQUEST["birth"],$_REQUEST["nmbr"]);

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