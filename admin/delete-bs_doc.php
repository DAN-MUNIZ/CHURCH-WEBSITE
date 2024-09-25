<?php


	include'connect.php';
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM bible_study WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:bs_docs.php?success=true");
        }else{
            header("location:bs_docs.php?failed=true");
        } 
		
?>