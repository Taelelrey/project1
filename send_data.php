<?php
require_once('connect.php');

if(isset($_POST["save"])) {
    $editor_data = $_POST['editor1'];

    $sql = "INSERT INTO test(tags, txtdescr) VALUES('tag', '$editor_data')";
    setData($sql);
    header("location:trial.php");
} else {
    echo "Error";
}
?>