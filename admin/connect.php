<?php

$db_host		= "localhost";
$db_user		= "qrzyqcto_MUN1Z";
$db_pass		= "Mun1z**/01/****";
$db_database	= "qrzyqcto_church_db";

include "idiorm.php";
/* End config */
ORM::configure("mysql:host=".$db_host.";dbname=".$db_database);
ORM::configure("username", $db_user);
ORM::configure("password", $db_pass);

try {
    $db = new PDO("mysql:host=".$db_host.";dbname=".$db_database, $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$conn = mysqli_connect($db_host, $db_user, $db_pass);
mysqli_select_db($conn, $db_database);

class App {
    public static function message($type, $message, $code = '') {
        if ($type == 'error') {
            return '<div class="alert alert-danger alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        '.$message.' <a class="alert-link" href="#">'.$code.'</a>.
                    </div>';
        } else {
            return '<div class="alert alert-success alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        '.$message.' <a class="alert-link" href="#">'.$code.'</a>.
                    </div>';
        }
    }
}

function get($val) {
    return isset($_GET[$val]) ? $_GET[$val] : null;
}
?>

