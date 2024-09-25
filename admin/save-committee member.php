<?php
include 'connect.php';
$name = $_POST['name'];
$office = $_POST['office'];
$phone = $_POST['phone'];
$email = $_POST['email'];
// This code will save file into the database
$query = ORM ::for_table('commitee')->create();
$query->name=$name;
$query->office=$office;
$query->zone=$zone;
$query->phone=$phone;
$query->email = $email;
$query->save();
  if($query){
      header("location:add-committee.php?success=true");
        }else{
            header("location:add-committee.php?failed=true");
        }
        
?>
