<?php


	include'connect.php';
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM notices WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:all-notices.php?success=true");
        }else{
            header("location:all-notices.php?failed=true");
        } 
		
?>