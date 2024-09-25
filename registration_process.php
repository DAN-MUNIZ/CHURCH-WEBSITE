<?php 
include 'connect.php';
session_start();

function clean($str) {
	global $conn;
		$str = @trim($str);
		// if(get_magic_quotes_gpc()) {
		// 	$str = stripslashes($str);
		// }
		return mysqli_real_escape_string($conn,$str);
	}
	
	//Sanitize the POST values
	$firstname = clean($_POST['first name']);
	$lastname = clean($_POST['last name']);
    $idno = clean($_POST['id no']);
    $membershipno = clean($_POST['membership_no']);
    $gender = clean($_POST['gender']);
    $phone = clean($_POST['phone']);
    $email = clean($_POST['email']);
    $modeoftransport = clean($_POST['mode_of_transport']);

	
	//Input Validations
	if($firstname == '') {
		$errmsg_arr[] = 'First Name missing';
		$errflag = true;
	}
	if($lastname == '') {
		$errmsg_arr[] = 'Last Name missing';
		$errflag = true;
	}
    if($idno == '') {
		$errmsg_arr[] = 'ID No missing';
		$errflag = true;
	}
    if($membershipno == '') {
		$errmsg_arr[] = 'Membership No missing';
		$errflag = true;
	}
    if($gender == '') {
		$errmsg_arr[] = 'Select your gender';
		$errflag = true;
	}
    if($phone== '') {
		$errmsg_arr[] = 'Phone No missing';
		$errflag = true;
	}
    if (empty($email)) {
        $errmsg_arr[] = 'Email address is required';
        $errflag = true;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errmsg_arr[] = 'Invalid email address format';
        $errflag = true;
    }
    if($modeoftransport == '') {
		$errmsg_arr[] = 'Select your mode of transport!!';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	
	
	//Create query
	$qry="INSERT * INTO event_register WHERE username='$login' AND password='$password'";
	$result=mysqli_query($conn,$qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['name'];
			$_SESSION['SESS_LAST_NAME'] = $member['email'];
			$_SESSION['SESS_PRO_PIC'] = $member['file'];
			session_write_close();
			header("location: index.php");
			exit();
		}else {
			
  echo '<script language = "javascript">';
  // echo "window.location.href='login.php'"; 
  echo "alert('Something went wrong, Enter correct details');window.location.href='sign-in.php'";
   echo '</script>';
    exit;
   // echo "<script language = 'javascript'> alert('Wrong Details');'</script>";
                       
                       
                    }
	}else {
		die("Query failed");
	}
?>




