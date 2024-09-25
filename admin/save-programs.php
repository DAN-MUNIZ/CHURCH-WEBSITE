<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../connect.php';
$title = $_POST['title'];
$date = $_POST['date'];
$time = $_POST['time'];
$venue = $_POST['venue'];
$phone = $_POST['phone'];
$detail = $_POST['detail'];
// This code will save file into the database
$query = ORM ::for_table('programmes')->create();
$query->title=$title;
$query->date=$date;
$query->time=$time;
$query->venue=$venue;
$query->phone = $phone;
$query->detail=$detail;
$query->save();
  if($query){
      header("location:add-program.php?success=true");
        }else{
            header("location:add-program.php?failed=true");
        }
        
?>
<?php
include '../connect.php';

$title = $_POST['title'];
$date = $_POST['date'];
$time = $_POST['time'];
$venue = $_POST['venue'];
$phone = $_POST['phone'];
$detail = $_POST['detail'];

// Use your actual ORM class instead of "ORM" for table interaction
// Replace this with the correct ORM class and method for creating a new record
$newProgram = ORM ::for_table(); 
$newProgram->title = $title;
$newProgram->date = $date;
$newProgram->time = $time;
$newProgram->venue = $venue;
$newProgram->phone = $phone;
$newProgram->detail = $detail;

// Save the record to the database
$result = $newProgram->save();

if ($result) {
    header("location: add-program.php?success=true");
} else {
    header("location: add-program.php?failed=true");
}
?>
