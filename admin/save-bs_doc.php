<?php
include 'connect.php';
$id = $_POST['id'];
$File_Name = $_POST['file-name'];
$File = $_POST['file'];
// This code will save file into the database
$query = ORM ::for_table('bible_study')->create();
$query->id=$id;
$query->File_Name=$file-name;
$query->File=$file;
$query->save();
  if($query){
      header("location:add-bs_doc.php?success=true");
        }else{
            header("location:add-bs_doc.php?failed=true");
        }
        
?>
