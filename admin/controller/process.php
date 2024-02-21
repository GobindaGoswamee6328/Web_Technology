<?php

  $nameError=$emailError=$addressError=$genderError=$sportError=$interestError="";

  if (isset($_REQUEST["submit"]))
  {
  if (!empty($_REQUEST["name"]))
  {
    $nameError = $_REQUEST["name"]."<br>";
  }
 else
 {
    $nameError = "enter your full name";
 }


 if (!empty($_REQUEST["email"]))
 {
    $emailError= $_REQUEST["email"]."<br>";
 }
 else
 {
    $emailError= "enter a valid mail";
 }


 if (!empty($_REQUEST["address"]))
 {
    $addressError= $_REQUEST["address"]."<br>";
 }
 else
 {
    $addressError= "enter your address";
 }


 if (!empty($_REQUEST["gender"]))
 {
    $genderError= $_REQUEST["gender"]."<br>";
 }
 else
 {
    $genderError= "select your gender";
 }


 if (!empty($_REQUEST["sport"]))
 {
    $sportError= $_REQUEST["sport"]."<br>";
 }
 else
 {
    $sportError= "choose your sports";
 }


 if (!empty($_REQUEST["interest"]))
 {
    $interestError= $_REQUEST["interest"]."<br>";
 }
 else
 {
    $interestError= "Your interest";
 }


}


?>