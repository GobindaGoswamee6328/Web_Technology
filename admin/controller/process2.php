<?php

$productsError=$quantityError=$nameError=$emailError=$nmbrError=$addressError=$billError=$optionError=$deliveryError=$instructorError=$shipError=$termError="";

if (isset($_REQUEST["submit"]))
{

if(!empty($_REQUEST["products"]))
{
  $productsError = $_REQUEST["products"]."<br>";
}
else
{
    $productsError= "choose your products";
}


if(!empty($_REQUEST["quantity"]))
{
    $quantityError = $_REQUEST["quantity"]."<br>";
}
else
{
    $quantityError= "enter quantity";
}


if(!empty($_REQUEST["name"]))
{
    $nameError = $_REQUEST["name"]."<br>";
}
else
{
    $nameError= "enter your full name";
}


if(!empty($_REQUEST["email"]))
{
    $emailError = $_REQUEST["email"]."<br>";
}
else
{
    $emailError= "enter valid email";
}


if(!empty($_REQUEST["nmbr"]))
{
    $nmbrError = $_REQUEST["nmbr"]."<br>";
}
else
{
    $nmbrError= "enter valid nmbr";
}


if(!empty($_REQUEST["address"]))
{
    $addressError = $_REQUEST["address"]."<br>";
}
else
{
    $addressError= "enter your address";
}


if(!empty($_REQUEST["bill"]))
{
    $billError = $_REQUEST["bill"]."<br>";
}
else
{
    $billError= "enter your bill address";
}


if(!empty($_REQUEST["option"]))
{
    $optionError = $_REQUEST["option"];
}
else
{
    $optionError = "select your option";
}


if(!empty($_REQUEST["delivery"]))
{
    $deliveryError = $_REQUEST["delivery"]."<br>";
}
else
{
    $deliveryError = " select delivery option";

}


if(!empty($_REQUEST["instructor"]))
{
    $instructorError = $_REQUEST["instructor"]."<br>";
}
else
{
    $instructorError = "enter instructor";
}


if(!empty($_REQUEST["ship"]))
{
    $shipError = $_REQUEST["ship"]."<br>";
}
else
{
    $shipError = "choose this";
}

echo $_FILES["certificate"]["name"];
move_uploaded_file($_FILES["certificate"]["tmp_name"],"../photo/".$_REQUEST["email"].".jpg") ;


if(!empty($_REQUEST["term"]))
{
    $termError = $_REQUEST["term"]."<br>";
}
else
{
    $termError = "select the term";
}

}

?>